<?php
	namespace techberry\forum\commit;
	
	require("/home/content/99/11499199/html/class.authentication.php");

	use techberry\core\authentication as auth;

	class commit extends auth{
		private $f; // Object for forum querying methods
		function __construct(){
			parent::__construct('GET');
			$this->f = $this->forum();
			if($this->isTokenValid){
				$this->p = $this->permissions();
				if(isset($_GET['topic_id']) && !isset($_GET['category_id'])){
					// Commit to a topic
					if($this->p->hasPermission('forum_commitTopic')){
						if($this->f->exists('topic',$_GET['topic_id'])){
							if(!$this->f->hasCommitted('topic',$_GET['topic_id'])){
								if($this->f->commit('topic',$_GET['topic_id'])){
								
									// Check if enough commits to activate topic
									$q = $this->f->numberOfCommits('topic',$_GET['topic_id']);
									if($q>=$this->forumSettings['TopicCommitsToActivate'] || $_SESSION['group_id'] >= 6){
										if($this->f->activate('topic',$_GET['topic_id'])){
											$this->notify->source()->type('success')->msg('Topic has been activated')->process();
										}else{
											$this->notify->source()->type('error')->msg('Unable to activate topic')->process();
										}
									}else{
										$this->notify->source()->type('success')->msg('Committed to topic')->process();
									}
									
								}else{
									$this->notify->source()->type('error')->msg('Unable to process your request')->process();
								}
							}else{
								$this->notify->source()->type('error')->msg('You have already committed to this topic')->process();
							}
						}else{
							$this->notify->source()->type('error')->msg('Unable to find topic')->process();
						}
					}else{
						$this->notify->source()->type('error')->msg("Insufficient privileges")->process();
						$category_id = $this->f->topicParent_id($_GET['topic_id']);
						header('Location: http://techberry.org/forum/c='.$category_id.'/');
					}
					if(( $id = $this->f->topicParent_id($_GET['topic_id']) )){
						header('Location: http://techberry.org/forum/c='.$id.'/');
					}else{
						// By default return to forum root
						header('Location: http://techberry.org/forum/');
					}
				}elseif(isset($_GET['category_id']) && !isset($_GET['topic_id'])){
					// Commit to a category
					if($this->p->hasPermission('forum_commitCategory')){
						if($this->f->exists('category',$_GET['category_id'])){
							if(!$this->f->hasCommitted('category',$_GET['category_id'])){
								if($this->f->commit('category',$_GET['category_id'])){
								
									// Check if enough commits to activate category
									$q = $this->f->numberOfCommits('topic',$_GET['category_id']);
									if($q>=$this->forumSettings['CategoryCommitsToActivate'] || $_SESSION['group_id'] >= 6){
										if($this->f->activate('category',$_GET['category_id'])){
											$this->notify->source()->type('success')->msg('Category has been activated')->process();
										}else{
											$this->notify->source()->type('error')->msg('Unable to activate category')->process();
										}
									}else{
										$this->notify->source()->type('success')->msg('Committed to category')->process();
									}
									
								}else{
									$this->notify->source()->type('error')->msg('Unable to process your request')->process();
								}
							}else{
								$this->notify->source()->type('error')->msg('You have already committed to this category')->process();
							}
						}else{
							$this->notify->source()->type('error')->msg('Unable to find category')->process();
						}
						header('Location: http://techberry.org/forum/');
					}
				}else{
					$this->notify->source()->type('error')->msg("Insufficient privileges")->process();
					header('Location: http://techberry.org/forum/');
				}
			}
		}
	}
	$c = new commit();
?>