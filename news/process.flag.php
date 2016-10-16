<?php
	namespace techberry\news;
	
	require("/home/content/99/11499199/html/class.authentication.php");

	use techberry\core\authentication as auth;

	class flag extends auth{
		private $n; // Object for news querying methods
		function __construct(){
			parent::__construct('GET');
			$settings = \techberry\core\constants::$newsSettings;
			$this->n = $this->news();
			$this->p = $this->permissions();
			$this->ua = $this->userActions();
			if($this->isTokenValid){
				if(isset($_GET['comment_id']))){
					// Flagging a reply
					if($this->f->exists('comment',$_GET['comment_id'])){
						if($this->p->hasPermission('news_flagComment')){
							if(!$this->n->hasFlagged($_GET['comment_id'])){
								if($this->n->flag($_GET['comment_id'])){
									// Successfully flagged
									if($stmt = $this->mysqli->prepare("SELECT user_id,
																	  post_id,
																	  (
																		SELECT COUNT(*) 
																		FROM forum_replyFlags
																		WHERE reply_id = ?
																	  )
																	FROM forum_replies 
																	WHERE id = ?")){
										$stmt->bind_param('ii',$_GET['reply_id'],$_GET['reply_id']);
										$stmt->execute();
										$stmt->bind_result($user_id,$post_id,$numberOfFlags);
										$stmt->close();
										if($numberOfFlags >= \techberry\core\constants::$forum['ReplyFlagCountForRemoval']){
											$this->n->removeReply($_GET['reply_id']);
											$this->ua->addNotification($user_id,'forum_replyRemoved',$post_id);
											$this->ua->updateReputation($settings['ReputationLossReplyRemoval'],$user_id);
										}else{
											$this->ua->addNotification($user_id,'forum_replyFlagged',$post_id);
											$this->ua->updateReputation($settings['ReputationLossReplyFlag'],$user_id);
										}
									}
									$this->notify->source()->type('success')->msg('Reply has been flagged')->process();
									
								}else{
									$this->notify->source()->type('error')->msg("Unable to process your request")->process();
								}
							}else{
								$this->notify->source()->type('error')->msg("You have already flagged this reply")->process();
							}
						}else{
							$this->notify->source()->type('error')->msg("Insufficient privileges")->process();
						}
					}else{
						$this->notify->source()->type('error')->msg("Comment no longer exists")->process();
					}
					// Process redirect
					if(($article_id=$this->n->article_id_fromComment($_GET['comment_id']))){
						header('Location: http://techberry.org/n='.$article_id.'/');
					}else{
						// By default return to forum root
						header('Location: http://techberry.org/forum/');
					}
				}else{
				
				}
			}
		}
	}
	$f = new flag();
?>