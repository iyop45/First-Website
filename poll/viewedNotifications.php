<?php
	namespace techberry;

	require("/home/content/99/11499199/html/class.authentication.php");

	use techberry\core\authentication as auth;

	class viewedNotifications extends auth{
		function __construct(){
			parent::__construct('POST');
			
			if($this->loginCheck()){
				if($this->isTokenValid){
					if($stmt = $this->mysqli->prepare("UPDATE user_notifications SET seen=1 WHERE user_id=?")){
						$stmt->bind_param('i',$_SESSION['user_id']);
						$stmt->execute();
						$stmt->close();
						echo 1;
					}else{
						echo 2;
					}
				}else{
					echo 3;
				}
			}else{
				echo 4;
			}
		}
	}
	$vn = new viewedNotifications();
?>