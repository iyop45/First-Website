<?php

namespace techberry;

class code{
	private $mysqli;
	
	function __construct($mysqli){
		$this->mysqli = $mysqli;
	}
	
	public function getScribble($id){
		if($stmt = $this->mysqli->prepare("SELECT content FROM user_code WHERE id = ? LIMIT 1")){
			$stmt->bind_param('i', $id);
			$stmt->execute();
			$stmt->bind_result($content);			
			$stmt->fetch();
			$stmt->close();
			return $content;
		}
		else
		{
			\PC::debug('Message with source & trace detection');
		}
	}
	
	public function getUserScribbles($user_id){
		if($stmt = $this->mysqli->prepare("SELECT id, left(content,200), name, date FROM user_code WHERE user_id = ? ORDER BY date DESC LIMIT 100")){
			$stmt->bind_param('i',$user_id);
			$stmt->execute();
			$stmt->store_result();
			$stmt->bind_result($id,$content,$name,$date);
			if($stmt->num_rows == 0){
				$stmt->close();
				return false;
			}else{
				$scribbles = array();
				while($stmt->fetch()){
					$scribbles[] = array(
									'id' => $id,
									'content' => $content,
									'name' => $name,
									'date' => $date
									);
				}
				$stmt->close();
				return $scribbles;
			}
		}
	}
}