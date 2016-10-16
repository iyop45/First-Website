<?php
	namespace techberry\forum;
	
	require("/home/content/99/11499199/html/class.authentication.php");

	use techberry\core\authentication as auth;

	class flag extends auth{
		private $f; // Object for forum querying methods
		function __construct(){
			parent::__construct('GET');
			$settings = \techberry\core\constants::$forumSettings;
			$this->f = $this->forum();
			$this->p = $this->permissions();
			$this->ua = $this->userActions();
			if($this->isTokenValid){
				if(isset($_GET['reply_id']) &&!isset($_GET['category_id'],$_GET['topic_id'],$_GET['post_id'])){
					// Flagging a reply
					if($this->f->exists('reply',$_GET['reply_id'])){
						if($this->p->hasPermission('forum_flagReply')){
							if(!$this->f->hasFlagged('reply',$_GET['category_id'])){
								if(!$this->f->isLocked('reply',$_GET['reply_id'])){
									if($this->f->flag('reply',$_GET['reply_id'])){
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
											if($numberOfFlags >= \techberry\core\constants::$forum['ReplyFlagCountForRemoval'] || $_SESSION['group_id'] >= 6){
												$this->f->remove('reply',$_GET['reply_id']);
												$this->ua->addNotification($user_id,'forum_replyRemoved',$post_id);
												$this->ua->updateReputation($settings['ReputationLossReplyRemoval'],$user_id);
												$this->notify->source()->type('success')->msg('Reply has been removed')->process();
											}else{
												$this->ua->addNotification($user_id,'forum_replyFlagged',$post_id);
												$this->ua->updateReputation($settings['ReputationLossReplyFlag'],$user_id);
												$this->notify->source()->type('success')->msg('Reply has been flagged')->process();
											}
										}
									}else{
										$this->notify->source()->type('error')->msg("Unable to process your request")->process();
									}
								}else{
									$this->notify->source()->type('error')->msg("This reply is locked")->process();
								}
							}else{
								$this->notify->source()->type('error')->msg("You have already flagged this reply")->process();
							}
						}else{
							$this->notify->source()->type('error')->msg("Insufficient privileges")->process();
						}
					}else{
						$this->notify->source()->type('error')->msg("Reply no longer exists")->process();
					}
					// Process redirect
					if(($post_id=$this->f->replyParent_id($_GET['reply_id']))){
						header('Location: http://techberry.org/forum/p='.$post_id.'/');
					}else{
						// By default return to forum root
						header('Location: http://techberry.org/forum/');
					}
				}elseif(isset($_GET['post_id']) && !isset($_GET['category_id'],$_GET['topic_id'],$_GET['reply_id'])){
					// Flagging a post
					if($this->f->exists('post',$_GET['post_id'])){
						if($this->p->hasPermission('forum_flagPost')){
							if(!$this->f->hasFlagged('post',$_GET['post_id'])){
								if(!$this->f->isLocked('post',$_GET['post_id'])){
									if($this->f->flag('post',$_GET['post_id'])){
										// Successfully flagged
										if($stmt = $this->mysqli->prepare("SELECT user_id,
																		  topic_id,
																		  (
																			SELECT COUNT(*) 
																			FROM forum_postFlags
																			WHERE post_id = ?
																		  )
																		FROM forum_posts 
																		WHERE id = ?")){
											$stmt->bind_param('ii',$_GET['post_id'],$_GET['post_id']);
											$stmt->execute();
											$stmt->bind_result($user_id,$topic_id,$numberOfFlags);
											$stmt->close();
											if($numberOfFlags >= $settings['PostFlagCountForRemoval'] || $_SESSION['group_id'] >= 6){
												$this->f->remove('post',$_GET['post_id']);
												$this->ua->addNotification($user_id,'forum_postRemoved',$topic_id);
												$this->ua->updateReputation($settings['ReputationLossPostRemoval'],$user_id);
												$this->notify->source()->type('success')->msg('Post has been removed')->process();
											}else{
												$this->ua->addNotification($user_id,'forum_postFlagged',$topic_id);
												$this->ua->updateReputation($settings['ReputationLossPostFlag'],$user_id);
												$this->notify->source()->type('success')->msg('Post has been flagged')->process();
											}
										}
									}else{
										$this->notify->source()->type('error')->msg("Unable to process your request")->process();
									}
								}else{
									$this->notify->source()->type('error')->msg("This reply is locked")->process();
								}
							}else{
								$this->notify->source()->type('error')->msg("You have already flagged this post")->process();
							}
						}else{
							$this->notify->source()->type('error')->msg("Insufficient privileges")->process();
						}
					}else{
						$this->notify->source()->type('error')->msg("Post no longer exists")->process();
					}
					// Process redirect
					if(($topic_id=$this->f->postParent_id($_GET['post_id']))){
						header('Location: http://techberry.org/forum/t='.$topic_id.'/');
					}else{
						// By default return to forum root
						header('Location: http://techberry.org/forum/');
					}
				}elseif(isset($_GET['topic_id']) && !isset($_GET['category_id'],$_GET['post_id'],$_GET['reply_id'])){
					// Flagging a topic
					if($this->f->exists('topic',$_GET['topic_id'])){
						if($this->p->hasPermission('forum_flagTopic')){
							if(!$this->f->hasFlagged('topic',$_GET['topic_id'])){
								if(!$this->f->isLocked('topic',$_GET['topic_id'])){
									if($this->f->flag('topic',$_GET['topic_id'])){
										// Successfully flagged
										if($stmt = $this->mysqli->prepare("SELECT user_id,
																		  category_id,
																		  (
																			SELECT COUNT(*) 
																			FROM forum_topicFlags
																			WHERE topic_id = ?
																		  )
																		FROM forum_topics 
																		WHERE id = ?")){
											$stmt->bind_param('ii',$_GET['topic_id'],$_GET['topic_id']);
											$stmt->execute();
											$stmt->bind_result($user_id,$category_id,$numberOfFlags);
											$stmt->close();
											if($numberOfFlags >= $settings['TopicFlagCountForRemoval'] || $_SESSION['group_id'] >= 6){
												$this->f->remove('topic',$_GET['topic_id']);
												$this->ua->addNotification($user_id,'forum_topicRemoved',$category_id);
												$this->ua->updateReputation($settings['ReputationLossTopicRemoval'],$user_id);
												$this->notify->source()->type('success')->msg('Topic has been removed')->process();
											}else{
												$this->ua->addNotification($user_id,'forum_topicFlagged',$category_id);
												$this->ua->updateReputation($settings['ReputationLossTopicFlag'],$user_id);
												$this->notify->source()->type('success')->msg('Topic has been flagged')->process();
											}
										}
									}else{
										$this->notify->source()->type('error')->msg("Unable to process your request")->process();
									}
								}else{
									$this->notify->source()->type('error')->msg("This topic is locked")->process();
								}
							}else{
								$this->notify->source()->type('error')->msg("You have already flagged this topic")->process();
							}
						}else{
							$this->notify->source()->type('error')->msg("Insufficient privileges")->process();
						}
					}else{
						$this->notify->source()->type('error')->msg("Topic no longer exists")->process();
					}
					// Process redirects
					if(($category_id=$this->f->topicParent_id($_GET['topic_id']))){
						header('Location: http://techberry.org/forum/c='.$category_id.'/');
					}else{
						// By default return to forum root
						header('Location: http://techberry.org/forum/');
					}
				}elseif(isset($_GET['category_id']) && !isset($_GET['topic_id'],$_GET['post_id'],$_GET['reply_id'])){
					// Flagging a category
					if($this->f->exists('category',$_GET['category_id'])){
						if($this->p->hasPermission('forum_flagTopic')){
							if(!$this->f->hasFlagged('category',$_GET['category_id'])){
								if(!$this->f->isLocked('category',$_GET['category_id'])){
									if($this->f->flag('category',$_GET['category_id'])){
										// Successfully flagged
										if($stmt = $this->mysqli->prepare("SELECT user_id,
																		  (
																			SELECT COUNT(*) 
																			FROM forum_categoryFlags
																			WHERE category_id = ?
																		  )
																		FROM forum_categories 
																		WHERE id = ?")){
											$stmt->bind_param('ii',$_GET['category_id'],$_GET['category_id']);
											$stmt->execute();
											$stmt->bind_result($user_id,$numberOfFlags);
											$stmt->close();
											if($numberOfFlags >= $settings['CategoryFlagCountForRemoval'] || $_SESSION['group_id'] >= 6){
												$this->f->remove('category',$_GET['category_id']);
												$this->ua->addNotification($user_id,'forum_categoryRemoved',0);
												$this->ua->updateReputation($settings['ReputationLossCategoryRemoval'],$user_id);
												$this->notify->source()->type('success')->msg('Category has been removed')->process();
											}else{
												$this->ua->addNotification($user_id,'forum_categoryFlagged',0);
												$this->ua->updateReputation($settings['ReputationLossCategoryFlag'],$user_id);
												$this->notify->source()->type('success')->msg('Category has been flagged')->process();
											}
										}
									}else{
										$this->notify->source()->type('error')->msg("Unable to process your request")->process();
									}
								}else{
									$this->notify->source()->type('error')->msg("This category is locked")->process();
								}
							}else{
								$this->notify->source()->type('error')->msg("You have already flagged this category")->process();
							}
						}else{
							$this->notify->source()->type('error')->msg("Insufficient privileges")->process();
						}
					}else{
						$this->notify->source()->type('error')->msg("Category no longer exists")->process();
					}
					header('Location: http://techberry.org/forum/');
				}
			}
		}
	}
	$f = new flag();
?>