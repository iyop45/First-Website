<?php
class news{
	private $cq;
	private $mysqli;
	public $comments;

	function __construct($cq,$mysqli){
		$this->cq = $cq;
		$this->mysqli = $mysqli;
	}
	
	public function article($id){
		if($stmt = $this->mysqli->prepare("
			SELECT  n.id,
					n.title,
					n.content,
					n.reference,
					n.image,
					(SELECT
						COUNT(*) FROM news_votes AS v WHERE v.news_id = n.id) AS votes,
					n.date
					FROM news_articles as n
					WHERE n.id = ?
					LIMIT 1")){
			$stmt->bind_param('i',$id);
			$stmt->execute();
			$stmt->store_result();
			$stmt->bind_result($id,$title,$content,$reference,$image,$votes,$date);
			$stmt->fetch();
			if($stmt->num_rows === 0){
				$stmt->close();
				return $this->mainArticle();
			}else{
				$stmt->close();
				return array(
							'id'=>$id,
							'title'=>$title,
							'content'=>$content,
							'reference'=>$reference,
							'image'=>$image,
							'votes'=>$votes,
							'date'=>date("Y-m-d", strtotime($date))
							);
			}
		}else{
			return false;
		}
	}
	
	public function mainArticle(){
		if($stmt = $this->mysqli->prepare("
			SELECT  n.id,
					n.title,
					n.content,
					n.reference,
					n.image,
					(SELECT
						COUNT(*) FROM news_votes AS v WHERE v.news_id = n.id) AS votes,
					n.date
					FROM news_articles as n
					ORDER BY n.date DESC
					LIMIT 1")){
			$stmt->execute();
			$stmt->store_result();
			$stmt->bind_result($id,$title,$content,$reference,$image,$votes,$date);
			$stmt->fetch();
			$stmt->close();
			return array(
						'id'=>$id,
						'title'=>$title,
						'content'=>$content,
						'reference'=>$reference,
						'image'=>$image,
						'votes'=>$votes,
						'date'=>date("Y-m-d", strtotime($date))
						);
		}else{
			return false;
		}
	}
	
	public function singleTags($input){
		$output = str_replace('[hr]', '<hr>', $input);
		$output = str_replace('[br]', '<br>', $output);
		return $output;
	}
	
	function display_comments(array $comments, $level = 0){
		require_once '/home/content/99/11499199/html/lib/parser/Parser.php';
		$parser = new \JBBCode\Parser();
		$parser->addCodeDefinitionSet(new \JBBCode\ForumDefinitionSet());
		foreach ($comments as $info){
			if($info['flagCount'] > \techberry\core\constants::$newsSettings['flagCountForUnpopular'])
			{
				$this->comments .= '<div id="comment_'.$info['id'].'" class="comment_wrap unpopular" style="padding-left:'.($level*20).'px">';
			}
			else
			{
				$this->comments .= '<div id="comment_'.$info['id'].'" class="comment_wrap" style="padding-left:'.($level*20).'px">';
			}
			$this->comments .= '<a href="http://techberry.org/user/'.$info['username'].'/" data-user="'.$info['username'].'" class="miniprofile">
								<div class="n_avatar_bubble_list">
										<img class="n_avatar_image_list" src="'.$info['avatar'].'"/>
								</div>
								</a>';
			$this->comments .= '<div class="comment_content_wrap">';
				$this->comments .= '<div class="comment_content_child">';
					$parser->parse(htmlspecialchars($info['comment'], ENT_QUOTES));
					$this->comments .= $this->singleTags($parser->getAsHtml());
				$this->comments .= '</div>';
			$this->comments .= '</div>';
			$this->comments .= '<hr class="medium-dotted" style="text-align:right">';
			$this->comments .= '<p class="n_comment_actions">
									<a href="#" onclick="setNewsCommentParent('.$info['id'].'); return false;" class="default">Reply</a> | <a href="#" class="default">Flag</a>
								</p>';
			$this->comments .= '</div>';
			if(!empty($info['childs'])){
				$this->display_comments($info['childs'], $level + 1);
			}
		}
	}
	
	// The show more button is not set as comments are put in reddit tree like form
	// hence, offset is 100 and not 30
	public function articleComments($article_id,$limit=array('inset'=>0,'offset'=>100)){
		if($stmt = $this->mysqli->prepare("
			SELECT c.id, 
				   c.parent, 
				   c.comment, 
				   u.username,
				   IF(LENGTH(u.avatar) >0, u.avatar, CONCAT('http://vanillicon.com/', MD5(u.email))),
				   ( SELECT COUNT(*)
									FROM news_commentFlags AS cf
									WHERE cf.comment_id = c.id) AS flagCount
			FROM   news_comments AS c
				INNER JOIN users AS u
					ON(u.id = c.user_id)
			WHERE  c.news_id = ? 
				ORDER BY c.date
				LIMIT ?, ?")){
			$stmt->bind_param('iii', $article_id, $limit['inset'], $limit['offset']);
			$stmt->execute();
			$stmt->store_result();
			$stmt->bind_result($id,$parent,$comment,$username,$avatar,$flagCount);
			if($stmt->num_rows > 0){
				$this->comments = '';
				$comments = array();
				while($stmt->fetch()){
					$row = array(
								'id'=>$id,
								'parent'=>$parent,
								'comment'=>$comment,
								'username'=>$username,
								'avatar'=>$avatar,
								'flagCount'=>$flagCount
								);
					$row['childs'] = array();
					$comments[$row['id']] = $row;
				}
				$stmt->close();
				return $comments;
			}else{
				$stmt->close();
				return array();
			}
		}else{
			return array();
		}
	}
	
	public function relevantArticles($title,$id){
		if($stmt = $this->mysqli->prepare("
			SELECT id, title, image,
			( (1.3 * (MATCH(title) AGAINST (? IN BOOLEAN MODE))) + (0.6 * (MATCH(title) AGAINST (? IN BOOLEAN MODE)))) AS relevance 
			FROM news_articles 
			WHERE (MATCH(title) AGAINST (? IN BOOLEAN MODE) )
			AND id <> ?
			ORDER BY relevance DESC
			LIMIT 5")){
			$stmt->bind_param('sssi',$title,$title,$title,$id);
			$stmt->execute();
			$stmt->bind_result($id,$title,$image,$relevance);
			$articles = array();
			while($stmt->fetch()){
				$articles[] = array(
									'id'=>$id,
									'title'=>$title,
									'image'=>$image
								);
			}
			$stmt->close();
			return $articles;
		}else{
			return array();
		}
	}
	
	public function recentArticles(){
		if($stmt = $this->mysqli->prepare("
			SELECT  n.id,
					n.title,
					n.image
					FROM news_articles as n
					ORDER BY n.date DESC
					LIMIT 5")){
			$stmt->execute();
			$stmt->bind_result($id,$title,$image);
			$articles = array();
			while($stmt->fetch()){
				$articles[] = array(
									'id'=>$id,
									'title'=>$title,
									'image'=>$image
								);
			}
			$stmt->close();
			return $articles;
		}else{
			return array();
		}
	}
	
}
?>