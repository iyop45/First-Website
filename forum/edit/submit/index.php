<?php
	namespace techberry\forum\edit;
	
	require("/home/content/99/11499199/html/class.authentication.php");
	require("/home/content/99/11499199/html/class.contentQuerying.php");

	use techberry\core\authentication as auth;

	class edit extends auth{
		private $title;
		private $content;
		private function check_string_length($data,$min,$max,$type){
			if(strlen($data) > $max){
				$this->notify->source()->type('error')->msg($type." is too long")->process();
				return false; // Too long
			}elseif(strlen($data) < $min){
				$this->notify->source()->type('error')->msg($type." is too short")->process();
				return false; // Too short
			}else{
				return true; // Valid length
			}
		}
		function __construct(){
			parent::__construct('POST');
			$settings = \techberry\core\constants::$forumSettings;
			$this->reason = isset($_POST['reason']) ? $_POST['reason'] : null;
			$this->title = isset($_POST['title']) ? $_POST['title'] : null;
			$this->content = isset($_POST['content']) ? $_POST['content'] : null;
			$this->cq = new \techberry\core\contentQuerying($this->mysqli);
			$this->cq->forum();
			$this->p = $this->permissions();
			$this->f = $this->forum();
			if($this->isTokenValid === true){
				if(parent::loginCheck() === true){
					if(isset($_GET['reply_id']) && !isset($_GET['category_id'],$_GET['topic_id'],$_GET['post_id'])){
						// Editing a reply
						if($this->cq->forumClass->exists('reply',$_GET['reply_id'])){
							if(
								$this->check_string_length($this->content,$settings['ReplyContentMinLength'],$settings['ReplyContentMaxLength'],'Content')
												&&
								$this->check_string_length($this->reason,$settings['EditReasonMinLength'],$settings['EditReasonMaxLength'],'Reason')
								){
								if($this->p->hasPermission('forum_editReply')){
									// Has permission to skip the queue
									$this->f->addReplyEdit($_GET['reply_id'],$this->content);
									$post_id = $this->f->replyParent_id($_GET['reply_id']);
									header('Location: http://techberry.org/forum/p='.$post_id.'/');
								}else{
									if(($q=$this->f->numberOfEdits('reply',$_GET['reply_id']) < $settings['ReplyEditQueueSize'])){
										$this->notify->source()->type('success')->msg("Your edit suggestion is now pending approval")->process();
										$this->f->addReplyEditSuggestion($_GET['reply_id'],$this->content,$this->reason);
										$post_id = $this->f->replyParent_id($_GET['reply_id']);
										header('Location: http://techberry.org/forum/p='.$post_id.'/');
									}else{
										$this->notify->source()->type('error')->msg("The edit queue is currently full")->process();
										header('Location: http://techberry.org/forum/');
									}
								}
							}else{
								header('Location: http://techberry.org/forum/edit/r='.$_GET['reply_id'].'/');
							}
						}else{
							$this->notify->source()->type('error')->msg("Reply no longer exists")->process();
							header('Location: http://techberry.org/forum/');
						}
					}elseif(isset($_GET['post_id']) && !isset($_GET['category_id'],$_GET['topic_id'],$_GET['reply_id'])){
						// Editing a post
						if($this->cq->forumClass->exists('post',$_GET['post_id'])){
							if(
								$this->check_string_length($this->title,$settings['PostTitleMinLength'],$settings['PostTitleMaxLength'],'Title')
												&&
								$this->check_string_length($this->content,$settings['PostContentMinLength'],$settings['PostContentMaxLength'],'Content')
												&&
								$this->check_string_length($this->reason,$settings['EditReasonMinLength'],$settings['EditReasonMaxLength'],'Reason')
								){
								if($this->p->hasPermission('forum_editPost')){
									// Has permission to skip the queue
									$this->f->addPostEdit($_GET['post_id'],$this->title,$this->content);
									header('Location: http://techberry.org/forum/p='.$_GET['post_id'].'/');
								}else{
									if(($q=$this->f->numberOfEdits('post',$_GET['post_id']) < $settings['PostEditQueueSize'])){
										$this->notify->source()->type('success')->msg("Your edit suggestion is now pending approval")->process();
										$this->f->addPostEditSuggestion($_GET['post_id'],$this->title,$this->content,$this->reason);
										header('Location: http://techberry.org/forum/p='.$_GET['post_id'].'/');
									}else{
										$this->notify->source()->type('error')->msg("The edit queue is currently full")->process();
										header('Location: http://techberry.org/forum/');
									}
								}
							}else{
								$post_id = intval($_GET['topic_id']);
								header('Location: http://techberry.org/forum/edit/p='.$post_id.'/');
							}
						}else{
							$this->notify->source()->type('error')->msg("Post no longer exists")->process();
							header('Location: http://techberry.org/forum/');
						}
					}elseif(isset($_GET['topic_id']) && !isset($_GET['category_id'],$_GET['post_id'],$_GET['reply_id'])){
						// Editing a topic
						if($this->cq->forumClass->exists('topic',$_GET['topic_id'])){
							if(
								$this->check_string_length($this->title,$settings['TopicTitleMinLength'],$settings['TopicTitleMaxLength'],'Title')
												&&
								$this->check_string_length($this->content,$settings['TopicContentMinLength'],$settings['TopicContentMaxLength'],'Content')
												&&
								$this->check_string_length($this->reason,$settings['EditReasonMinLength'],$settings['EditReasonMaxLength'],'Reason')
								){
								if($this->p->hasPermission('forum_editTopic')){
									// Has permission to skip the queue
									$this->f->addTopicEdit($_GET['topic_id'],$this->title,$this->content);
									header('Location: http://techberry.org/forum/t='.$_GET['topic_id'].'/');
								}else{
									if(($q=$this->f->numberOfEdits('topic',$_GET['topic_id']) < $settings['TopicEditQueueSize'])){
										$this->notify->source()->type('success')->msg("Your edit suggestion is now pending approval")->process();
										$this->f->addTopicEditSuggestion($_GET['topic_id'],$this->title,$this->content,$this->reason);
										header('Location: http://techberry.org/forum/t='.$_GET['topic_id'].'/');
									}else{
										$this->notify->source()->type('error')->msg("The edit queue is currently full")->process();
										header('Location: http://techberry.org/forum/');
									}
								}
							}else{
								$topic_id = intval($_GET['topic_id']);
								header('Location: http://techberry.org/forum/edit/t='.$topic_id.'/');
							}
						}else{
							$this->notify->source()->type('error')->msg("Topic no longer exists")->process();
							header('Location: http://techberry.org/forum/');
						}
					}elseif(isset($_GET['category_id']) && !isset($_GET['topic_id'],$_GET['post_id'],$_GET['reply_id'])){
						// Editing a category
						if($this->cq->forumClass->exists('category',$_GET['category_id'])){
							if(
								$this->check_string_length($this->title,$settings['CategoryTitleMinLength'],$settings['CategoryTitleMaxLength'],'Title')
												&&
								$this->check_string_length($this->content,$settings['CategoryContentMinLength'],$settings['CategoryContentMaxLength'],'Content')
												&&
								$this->check_string_length($this->reason,$settings['EditReasonMinLength'],$settings['EditReasonMaxLength'],'Reason')
								){
								if($this->p->hasPermission('forum_editCategory')){
									// Has permission to skip the queue
									$this->f->addCategoryEdit($_GET['category_id'],$this->title,$this->content);
									header('Location: http://techberry.org/forum/');
								}else{
									if(($q=$this->f->numberOfEdits('category',$_GET['category_id']) < $settings['CategoryEditQueueSize'])){
										$this->notify->source()->type('success')->msg("Your edit suggestion is now pending approval")->process();
										$this->f->addCategoryEditSuggestion($_GET['category_id'],$this->title,$this->content,$this->reason);
										header('Location: http://techberry.org/forum/');
									}else{
										$this->notify->source()->type('error')->msg("The edit queue is currently full")->process();
										header('Location: http://techberry.org/forum/');
									}
								}
							}else{
								header('Location: http://techberry.org/forum/edit/c='.$_GET['category_id'].'/');
							}
						}else{
							$this->notify->source()->type('error')->msg("Category no longer exists")->process();
							header('Location: http://techberry.org/forum/');
						}
					} // No valid get parameters
				}else{
					// Not logged in
					$this->notify->source()->type('error')->msg("Not logged in")->process();
					header('Location: http://techberry.org/forum/');
				}
			}else{
				// Unable to validate token
				$this->notify->source()->type('error')->msg("Unable to validate your request")->process();
				header('Location: http://techberry.org/forum/');
			}
		}
	}
	$e = new edit();
?>