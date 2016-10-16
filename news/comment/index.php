<?php
	namespace techberry\news\comment;
	
	require("/home/content/99/11499199/html/class.authentication.php");

	use techberry\core\authentication as auth;

	class comment extends auth{
		private $n;  // Object for forum querying methods
		private $article_id;
		private $parent_id;
		private $comment;
		
		function __construct(){
			parent::__construct('POST');
			$this->n = $this->news();
			$this->article_id = isset($_GET['article_id']) ? $_GET['article_id'] : null;
			$this->parent_id = isset($_POST['parent_id']) ? $_POST['parent_id'] : null;
			$this->comment = isset($_POST['comment']) ? $_POST['comment'] : null;
			if($this->isTokenValid === true){
				if($this->n->articleExists($this->article_id)){
					if(parent::loginCheck() === true){
						if($this->checkActionTimer()){
							$_SESSION['actionTimer']=array('action'=>'News comment','time'=>time(),'wait'=>20);
							// Verify parent comments id
							if(!$this->n->parentCommentExists($this->article_id,$this->parent_id )){
								$this->parent_id = 0;
							}
							if(strlen($this->comment) >= 20){
								if(strlen($this->comment) <= 400){
									if( ($id = $this->n->newsComment($this->comment,$this->article_id,$this->parent_id) )){
										// Success
										$this->notify->source()->type('success')->msg("Successfully added your comment")->process();
										header('Location: http://techberry.org/news/n='.$this->article_id.'/#'.$id);
									}else{
										// Error executing query
										$this->notify->source()->type('error')->msg("Unable to add comment, please try again later")->process();
										header('Location: http://techberry.org/news/n='.$this->article_id.'/');
									}
								}else{
									// Comment too long
									$this->notify->source()->type('error')->msg("Comment is too long")->process();
									header('Location: http://techberry.org/news/n='.$this->article_id.'/');
								}
							}else{
								// Comment too short
								$this->notify->source()->type('error')->msg("Comment is too short")->process();
								header('Location: http://techberry.org/news/n='.$this->article_id.'/');
							}
						}else{
							// The user must wait before
							// performing another action
							$this->notify->timer($this->actionTimeCountDown);
							header('Location: http://techberry.org/news/n='.$this->article_id.'/');
						}
					}else{
						// Not logged in
						$this->notify->source()->type('error')->msg("Must be logged in")->process();
						header('Location: http://techberry.org/news/n='.$this->article_id.'/');
					}
				}else{
					// Invalid article id
					$this->notify->source()->type('error')->msg("Unable to find article")->process();
					header('Location: http://techberry.org/news/');
				}
			}else{
				// Unable to validate token
				$this->notify->source()->type('error')->msg("Unable to validate your request")->process();
				header('Location: http://techberry.org/news/');
			}
		}
	}
	$c = new comment();
?>