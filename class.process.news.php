<?php

namespace techberry\news;

class process{
	private $mysqli;
	
	function __construct($mysqli){
		$this->mysqli = $mysqli;
	}
	
	public function articleExists($article_id){
		if($stmt = $this->mysqli->prepare("
			SELECT EXISTS
			( 
				SELECT 1 FROM news_articles WHERE id = ?
			)")){
			$stmt->bind_param('i',$article_id);
			$stmt->execute();
			$stmt->bind_result($exists);
			$stmt->fetch();
			if($exists==1){
				$stmt->close();
				return true;
			}else{
				$stmt->close();
				return false;
			}
		}else{
			return false;
		}
	}
	
	public function parentCommentExists($article_id,$parent_id){
		if($stmt = $this->mysqli->prepare("
			SELECT EXISTS
			( 
				SELECT 1 FROM news_comments WHERE id = ? AND news_id = ?
			)")){
			$stmt->bind_param('ii',$parent_id,$article_id);
			$stmt->execute();
			$stmt->bind_result($exists);
			$stmt->fetch();
			if($exists==1){
				$stmt->close();
				return true;
			}else{
				$stmt->close();
				return false;
			}
		}else{
			return false;
		}
	}
	
	public function newsComment($comment,$article_id,$parent_id){
		if($stmt = $this->mysqli->prepare("
			INSERT INTO news_comments (news_id,parent,user_id,comment)
				VALUES(?,?,?,?)")){
			$stmt->bind_param('iiis',$article_id,$parent_id,$_SESSION['user_id'],$comment);
			$stmt->execute();
			$stmt->close();
			return $this->mysqli->insert_id;
		}else{
			return false;
		}
	}
	
	public function likeNewsArticle($article_id)
	{
		if($stmt = $this->mysqli->prepare("
			INSERT INTO news_votes (news_id,user_id) VALUES(?,?)")){
			$stmt->bind_param('ii',$article_id,$_SESSION['user_id']);
			$stmt->execute();
			$stmt->close();
			return true;
		}else{
			return false;
		}		
	}
	
	public function hasLiked($article_id){
		if($stmt = $this->mysqli->prepare("SELECT 1 FROM news_votes WHERE news_id = ? AND user_id = ?")){
			$stmt->bind_param('ii', $article_id, $_SESSION['user_id']);
			$stmt->execute();
			$stmt->store_result();
			$stmt->fetch();
			if($stmt->num_rows > 0){
				$stmt->close();
				return true;			
			}else{
				// The user has not already liked the news article
				$stmt->close();
				return false;
			}
		}
	}
	
}