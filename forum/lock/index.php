<?php
	namespace techberry\forum\lock;
	
	require("/home/content/99/11499199/html/class.authentication.php");

	use techberry\core\authentication as auth;

	class lock extends auth{
		private $f; // Object for forum querying methods
		function __construct(){
			parent::__construct('GET');
			$this->f = $this->forum();
			$this->p = $this->permissions();
			if($this->isTokenValid){
				if(isset($_GET['reply_id']) &&!isset($_GET['category_id'],$_GET['topic_id'],$_GET['post_id'])){
					// Locking a reply
					if($this->p->hasPermission('forum_lockReply')){
						if($this->f->exists('reply',$_GET['reply_id'])){
							if(!$this->f->isLocked('reply',$_GET['reply_id'])){
								if($this->f->lock('reply',$_GET['reply_id'])){
									$this->notify->source()->type('success')->msg('Reply has been locked')->process();
								}else{
									$this->notify->source()->type('error')->msg('Unable to process your request')->process();
								}
							}else{
								$this->notify->source()->type('error')->msg('Reply is already locked')->process();
							}
						}else{
							$this->notify->source()->type('error')->msg('Unable to find reply')->process();
						}
					}else{
						$this->notify->source()->type('error')->msg('Insufficient privileges')->process();
					}
					if(($post_id=$this->f->replyParent_id($_GET['reply_id']))){
						header('Location: http://techberry.org/forum/p='.$post_id.'/');
					}else{
						// By default return to forum root
						header('Location: http://techberry.org/forum/');
					}
				}elseif(isset($_GET['post_id']) && !isset($_GET['category_id'],$_GET['topic_id'],$_GET['reply_id'])){
					// Locking a post
					if($this->p->hasPermission('forum_lockPost')){
						if($this->f->exists('post',$_GET['post_id'])){
							if(!$this->f->isLocked('post',$_GET['post_id'])){
								if($this->f->lock('post',$_GET['post_id'])){
									$this->notify->source()->type('success')->msg('Post has been locked')->process();
								}else{
									$this->notify->source()->type('error')->msg('Unable to process your request')->process();
								}
							}else{
								$this->notify->source()->type('error')->msg('Post is already locked')->process();
							}
						}else{
							$this->notify->source()->type('error')->msg('Unable to find post')->process();
						}
					}else{
						$this->notify->source()->type('error')->msg('Insufficient privileges')->process();
					}
					if(($topic_id=$this->f->postParent_id($_GET['post_id']))){
						header('Location: http://techberry.org/forum/t='.$topic_id.'/');
					}else{
						// By default return to forum root
						header('Location: http://techberry.org/forum/');
					}
				}elseif(isset($_GET['topic_id']) && !isset($_GET['category_id'],$_GET['post_id'],$_GET['reply_id'])){
					// Locking a topic
					if($this->p->hasPermission('forum_lockTopic')){
						if($this->f->exists('topic',$_GET['topic_id'])){
							if(!$this->f->isLocked('topic',$_GET['topic_id'])){
								if($this->f->lock('topic',$_GET['topic_id'])){
									$this->notify->source()->type('success')->msg('Topic has been locked')->process();
								}else{
									$this->notify->source()->type('error')->msg('Unable to process your request')->process();
								}
							}else{
								$this->notify->source()->type('error')->msg('Topic is already locked')->process();
							}
						}else{
							$this->notify->source()->type('error')->msg('Unable to find topic')->process();
						}
					}else{
						$this->notify->source()->type('error')->msg('Insufficient privileges')->process();
					}
					if(($category_id=$this->f->topicParent_id($_GET['topic_id']))){
						header('Location: http://techberry.org/forum/c='.$category_id.'/');
					}else{
						// By default return to forum root
						header('Location: http://techberry.org/forum/');
					}
				}elseif(isset($_GET['category_id']) && !isset($_GET['topic_id'],$_GET['post_id'],$_GET['reply_id'])){
					// Locking a category
					if($this->p->hasPermission('forum_lockCategory')){
						if($this->f->exists('category',$_GET['category_id'])){
							if(!$this->f->isLocked('category',$_GET['category_id'])){
								if($this->f->lock('category',$_GET['category_id'])){
									$this->notify->source()->type('success')->msg('Category has been locked')->process();
								}else{
									$this->notify->source()->type('error')->msg('Unable to process your request')->process();
								}
							}else{
								$this->notify->source()->type('error')->msg('Category is already locked')->process();
							}
						}else{
							$this->notify->source()->type('error')->msg('Unable to find category')->process();
						}
					}else{
						$this->notify->source()->type('error')->msg('Insufficient privileges')->process();
					}
					header('Location: http://techberry.org/forum/');
				}
			}
		}
	}
	$l = new lock();
?>