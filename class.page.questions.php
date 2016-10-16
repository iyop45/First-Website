<?php
class questions{
	private $mysqli;

	function __construct($mysqli){
		$this->mysqli = $mysqli;
	}

	public function questions(){
		if($stmt=$this->mysqli->prepare("SELECT q.id,
												q.title,
												LEFT(q.content,30),
												q.date,
												q.views,
												q.upvotes-q.downvotes as votes,
												a.answers,
												a.answered,
												m.username,
												IF(LENGTH(m.avatar) > 0, m.avatar , CONCAT('http://vanillicon.com/',md5(m.email)))
												FROM qa_questions AS q
												INNER JOIN users as m ON (m.id = q.user_id)
												LEFT JOIN
												  ( SELECT qa_answers.question_id,
														   COUNT(*) AS answers,
														   COUNT(
															IF(accepted = 1, 1, 0)
														   ) as answered
												   FROM qa_answers) AS a ON (a.question_id = q.id)
												ORDER BY q.date DESC")){
			$stmt->execute();
			$stmt->store_result();
			$stmt->bind_result(
								$id,
								$title,
								$content,
								$date,
								$views,
								$votes,
								$answers,
								$answered,
								$username,
								$avatar
							  );
			$questions = array();
			while($stmt->fetch()){
				$questions[] = array(
								  'id'=>$id,
								  'title'=>$title,
								  'content'=>$content,
								  'date'=>$date,
								  'views'=>$views,
								  'votes'=>$votes,
								  'answers'=>$answers,
								  'answered'=>$answered,
								  'username'=>$username,
								  'avatar'=>$avatar
								  );
			}
			$stmt->close();
			return $questions;
		}else{
			return false;
		}
	}
	
	public function answers($question_id){
		if($stmt=$this->mysqli->prepare("
			(SELECT q.id as id,
				q.title as title,
				q.content as content,
				q.date as date,
				q.views as views,
				q.upvotes-q.downvotes as votes,
				0 as accepted,
				m1.username as username,
				IF(LENGTH(m1.avatar) > 0, m1.avatar , CONCAT('http://vanillicon.com/',md5(m1.email))) as avatar
				FROM qa_questions as q 
				INNER JOIN users as m1 ON (m1.id = q.user_id)
				WHERE q.id = ?)
			UNION
			(SELECT a.id as id,
					0 as title,
					a.content as content,
					a.date as date,
					0 as views,
					a.upvotes-a.downvotes as votes,
					a.accepted as accepted,
					m2.username as username,
					IF(LENGTH(m2.avatar) > 0, m2.avatar , CONCAT('http://vanillicon.com/',md5(m2.email))) as avatar
					FROM qa_answers as a
					INNER JOIN users as m2 ON (m2.id = a.user_id)
					WHERE a.question_id = ?)")){
			$stmt->bind_param('ii',$question_id,$question_id);
			$stmt->execute();
			$stmt->store_result();
			$stmt->bind_result(
								$id,
								$title,
								$content,
								$date,
								$views,
								$votes,
								$accepted,
								$username,
								$avatar
							  );
			$answers = array();
			while($stmt->fetch()){
				$answers[] = array(
								  'id'=>$id,
								  'title'=>$title,
								  'content'=>$content,
								  'date'=>$date,
								  'views'=>$views,
								  'votes'=>$votes,
								  'accepted'=>$accepted,
								  'username'=>$username,
								  'avatar'=>$avatar
								  );
			}
			$stmt->close();
			return $answers;
		}else{
			return false;
		}
	}
	
	public function comments($id,$is_question=1){
		if($stmt=$this->mysqli->prepare("
			SELECT c.id,
					c.content,
					c.date,
					m.username,
					IF(LENGTH(m.avatar) > 0, m.avatar , CONCAT('http://vanillicon.com/',md5(m.email)))
					FROM qa_comments as c
					INNER JOIN users as m ON(m.id = c.user_id)
					WHERE c.type_id = ?
					AND c.is_question = ?")){
				$stmt->bind_param('ii',$id,$is_question);
				$stmt->execute();
				$stmt->store_result();
				$stmt->bind_result(
									$comment_id,
									$content,
									$date,
									$username,
									$avatar
								   );
				$comments = array();
				while($stmt->fetch()){
				$comments[] = array(
								  'comment_id'=>$comment_id,
								  'content'=>$content,
								  'date'=>$date,
								  'username'=>$username,
								  'avatar'=>$avatar
								  );
				}
				$stmt->close();
				return $comments;
			
		}else{
			return false;
		}
	}
}