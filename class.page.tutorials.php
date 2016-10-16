<?php
class tutorials{
	private $mysqli;

	function __construct($mysqli){
		$this->mysqli = $mysqli;
	}
	
	public function groups(){
		if($stmt=$this->mysqli->prepare("
			SELECT * FROM
			(SELECT g.id,
				   g.title,
				   g.description,
				   g.icon,
				   g.color,
				   g.views,
				   g.pages,
				   g.pending AS pending,
				   g.date
			FROM tuts_groups as g
			ORDER BY views DESC) as p
			ORDER BY p.pending ASC")){
			$stmt->execute();
			$stmt->store_result();
			$stmt->bind_result($id,
							   $title,
							   $description,
							   $icon,
							   $color,
							   $views,
							   $pages,
							   $pending,
							   $date);
			$groups = array();
			while($stmt->fetch()){
				$groups[] = array(
								  'id'=>$id,
								  'title'=>$title,
								  'description'=>$description,
								  'icon'=>$icon,
								  'color'=>$color,
								  'views'=>$views,
								  'pages'=>$pages,
								  'pending'=>$pending,
								  'date'=>$date,
								  );
			}
			$stmt->close();
			return $groups;
		}else{
			return false;
		}
	}
	public function isGroupPending($groupId){
		if($stmt=$this->mysqli->prepare("
			SELECT pending FROM 
				tuts_groups 
				WHERE id = ?")){
			$stmt->bind_param('i',$groupId);
			$stmt->execute();
			$stmt->store_result();
			$stmt->bind_result($isPending);
			$stmt->fetch();
			if($isPending==1 || $stmt->num_rows==0){
				$stmt->close();
				return true;
			}else{
				$stmt->close();
				return false;
			}
		}else{
			$stmt->close();
			return true;
		}
	}
	public function groupInfo($groupId){
		if($stmt=$this->mysqli->prepare("
			SELECT id, title
				FROM tuts_groups
				WHERE id = ?")){
			$stmt->bind_param('i',$groupId);
			$stmt->execute();
			$stmt->store_result();
			$stmt->bind_result($id,$title);
			$stmt->fetch();
			if($stmt->num_rows==0){
				$stmt->close();
				return false;
			}else{
				$stmt->close();
				return array(
							'id'=>$id,
							'title'=>$title
							);
			}
		}else{
			return false;
		}
	}
	public function isTutorialPending($tutorialId){
		if($stmt=$this->mysqli->prepare("
			SELECT pending FROM 
				tuts_pages 
				WHERE id = ?")){
			$stmt->bind_param('i',$tutorialId);
			$stmt->execute();
			$stmt->store_result();
			$stmt->bind_result($isPending);
			$stmt->fetch();
			if($isPending==1 || $stmt->num_rows==0){
				$stmt->close();
				return true;
			}else{
				$stmt->close();
				return false;
			}
		}else{
			$stmt->close();
			return true;
		}
	}
	public function tutorialInfo($tutorialId){
		if($stmt=$this->mysqli->prepare("
			SELECT p.id, p.title, g.id as group_id, g.title
				FROM tuts_pages as p
				INNER JOIN tuts_groups as g
				ON(g.id = p.group_id)
				WHERE p.id = ?")){
			$stmt->bind_param('i',$tutorialId);
			$stmt->execute();
			$stmt->store_result();
			$stmt->bind_result($id,$title,$group_id,$groupTitle);
			$stmt->fetch();
			if($stmt->num_rows==0){
				$stmt->close();
				return false;
			}else{
				$stmt->close();
				return array(
							'id'=>$id,
							'title'=>$title,
							'group_id'=>$group_id,
							'groupTitle'=>$groupTitle
							);
			}
		}else{
			return false;
		}
	}
	public function chapters($group_id){
		if($stmt=$this->mysqli->prepare("
			SELECT *
			FROM
			  (SELECT
					  c.id AS chapterPrimaryKey,
					  c.title,
					  c.description,
					  c.views,
					  c.chapter_id,
					  c.pending as pending,
					  c.date,
					  g.id,
					  g.title as groupTitle,
					  g.icon,
					  g.color,
					  g.pending as groupPending
			   FROM tuts_pages AS c
			   INNER JOIN tuts_groups AS g ON(g.id = c.group_id)
			   WHERE g.id = ?
			   ORDER BY c.chapter_id DESC) AS p
			   ORDER BY p.pending ASC")){
			$stmt->bind_param('s',$group_id);
			$stmt->execute();
			$stmt->store_result();
			$stmt->bind_result(
							   $id,
							   $title,
							   $description,
							   $views,
							   $chapter_id,
							   $pending,
							   $date,
							   $group_id,
							   $groupTitle,
							   $groupIcon,
							   $groupColor,
							   $groupPending);
			$chapters = array();
			while($stmt->fetch()){
				$chapters[] = array(
							  'id'=>$id,
							  'title'=>$title,
							  'description'=>$description,
							  'views'=>$views,
							  'chapter_id'=>$chapter_id,
							  'pending'=>$pending,
							  'date'=>$date,
							  'group_id'=>$group_id,
							  'groupTitle'=>$groupTitle,
							  'groupIcon'=>$groupIcon,
							  'groupColor'=>$groupColor,
							  'groupPending'=>$groupPending,
							  );
			}
			$stmt->close();
			return $chapters;
		}else{
			return false;
		}
	}
	
	public function tutorial($tutorial_id){
		if($stmt=$this->mysqli->prepare("
			SELECT p.id,
				   p.title,
				   p.content,
				   b.id as previous_id,
				   b.title as previous_title,
				   n.id as next_id,
				   n.title as next_title,
				   g.id as group_id,
				   g.title as groupTitle
			FROM tuts_pages AS p
			INNER JOIN tuts_groups AS g ON(g.id = p.group_id)
			LEFT JOIN tuts_pages b ON(p.chapter_id = (b.chapter_id+1) AND (p.group_id = b.group_id))
			LEFT JOIN tuts_pages n ON(p.chapter_id = (n.chapter_id-1) AND (p.group_id = n.group_id))
			WHERE p.id = ?
			LIMIT 1")){
			$stmt->bind_param('i',$tutorial_id);
			$stmt->execute();
			$stmt->store_result();
			if($stmt->num_rows === 1){
				$stmt->bind_result($id,
								   $title,
								   $content,
								   
								   $previous_id,
								   $previousTitle,
								   
								   $next_id,
								   $nextTitle,
								   
								   $group_id,
								   $groupTitle);
				$stmt->fetch();
				$stmt->close();
				return array(
								'id'=>$id,
								'title'=>$title,
								'content'=>$content,
								
								'previous_id'=>$previous_id,
								'previousTitle'=>$previousTitle,
								
								'next_id'=>$next_id,
								'nextTitle'=>$nextTitle,
								
								'group_id'=>$group_id,
								'groupTitle'=>$groupTitle
							);
			}else{
				return false;
			}
		}else{
			return false;
		}
	}

	public function groupCommits($group_id){
		if($stmt=$this->mysqli->prepare("SELECT 1 FROM tuts_groupCommits WHERE group_id = ?")){
			$stmt->bind_param('i',$group_id);
			$stmt->execute();
			$stmt->store_result();
			$commits = $stmt->num_rows;
			$stmt->close();
			return $commits;
		}else{
			return 0;
		}
	}

	public function chapterCommits($chapter_id){
		if($stmt=$this->mysqli->prepare("SELECT 1 FROM tuts_pageCommits WHERE chapter_id = ?")){
			$stmt->bind_param('i',$chapter_id);
			$stmt->execute();
			$stmt->store_result();
			$commits = $stmt->num_rows;
			$stmt->close();
			return $commits;
		}else{
			return 0;
		}
	}
	
}
?>