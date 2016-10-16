<?php
	namespace techberry\get;
	
	require("../class.authentication.php");

	use techberry\core\authentication as auth;

	class getNewsComment extends auth{
		private $id;
		
		function __construct(){
			parent::__construct();
			$this->id = isset($_GET['id']) ? $_GET['id'] : null;
			if($stmt = $this->mysqli->prepare("SELECT LEFT(comment,50) FROM news_comments WHERE id = ? LIMIT 1")){
				$stmt->bind_param('i',$this->id);
				$stmt->execute();
				$stmt->bind_result($content);
				$stmt->fetch();
				echo $content;
				$stmt->close();
			}
		}
	}
	$gNC = new getNewsComment();
?>