<?php
	namespace techberry\post;
	
	require("../class.authentication.php");

	use techberry\core\authentication as auth;

	class like extends auth{
		private $newsID;
		
		function __construct(){
			parent::__construct('POST');
			$this->newsID = isset($_POST['newsID']) ? $_POST['newsID'] : null;
			$redirect = $this->validateRedirect(base64_decode($this->referer));
			
			if($this->loginCheck()){
				// If the user is not already logged in
				if($this->isTokenValid){
					if($this->checkActionTimer()){
						$n = $this->news();
						if($n->articleExists($_POST['newsID'])){
							if(!$n->hasLiked($_POST['newsID'])){
								$_SESSION['actionTimer']=array('action'=>'Liked a news article','time'=>time(),'wait'=>5);
								if($n->likeNewsArticle($_POST['newsID'])){
									$this->notify->source()->type('success')->msg("Liked news article")->process();
									header('Location: http://techberry.org/news/n='.$_POST['newsID'].'/');
								}else{
									$this->notify->source()->type('error')->msg("Unable to like news article")->process();
									header('Location: http://techberry.org/news/n='.$_POST['newsID'].'/');
								}
							}else{
								$this->notify->source()->type('error')->msg("Already liked this article")->process();
								header('Location: http://techberry.org/news/n='.$_POST['newsID'].'/');								
							}
						}else{
							$this->notify->source()->type('error')->msg("Article does not exist")->process();
							header('Location: '.$redirect);						
						}
					}else{
						// The user must wait before
						// performing another action
						$this->notify->source()->type('error')->msg("You must wait")->process();
						header('Location: '.$redirect);
					}
				}else{
					// Token is not set or is invalid
					$this->notify->source()->type('error')->msg("Invalid request")->process();
					header('Location: '.$redirect);
				}
			}else{
				// User already logged in
				$this->notify->source()->type('error')->msg("You're not logged in")->process();
				header('Location: '.$redirect);
			}
		}
	}
	$l = new like();
?>