<?php
	namespace techberry\user\notifications;
	
	require("/home/content/99/11499199/html/class.authentication.php");

	use techberry\core\authentication as auth;

	class removeNotification extends auth{
		function __construct(){
			parent::__construct('GET');
			if($this->isTokenValid){
				if($this->loginCheck()){
					$ua = $this->userActions($this->mysqli);
					if(($removeNotification = $ua->removeNotification($_GET['id']))){
						header('Location: http://techberry.org/frames/user.notifications.php?token='.$_GET['token'].'&callback='.$removeNotification);
						die();
					}
				}
			}
			header('Location: http://techberry.org/frames/user.notifications.php?token='.$_GET['token']);
			die();
		}
	}
	$rn = new removeNotification();
?>