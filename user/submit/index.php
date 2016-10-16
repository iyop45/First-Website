<?php
	namespace techberry\post\wallPost;
	
	require("class.authentication.php");

	use techberry\core\authentication\authentication as auth;

	class wallPost extends auth{
		private $post;
		private $username;
		
		function __construct(){
			parent::__construct('POST');
			$this->post = isset($_POST['post']) ? $_POST['post'] : null;
			$this->username = isset($_POST['username']) ? $_POST['username'] : null;
			
			if($this->loginCheck()){
				// If the user is not already logged in
				if($this->isTokenValid){
					if($this->checkActionTimer()){
						$_SESSION['actionTimer']=array('action'=>'Submit wall post','time'=>time(),'wait'=>20);
						if($this->userExists($this->username)){
							// Update wall post
						}else{
							// User does not exist
							$this->notifyClass()->source()->type('error')->msg("User does not exist")->process();
							header('Location: '.$redirect);
						}
					}else{
						// The user must wait before
						// performing another action
						$this->notifyClass()->source()->type('error')->msg("You must wait ". $this->actionTimeCountDown ." seconds")->process();
						header('Location: '.$redirect);
					}
				}else{
					// Token is not set or is invalid
					$this->notifyClass()->source()->type('error')->msg("Unable to validate request")->process();
					header('Location: '.$redirect);
				}
			}else{
				// User is not logged in
				$this->notifyClass()->source()->type('error')->msg("Already logged in")->process();
				header('Location: '.$redirect);
			}
		}
	}
	$wp = new wallPost();
?>