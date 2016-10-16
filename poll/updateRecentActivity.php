<?php
	namespace techberry\post;
	
	require("/var/chroot/home/content/99/11499199/html/class.authentication.php");

	use techberry\core\authentication as auth;

	class updateRecentActivity extends auth{
		
		function __construct(){
			parent::__construct('POST');
			
			$referer = $this->validateRedirect($_SERVER['HTTP_REFERER']);
			if($this->loginCheck()){
				// Check if the user is logged in
				if($this->isTokenValid){
					$ua = $this->userActions();
					if($ua->updateRecentActivity()){
						$ul = $this->userLookups();
						if($ul->userNotifications($isPolling=1)){ // only showing seen=0 notifications
							echo "+"; 
						}else{
							echo 1;
						}
					}else{
						echo 0;
					}
				}else{
					// Token is not set or is invalid
					echo 0;
				}
			}else{
				// User already logged in
				echo 0;
			}
		}
	}
	$uA = new updateRecentActivity();
?>