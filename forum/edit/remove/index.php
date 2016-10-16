<?php
	namespace techberry\forum\edit\remove;
	
	require("/home/content/99/11499199/html/class.contentQuerying.php");
	require("/home/content/99/11499199/html/class.authentication.php");

	use techberry\core\authentication as auth;

	class removeEdit extends auth{
		function __construct(){
			parent::__construct('GET');
			$this->cq = new \techberry\core\contentQuerying($this->mysqli);
			$this->cq->forum();
			$this->p = $this->permissions();
			$this->f = $this->forum();
			$this->ul = $this->userLookups();
			$this->ua = $this->userActions();
			if($this->isTokenValid === true){
				if(parent::loginCheck() === true){
					if(isset($_GET['reply_edit_id']) && !isset($_GET['category_edit_id'],$_GET['topic_edit_id'],$_GET['post_edit_id'])){
						// Removing a reply edit
						if($this->f->editExists('reply',$_GET['reply_edit_id'])){
							if($this->p->hasPermission('forum_editReply')){
								$post_id = $this->f->editReplyPost_id($_GET['reply_edit_id']);
								$this->f->removeEdit('reply',$_GET['reply_edit_id']);
								
								$author_id = $this->f->getEditAuther('reply',$_GET['reply_edit_id']);
								$this->ua->addNotification($author_id,'forum_replyEdit_removed',$post_id);
								$this->ua->updateReputation($settings['ReputationLossReplyEditRemoval'],$author_id);
								
								$this->notify->source()->type('success')->msg("Removed edit")->process();
								header('Location: http://techberry.org/forum/p='.$post_id.'/');
							}else{
								$this->notify->source()->type('error')->msg("Insufficient privileges")->process();
								$post_id = $this->f->editReplyPost_id($_GET['reply_edit_id']);
								header('Location: http://techberry.org/forum/p='.$post_id.'/');
							}
						}else{
							$this->notify->source()->type('error')->msg("Reply edit no longer exists")->process();
							header('Location: http://techberry.org/forum/');
						}
					}elseif(isset($_GET['post_edit_id']) && !isset($_GET['category_edit_id'],$_GET['topic_edit_id'],$_GET['reply_edit_id'])){
						// Removing a post edit
						if($this->f->editExists('post',$_GET['post_edit_id'])){
							if($this->p->hasPermission('forum_editPost')){
								$topic_id = $this->f->editPostTopic_id($_GET['post_edit_id']);
								$this->f->removeEdit('post',$_GET['post_edit_id']);
								
								$author_id = $this->f->getEditAuther('post',$_GET['post_edit_id']);
								$this->ua->addNotification($author_id,'forum_postEdit_removed',$topic_id);
								$this->ua->updateReputation($settings['ReputationLossPostEditRemoval'],$author_id);
								
								$this->notify->source()->type('success')->msg("Removed edit")->process();
								header('Location: http://techberry.org/forum/t='.$topic_id.'/');
							}else{
								$this->notify->source()->type('error')->msg("Insufficient privileges")->process();
								$topic_id = $this->f->editPostTopic_id($_GET['post_edit_id']);
								header('Location: http://techberry.org/forum/t='.$topic_id.'/');
							}
						}else{
							$this->notifyClass()->source()->type('error')->msg("Post edit no longer exists")->process();
							header('Location: http://techberry.org/forum/');
						}
					}elseif(isset($_GET['topic_edit_id']) && !isset($_GET['category_edit_id'],$_GET['post_edit_id'],$_GET['reply_edit_id'])){
						// Removing a topic edit
						if($this->f->editExists('topic',$_GET['topic_edit_id'])){
							if($this->p->hasPermission('forum_editTopic')){
								$category_id = $this->f->editTopicCategory_id($_GET['topic_edit_id']);
								$this->f->removeEdit('topic',$_GET['topic_edit_id']);
								
								$author_id = $this->f->getEditAuther('topic',$_GET['topic_edit_id']);
								$this->ua->addNotification($author_id,'forum_topicEdit_removed',$category_id);
								$this->ua->updateReputation($settings['ReputationLossTopicEditRemoval'],$author_id);
								
								$this->notify->source()->type('success')->msg("Removed edit")->process();
								header('Location: http://techberry.org/forum/c='.$category_id.'/');
							}else{
								$this->notify->source()->type('error')->msg("Insufficient privileges")->process();
								$category_id = $this->f->editTopicCategory_id($_GET['topic_edit_id']);
								header('Location: http://techberry.org/forum/c='.$category_id.'/');
							}
						}else{
							$this->notify->source()->type('error')->msg("Topic edit no longer exists")->process();
							header('Location: http://techberry.org/forum/');
						}
					}elseif(isset($_GET['category_edit_id']) && !isset($_GET['topic_edit_id'],$_GET['post_edit_id'],$_GET['reply_edit_id'])){
						// Removing a category edit
						if($this->f->editExists('category',$_GET['category_edit_id'])){
							if($this->p->hasPermission('forum_editCategory')){
								$this->f->removeEdit('category',$_GET['category_edit_id']);
								
								$author_id = $this->f->getEditAuther('category',$_GET['category_edit_id']);
								$this->ua->addNotification($author_id,'forum_categoryEdit_removed',0);
								$this->ua->updateReputation($settings['ReputationLossCategoryEditRemoval'],$author_id);						
				
								$this->notify->source()->type('success')->msg("Removed edit")->process();
								header('Location: http://techberry.org/forum/');
							}else{
								$this->notify->source()->type('error')->msg("Insufficient privileges")->process();
								header('Location: http://techberry.org/forum/');
							}
						}else{
							$this->notify->source()->type('error')->msg("Category edit no longer exists")->process();
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
	$re = new removeEdit();
?>