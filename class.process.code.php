<?php

namespace techberry\code;

class process{
	private $mysqli;
	
	function __construct($mysqli){
		$this->mysqli = $mysqli;
	}
	
	public function saveScribble($content,$user_id){
		if($stmt = $this->mysqli->prepare("INSERT INTO user_code (user_id,content) VALUES(?,?)")){
			$stmt->bind_param('is', $user_id, $content);
			$stmt->execute();
			$stmt->close();
			return $this->mysqli->insert_id;
		}
	}
}