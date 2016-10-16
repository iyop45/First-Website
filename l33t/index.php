<?php
	namespace techberry\easterEgg;
	
	require("/home/content/99/11499199/html/class.authentication.php");

	use techberry\core\authentication as auth;

	class bypass extends auth{
		function __construct(){
			parent::__construct('GET');
			
			if($this->loginCheck()){
				// If the user is not already logged in
				if($this->isTokenValid){
					$ua = $this->userActions();
					if($ua->requestBadge('l33t h4x0r',$_SESSION['user_id'])){
						$this->notify->source()->type('success')->msg("Earnt a new badge")->process();
					}
					header('Location: http://techberry.org/');
				}else{
					// Token is not set or is invalid
					$this->notify->source()->type('error')->msg("Unable to validate request")->process();
					header('Location: http://techberry.org/');
				}
			}else{
				// User not logged in
				$this->notify->source()->type('log')->msg("Hint - log in next time")->process();
				header('Location: http://techberry.org/');
			}
		}
	}
	$b = new bypass();
?>