<?php
	namespace techberry\forum\create;
	
	require("/home/content/99/11499199/html/class.authentication.php");

	use techberry\core\authentication as auth;

	class create extends auth{
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
			$this->f = $this->forum();
			$this->title = isset($_POST['title']) ? $_POST['title'] : null;
			$this->content = isset($_POST['content']) ? $_POST['content'] : null;
			if($this->isTokenValid === true){
				if(parent::loginCheck() === true){
					$p = $this->permissions();
					if(isset($_GET['post_id']) && !isset($_GET['newCategory'],$_GET['category_id'],$_GET['topic_id'])){
						// Creating a reply
						// count how many current replies on the topic there are
						if($stmt = $this->mysqli->prepare("SELECT COUNT(*) FROM forum_replies WHERE post_id = ?")){
							$stmt->bind_param('i',$_GET['post_id']);
							$stmt->execute();
							$stmt->bind_result($numberOfReplies);
							$stmt->fetch();
							$stmt->close();
						}
						if($this->f->exists('post',$_GET['post_id'])){
							if($p->hasPermission('forum_createReply')){
								if($this->check_string_length($this->content,$settings['ReplyContentMinLength'],$settings['ReplyContentMaxLength'],'Content')){
									if($this->f->createReply($_GET['post_id'],$this->content)){
										$this->notify->source()->type('success')->msg("Reply has been made")->process();
										if(isset($numberOfReplies)){
											// return to the last page of replies and scroll down to last reply
											header('Location: http://techberry.org/forum/p='.$_GET['post_id'].'/page='.(ceil($numberOfReplies/\techberry\core\constants::$forumSettings['ReplyResultsPerPage'])).'/#new' );
										}else{
											header('Location: http://techberry.org/forum/p='.$_GET['post_id'].'/');
										}
									}else{
										$this->notify->source()->type('error')->msg("Unable to create reply")->process();
										header('Location: http://techberry.org/forum/p='.$_GET['post_id'].'/');
									}
								}else{
									header('Location: http://techberry.org/forum/create/r='.$_GET['post_id'].'/');
								}
							}else{
								$this->notify->source()->type('error')->msg("Insufficient privileges")->process();
								$post_id = $this->f->replyParent_id($_GET['reply_id']);
								header('Location: http://techberry.org/forum/create/r='.$post_id.'/');
							}
						}else{
							$this->notify->source()->type('error')->msg("Post no longer exists")->process();
							header('Location: http://techberry.org/forum/');
						}
					}elseif(isset($_GET['topic_id']) && !isset($_GET['newCategory'],$_GET['category_id'],$_GET['post_id'])){
						// Creating a post
						// count how many current replies on the topic there are
						if($stmt = $this->mysqli->prepare("SELECT COUNT(*) FROM forum_posts WHERE topic_id = ?")){
							$stmt->bind_param('i',$_GET['topic_id']);
							$stmt->execute();
							$stmt->bind_result($numberOfPosts);
							$stmt->fetch();
							$stmt->close();
						}
						if($this->f->exists('topic',$_GET['topic_id'])){
							if($p->hasPermission('forum_createPost')){
								if(
									$this->check_string_length($this->title,$settings['PostTitleMinLength'],$settings['PostTitleMaxLength'],'Title')
													&&
									$this->check_string_length($this->content,$settings['PostContentMinLength'],$settings['PostContentMaxLength'],'Content')
									){
									if($this->f->createPost($_GET['topic_id'],$this->title,$this->content)){
										$this->notify->source()->type('success')->msg("Post has been made")->process();
										if(isset($numberOfPosts)){
											// return to the last page of posts and scroll down to last post
											header('Location: http://techberry.org/forum/t='.$_GET['topic_id'].'/page='.(ceil($numberOfPosts/\techberry\core\constants::$forumSettings['PostResultsPerPage'])).'/#new' );
										}else{
											header('Location: http://techberry.org/forum/t='.$_GET['topic_id'].'/');
										}
									}else{
										$this->notify->source()->type('error')->msg("Unable to create post")->process();
										header('Location: http://techberry.org/forum/t='.$_GET['topic_id'].'/');
									}
								}else{
									header('Location: http://techberry.org/forum/create/p='.$_GET['topic_id'].'/');
								}
							}else{
								$this->notify->source()->type('error')->msg("Insufficient privileges")->process();
								header('Location: http://techberry.org/forum/create/p='.$_GET['topic_id'].'/');
							}
						}else{
							$this->notify->source()->type('error')->msg("Topic no longer exists")->process();
							header('Location: http://techberry.org/forum/');
						}
					}elseif(isset($_GET['category_id']) && !isset($_GET['newCategory'],$_GET['topic_id'],$_GET['post_id'])){
						// Creating a topic
						// count how many current replies on the topic there are
						if($stmt = $this->mysqli->prepare("SELECT COUNT(*) FROM forum_topics WHERE category_id = ?")){
							$stmt->bind_param('i',$_GET['category_id']);
							$stmt->execute();
							$stmt->bind_result($numberOfTopics);
							$stmt->fetch();
							$stmt->close();
						}
						if($this->f->exists('category',$_GET['category_id'])){
							if($p->hasPermission('forum_createTopic')){
								if(
									$this->check_string_length($this->title,$settings['TopicTitleMinLength'],$settings['TopicTitleMaxLength'],'Title')
													&&
									$this->check_string_length($this->content,$settings['TopicContentMinLength'],$settings['TopicContentMaxLength'],'Content')
									){
									if($this->f->createTopic($_GET['category_id'],$this->title,$this->content)){
										$this->notify->source()->type('success')->msg("Topic has been created")->process();
										if(isset($numberOfTopics)){
											// return to the last page of posts and scroll down to last post
											header('Location: http://techberry.org/forum/c='.$_GET['category_id'].'/page='.(ceil($numberOfTopics/\techberry\core\constants::$forumSettings['TopicResultsPerPage'])).'/#new' );
										}else{
											header('Location: http://techberry.org/forum/c='.$_GET['category_id'].'/');
										}
									}else{
										header('Location: http://techberry.org/forum/c='.$_GET['category_id'].'/');
										$this->notify->source()->type('error')->msg("Unable to create topic")->process();
									}		
									header('Location: http://techberry.org/forum/c='.$_GET['category_id'].'/');
								}else{
									header('Location: http://techberry.org/forum/create/t='.$_GET['category_id'].'/');
								}
							}else{
								$this->notify->source()->type('error')->msg("Insufficient privileges")->process();
								header('Location: http://techberry.org/forum/create/t='.$_GET['category_id'].'/');
							}
						}else{
							$this->notify->source()->type('error')->msg("Category no longer exists")->process();
							header('Location: http://techberry.org/forum/');
						}
					}elseif(isset($_GET['newCategory']) && !isset($_GET['category_id'],$_GET['topic_id'],$_GET['post_id'])){
						// Creating a category
						// count how many current replies on the topic there are
						if($stmt = $this->mysqli->prepare("SELECT COUNT(*) FROM forum_categories")){
							$stmt->execute();
							$stmt->bind_result($numberOfCategories);
							$stmt->fetch();
							$stmt->close();
						}
						if($p->hasPermission('forum_createCategory')){
							if(
								$this->check_string_length($this->title,$settings['CategoryTitleMinLength'],$settings['CategoryTitleMaxLength'],'Title')
												&&
								$this->check_string_length($this->content,$settings['CategoryContentMinLength'],$settings['CategoryContentMaxLength'],'Content')
								){
								if($this->f->createCategory($this->title,$this->content)){
									$this->notify->source()->type('success')->msg("Category has been created")->process();
									if(isset($numberOfCategories)){
										// return to the last page of posts and scroll down to last post
										header('Location: http://techberry.org/forum/page='.(ceil($numberOfCategories/\techberry\core\constants::$forumSettings['CategoryResultsPerPage'])).'/#new' );
									}else{
										header('Location: http://techberry.org/forum/');
									}
								}else{
									$this->notify->source()->type('error')->msg("Unable to create category")->process();
									header('Location: http://techberry.org/forum/');
								}
								header('Location: http://techberry.org/forum/');
							}else{
								header('Location: http://techberry.org/forum/create/c/');
							}
						}else{
							$this->notify->source()->type('error')->msg("Insufficient privileges")->process();
							header('Location: http://techberry.org/forum/create/c/');
						}
					}
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
	$c = new create();
?>