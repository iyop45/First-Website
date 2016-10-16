<?php
	namespace techberry\loadMore;
	
	require("/home/content/99/11499199/html/class.authentication.php");
	use techberry\core\authentication as auth;
	
	
	/*
	
	
		SINCE WE ARE NOT CONVERTING TO PAGINATION
	
	
	*/
	
	
	class loadMore extends auth{
		static $errorAlert = "<script type='text/javascript'>createAlert('error','Unable to retrieve data');</script>";
		static $directAccess = "<script type='text/javascript'>alert('hello')</script>";
		private $referer;
		private $tokens;
		private $parsedOutput;
		private $expectedURL; // To validate the source of the request
		private $data;
		private $resultsPerDisplay;
		function __construct(){
			parent::__construct();
			$this->referer = $_SERVER['HTTP_REFERER'];
			if(isset($_GET['info'])){
				if(strlen($_GET['info'])>1000 && strlen($_GET['info'])<2){
					// Ignore queries which exceed limit
					die("Invalid request");
				}else{
					$this->tokens = explode("_", $_GET['info']);
					switch($this->tokens[0]){
						case 'user-posts':
							/*
								Load users older wall posts
							*/
							$this->expectedURLType = "http://techberry.org/user/";
							$this->validateReferer();
							$this->validateLimit($_GET['from']);
							$offset = intval($_GET['from'])+20;
							$l = $this->userLookups($this->mysqli);
							$this->data = $l->getUserWallPosts($this->tokens[1],array('onset'=>intval($_GET['from']),'offset'=>$offset));
							if(empty($this->data)){
								die('false');
							}
							$this->parsedOutput = '';
							foreach($this->data as &$data){
								if($data['is_bot']!=1){
									$data['post'] = htmlspecialchars($data['post'], ENT_QUOTES);
								}else{
									$data['post'] = html_entity_decode($data['post']);
								}
								$this->parsedOutput .= '
								<li>
									<a href="http://techberry.org/user/'.$data['username'].'/">
										<div data-user="'.$data['username'].'" class="pr_avatar_bubble_list miniprofile">
											<img class="pr_avatar_image_list" src="'.$data['avatar'].'"/>
										</div>
									</a>
									<div class="pr_post_content">
										<p>'.$data['post'].'</p>
									</div>
								</li>';
							}
							break;
						case 'forum-category':
							/*
								Load more categories
							*/
							require("/home/content/99/11499199/html/process.strings.php");
							require("/home/content/99/11499199/html/class.contentQuerying.php");
							$strings = new \techberry\strings();
							$cq = new \techberry\core\contentQuerying($this->mysqli);
							$cq->forum();
							$this->expectedURLType = "http://techberry.org/forum/";
							$this->resultsPerDisplay = self::$forumSettings['CategoryResultsPerLoad'];
							$this->validateReferer();
							$this->validateLimit($_GET['from']);
							$offset = intval($_GET['from'])+20;
							// If first ajax call show the title
							//apc_clear_cache();
							// Cached for non-users as content is same for all
							if($this->loginCheck()){
								$p = $this->permissions();
								$permissions = $p->getUserPrivileges($_SESSION['user_id']);
								if(isset($_GET['first'])){
									if($_GET['first'] == 1){
										$this->parsedOutput = '<li class="f_list">Extra Categories</li>';
									}else{
										$this->parsedOutput = '';
									}
								}else{
									$this->parsedOutput = '';
								}
							}else{
								$permissions = false;
								if($this->parsedOutput = apc_fetch('forum-categories-'.$this->tokens[1].'-'.$offset)){
									$isUsingCache = 1;
								}else{
									// This sets the parsed output to false
									// So must overwrite this accordingly
									if(isset($_GET['first'])){
										if($_GET['first'] == 1){
											$this->parsedOutput = '<li class="f_list">Extra Categories</li>';
										}else{
											$this->parsedOutput = '';
										}
									}else{
										$this->parsedOutput = '';
									}
								}
							}
							if(!$isUsingCache){
								// Only retrieve categories if not in cache
								$this->data = $cq->forumClass->categories(array('onset'=>intval($_GET['from']),'offset'=>$offset));
								//$this->data = $cq->forumClass->categories(array('onset'=>intval(1),'offset'=>2));
								if(empty($this->data)){
									die('false');
								}
								$category_list_ids = array();
								foreach($this->data as &$data){
									$data['views'] = $strings->abbreviateNumber($data['views']);
									$data['views'] = ( $data['views'] ? $data['views'] : '0' );
									
									$data['friendlyDate'] = $strings->humanTiming(strtotime($data['date']));
									$data['friendlyDate'] = ( $data['friendlyDate'] ? $data['friendlyDate'] : 'NaN' );
									
									$data['topics'] = ( $data['topics'] ? $data['topics'] : '0' );
									
									$data['titleLink']=$strings->urlFreindly($data['title']);
									if($data['pending']===1){
										$data['commits']=$cq->forumClass->commits('category',$data['id']);
										$data['meterWidth']=(($data['commits'])/10)*100;
									}
									$category_list_ids[] = 'ajax_dynamic_'.$data['id'];
									$this->parsedOutput .= '
									<li id="ajax_dynamic_'.$data['id'].'" class="f_list" style="display:none;">
										<a href="http://techberry.org/forum/c='.$data['id'].'/'.$data['titleLink'].'">
											<div class="f_list_bubble" style="background-color:'.$data['color'].'">
												<img data-ot="'.htmlentities($data['icon']).'" 
													 class="f_list_icon" 
													 src="'.$data['icon'].'" 
													 alt="'.htmlentities($data['icon']).'"/>
											</div>
										</a>
										<div class="f_list_info">
											<a class="light" href="http://techberry.org/forum/c='.$data['id'].'/'.$data['titleLink'].'">
												<h2>' . htmlentities($data['title']) . '</h2>
											</a>
											<p class="f_list_description shortened more">
												' . htmlentities($data['description']) . '
											</p>
										</div>
										<div class="f_list_stats">
											<div class="f_list_box">
												<span class="f_list_value tooltipWiki help" data-v="forum:category:viewCount">
													'.$data['views'].'
												</span>
												Views
											</div>
											<div class="f_list_box">
												<span class="f_list_value">
													'.$data['topics'].'
												</span>
												Topics
											</div>
											<div class="f_list_box">
												<span datetime="'.$data['date'].'" class="f_list_value tiny age">
													'.$data['friendlyDate'].'
												</span>
												Age
											</div>';
											if($data['pending'] == 1){
												$this->parsedOutput .= 
												'<div class="f_list_box_meter" data-ot="'.$data['commits'].' committed ( '.$data['meterWidth'].'% )">
													<div class="meter">
														<span style="width:'.$data['meterWidth'].'%"></span>
													</div>
												</div>';
												if($data['hasCommitted'] == 1){
													$this->parsedOutput .= 
													'<div class="f_list_box_action">
														<a href="http://techberry.org/forum/commit/c='.$data['id'].'/'.$_SESSION['token'].'" 
														   class="';
															if(!$permissions['forum_commitCategory']){
																$this->parsedOutput .= 
																'flatLocked strikethrough tooltipWiki pointsNeeded" 
																data-action="forum_commitCategory" 
																data-v="forum:category:commit:lackPrivilege" 
																style="padding-left:35px !important"';
															}else{
																$this->parsedOutput .= 
																'flatBlue"';
															}
															$this->parsedOutput .= 
															'Commit
														</a>
													</div>';
												}
											}else{
												if($data['isLocked'] == 1){
													$this->parsedOutput .= 
													'<div class="f_list_box_action">
														<a href="#" 
														   data-ot="This category is permanently locked" 
														   data-action="unlock" 
														   class="flatLocked pointsNeeded">
														   Locked
														</a>
													</div>';
												}else{
													$this->parsedOutput .= 
													'<div class="f_list_box_action">
														<a class="';
														if(!$permissions['forum_flagCategory']){
															$this->parsedOutput .= 
															'flatLocked strikethrough tooltipWiki pointsNeeded" 
															data-action="forum_flagCategory"
															data-v="forum:category:flag:lackPrivilege"';
														}else{
															$this->parsedOutput .= 
															'flatRed" 
															href="http://techberry.org/forum/flag/c='.$data['id'].'/'.$_SESSION['token'].'"';
														}
														$this->parsedOutput .= 
														'>Flag</a>
													</div>
													<div class="f_list_box_action">
														<a href="http://techberry.org/forum/edit/c='.$data['id'].'/" class="flatBlue">Edit</a>
													</div>
													<div class="f_list_box_action">
														<a class="';
														if(!$permissions['forum_lockCategory']){
															$this->parsedOutput .= 
															'flatLocked strikethrough tooltipWiki pointsNeeded" 
															data-action="forum_lockCategory" 
															data-v="forum:category:lock:lackPrivilege"';
														}else{
															$this->parsedOutput .= 
															'flatBlue"
															href="http://techberry.org/forum/lock/c='.$data['id'].'/'.$_SESSION['token'].'"';
														}
														$this->parsedOutput .= 
														'>Lock</a>
													</div>';
												}
											}
										$this->parsedOutput .= 
										'</div>
									</li>';
								}
								$this->parsedOutput .= '<script type="text/javascript">';
								foreach($category_list_ids as $cli){
									$this->parsedOutput .= '$("#'.$cli.'").fadeIn("slow").removeAttr(\'id\');';
								}
								$this->parsedOutput .= '</script>';
								// The categories are not in cache and user is not logged in
								// So add to cache
								if(!$this->loginCheck()){
									apc_store('forum-categories-'.$this->tokens[1].'-'.$offset, $this->parsedOutput, 120);
								}
							}
							break;
						case 'forum-topic':
							/*
								Load more topics
							*/
							require("/home/content/99/11499199/html/process.strings.php");
							require("/home/content/99/11499199/html/class.contentQuerying.php");
							$strings = new \techberry\strings();
							$cq = new \techberry\core\contentQuerying($this->mysqli);
							$cq->forum();
							$this->expectedURLType = "http://techberry.org/forum/c=";
							$this->validateReferer();
							$this->validateLimit($_GET['from']);
							$offset = intval($_GET['from'])+20;
							// If first ajax call show the title
							apc_clear_cache();
							// Cached for non-users as content is same for all
							if($this->loginCheck()){
								$permissions = $this->getUserPrivileges($_SESSION['user_id']);
								if(isset($_GET['first'])){
									if($_GET['first'] == 1){
										$this->parsedOutput = '<li class="f_list">Extra Topics</li>';
									}else{
										$this->parsedOutput = '';
									}
								}else{
									$this->parsedOutput = '';
								}
							}else{
								$permissions = false;
								if($this->parsedOutput = apc_fetch('forum-topics-'.$this->tokens[1].'-'.$offset)){
									$isUsingCache = 1;
								}else{
									// This sets the parsed output to false
									// So must overwrite this accordingly
									if(isset($_GET['first'])){
										if($_GET['first'] == 1){
											$this->parsedOutput = '<li class="f_list">Extra Topics</li>';
										}else{
											$this->parsedOutput = '';
										}
									}else{
										$this->parsedOutput = '';
									}
								}
							}
							if(!$isUsingCache){
								// Only retrieve topics if not in cache
								//$this->data = $cq->forumClass->topics($this->tokens[1],array('onset'=>intval($_GET['from']),'offset'=>$offset));
								//die($this->tokens[1]);
								$this->data = $cq->forumClass->topics($this->tokens[1],array('onset'=>intval(1),'offset'=>2));
								if(empty($this->data)){
									die('false');
								}
								$topics_list_ids = array();
								foreach($this->data as &$data){
									$data['views']=$strings->abbreviateNumber($data['views']);
									$data['views'] = ( $data['views'] ? $data['views'] : '0' );
									
									$data['friendlyDate']=$strings->humanTiming(strtotime($data['date']));
									$data['friendlyDate'] = ( $data['friendlyDate'] ? $data['friendlyDate'] : 'NaN' );
									
									$data['posts'] = ( $data['posts'] ? $data['posts'] : '0' );
									
									$data['titleLink']=$strings->urlFreindly($data['title']);
									if($data['pending']===1){
										$data['commits']=$cq->forumClass->topicCommits($data['id']);
										$data['meterWidth']=(($data['commits'])/10)*100;
									}
									$topics_list_ids[] = 'ajax_dynamic_'.$data['id'];
									$this->parsedOutput .= '
										<li id="ajax_dynamic_'.$data['id'].'" class="f_list" style="display:none;">
											<a href="http://techberry.org/forum/t='.$data['id'].'/'.$data['titleLink'].'">
												<div class="f_list_bubble" style="background-color:'.$data['groupColor'].'">
													<img class="f_list_icon" src="'.$data['categoryIcon'].'" alt="'.htmlentities($data['categoryTitle']).'"/>
												</div>
											</a>
											<div class="f_list_info">
												<a class="light" href="http://techberry.org/forum/t='.$data['id'].'/'.$data['titleLink'].'">
													<h2>'.htmlentities($data['title']).'</h2>
												</a>
												<p class="f_list_description shortened more">
													'.htmlentities($data['description']).'
												</p>
											</div>
											<div class="f_list_stats">
												<div class="f_list_box">
													<span class="f_list_value help" data-ot="This count is based on approximations">
														'.$data['views'].'
													</span>
													Views
												</div>
												<div class="f_list_box">
													<span datetime="{$topic.date}" class="f_list_value tiny age">
														'.$data['friendlyDate'].'
													</span>
													Age
												</div>
												<div class="f_list_box">
													<span class="f_list_value">
														'.$data['posts'].'
													</span>
													Posts
												</div>';
												if($data['pending']==1){
													$this->parsedOutput .= '
													<div class="f_list_box_meter" data-ot="'.$data['commits'].' committed ( '.$data['meterWidth'].'% )">
														<div class="meter">
															<span style="width:'.$data['meterWidth'].'%"></span>
														</div>
													</div>';
													if($data['hasCommitted']==1){
														$this->parsedOutput .= '
														<div class="f_list_box_action">
															<a href="http://techberry.org/forum/commit/t='.$data['id'].'/'.$_SESSION['token'].'" class="';
															if(!$permissions['forum_commitTopic']){
																$this->parsedOutput .= 'flatLocked strikethrough tooltipWiki pointsNeeded" data-action="forum_commitTopic" data-v="forum:topic:commit:lackPrivilege"';
															}else{
																$this->parsedOutput .= 'flatBlue"';
															}$this->parsedOutput .= '>Commit</a>
														</div>';
													}
												}else{
													if($data['isLocked']==1){
														$this->parsedOutput .= '
														<div class="f_list_box_action">
															<a href="#" data-ot="This topic is permanently locked" data-action="unlock" class="flatLocked pointsNeeded">Locked</a>
														</div>';
													}else{
														$this->parsedOutput .= '
														<div class="f_list_box_action">
															<a class="';
															if(!$permissions['forum_flagTopic']){
																$this->parsedOutput .= 'flatLocked strikethrough tooltipWiki pointsNeeded" data-action="forum_flagTopic" data-v="forum:topic:flag:lackPrivilege"';
															}else{
																$this->parsedOutput .= '
																flatRed"
																href="http://techberry.org/forum/flag/t='.$data['id'].'/'.$_SESSION['token'].'"';
															}$this->parsedOutput .= '>Flag</a>
														</div>
														<div class="f_list_box_action">
															<a href="http://techberry.org/forum/edit/t='.$data['id'].'/" class="flatBlue">Edit topic</a>
														</div>
														<div class="f_list_box_action">
															<a class="';
															if(!$permissions['forum_lockTopic']){
																$this->parsedOutput .= 'flatLocked strikethrough tooltipWiki pointsNeeded" data-action="forum_lockTopic" data-v="forum:topic:lock:lackPrivilege"';
															}else{
																$this->parsedOutput .= '
																flatBlue"
																href="http://techberry.org/forum/lock/t='.$data['id'].'/'.$_SESSION['token'].'"';
															}$this->parsedOutput .= '>Lock</a>
														</div>';
													}
												}
											$this->parsedOutput .= '
											</div>
										</li>';
								}
								$this->parsedOutput .= '<script type="text/javascript">';
								foreach($topics_list_ids as $tli){
									$this->parsedOutput .= '$("#'.$tli.'").fadeIn("slow").removeAttr("id");';
								}
								$this->parsedOutput .= '</script>';
								// The topics are not in cache and user is not logged in
								// So add to cache
								if(!$this->loginCheck()){
									apc_store('forum-topics-'.$this->tokens[1].'-'.$offset, $this->parsedOutput, 120);
								}
							}
							break;
						case 'forum-post':
							/*
								Load more posts
							*/
							require("/home/content/99/11499199/html/process.strings.php");
							require("/home/content/99/11499199/html/class.contentQuerying.php");
							$strings = new \techberry\strings();
							$cq = new \techberry\core\contentQuerying($this->mysqli);
							$cq->forum();
							$this->expectedURLType = "http://techberry.org/forum/t=";
							$this->validateReferer();
							$this->validateLimit($_GET['from']);
							$offset = intval($_GET['from'])+20;
							// If first ajax call show the title
							apc_clear_cache();
							// Cached for non-users as content is same for all
							if($this->loginCheck()){
								$p = $this->permissions();
								$permissions = $p->getUserPrivileges($_SESSION['user_id']);
								if(isset($_GET['first'])){
									if($_GET['first'] == 1){
										$this->parsedOutput = '<li class="f_list">Extra Posts</li>';
									}else{
										$this->parsedOutput = '';
									}
								}else{
									$this->parsedOutput = '';
								}
							}else{
								$permissions = false;
								if($this->parsedOutput = apc_fetch('forum-posts-'.$this->tokens[1].'-'.$offset)){
									$isUsingCache = 1;
								}else{
									// This sets the parsed output to false
									// So must overwrite this accordingly
									if(isset($_GET['first'])){
										if($_GET['first'] == 1){
											$this->parsedOutput = '<li class="f_list">Extra Posts</li>';
										}else{
											$this->parsedOutput = '';
										}
									}else{
										$this->parsedOutput = '';
									}
								}
							}
							if(!$isUsingCache){
								// Only retrieve posts if not in cache
								//die($this->tokens[1]);
								$this->data = $cq->forumClass->posts($this->tokens[1],array('onset'=>intval($_GET['from']),'offset'=>$offset));
								//$this->data = $cq->forumClass->posts($this->tokens[1],array('onset'=>intval(1),'offset'=>2));
								if(empty($this->data)){
									die('false');
								}
								$posts_list_ids = array();
								foreach($this->data as &$data){
									$data['views']=$strings->abbreviateNumber($data['views']);
									$data['views'] = ( $data['views'] ? $data['views'] : '0' );
									
									$data['friendlyDate']=$strings->humanTiming(strtotime($data['date']));
									$data['friendlyDate'] = ( $data['friendlyDate'] ? $data['friendlyDate'] : 'NaN' );
									
									$data['replyCount'] = ( $data['replyCount'] ? $data['replyCount'] : '0' );
									
									$data['titleLink']=$strings->urlFreindly($data['title']);
									$posts_list_ids[] = 'ajax_dynamic_'.$data['post_id'];
									$this->parsedOutput .= '
										<li id="ajax_dynamic_'.$data['post_id'].'" class="f_list';
											if($data['flagCount']==0){ $this->parsedOutput .= ' unpopular'; }
											$this->parsedOutput .= '" style="display:none" onmouseover="$(this).find(\'.f_newReplies\').show()" onmouseout="$(this).find(\'.f_newReplies\').hide()">
											<a href="http://techberry.org/user/'.$data['username'].'/">
												<div data-user="'.$data['username'].'" class="f_list_bubble miniprofile" style="background-color:'.$data['color'].'">
													<img class="f_list_icon" src="'.$data['avatar'].'" alt="'.htmlentities($data['title']).'"/>
												</div>
											</a>
											<div class="f_list_info">
												<a class="light" href="http://techberry.org/forum/p='.$data['post_id'].'/'.$data['postTitleLink'].'">
													<h2>'.htmlentities($data['title']).'</h2>
												</a>
												<p class="f_newReplies" style="display: none">
													----------- <a href="http://techberry.org/forum/p='.$data['post_id'].'/'.$data['postTitleLink'].'?goto=newreplies">new replies</a> -----------
												</p>
												<p class="f_list_description shortened more">
													'.htmlentities($data['content']).'
												</p>
											</div>
											<div class="f_list_stats">
												<div class="f_list_box help" data-ot="This count is based on approximations">
													<span class="f_list_value">
														'.$data['views'].'
													</span>
													Views
												</div>
												<div class="f_list_box">
													<span class="f_list_value">
														'.$data['replyCount'].'
													</span>
													Replies
												</div>
												<div class="f_list_box">
													<span datetime="'.$data['date'].'" class="f_list_value tiny age">
														'.$data['friendlyDate'].'
													</span>
													Age
												</div>';
												if($data['isLocked']==1){
													$this->parsedOutput .= '
													<div class="f_list_box_action">
														<a href="#" data-ot="This post is permanently locked" data-action="unlock" class="flatLocked pointsNeeded">Locked</a>
													</div>';
												}else{
													$this->parsedOutput .= '
													<div class="f_list_box_action">
														<a href="http://techberry.org/forum/flag/p='.$data['post_id'].'/'.$_SESSION['token'].'" class="';
														if(!$permissions['forum_flagPost']){
															$this->parsedOutput .= 'strikethrough flatLocked tooltipWiki pointsNeeded" data-action="forum_flagPost" data-v="forum:post:flag:lackPrivilege"';
														}else{
															$this->parsedOutput .= 'flatRed"';
														}$this->parsedOutput .= '>Flag</a>
													</div>
													<div class="f_list_box_action">
														<a href="http://techberry.org/forum/edit/p='.$data['post_id'].'/" class="flatBlue">Edit</a>
													</div>
													<div class="f_list_box_action">
														<a href="http://techberry.org/forum/lock/p='.$data['post_id'].'/'.$_SESSION['token'].'" class="';
														if(!$permissions['forum_lockPost']){
															$this->parsedOutput .= 'flatLocked strikethrough tooltipWiki pointsNeeded" data-action="forum_lockPost" data-v="forum:post:lock:lackPrivilege"';
														}else{
															$this->parsedOutput .= 'flatBlue"';
														}$this->parsedOutput .= '>Lock</a>
													</div>';
												}
												$this->parsedOutput .= '
											</div>
										</li>';
								}
								$this->parsedOutput .= '<script type="text/javascript">';
								foreach($posts_list_ids as $pli){
									$this->parsedOutput .= '$("#'.$pli.'").fadeIn("slow").removeAttr(\'id\');';
								}
								$this->parsedOutput .= '</script>';
								// The posts are not in cache and user is not logged in
								// So add to cache
								if(!$this->loginCheck()){
									apc_store('forum-posts-'.$this->tokens[1].'-'.$offset, $this->parsedOutput, 120);
								}
							}
							break;
						case 'forum-reply':
							/*
								Load more replies
							*/
							require("/home/content/99/11499199/html/process.strings.php");
							require("/home/content/99/11499199/html/class.contentQuerying.php");
							$this->p = $this->permissions();
							$strings = new \techberry\strings();
							$cq = new \techberry\core\contentQuerying($this->mysqli);
							$cq->forum();
							$this->expectedURLType = "http://techberry.org/forum/p=";
							$this->validateReferer();
							$this->validateLimit($_GET['from']);
							$offset = intval($_GET['from'])+20;
							// If first ajax call show the title
							apc_clear_cache();
							// Cached for non-users as content is same for all
							if($this->loginCheck()){
								$permissions = $this->p->getUserPrivileges($_SESSION['user_id']);
								if(isset($_GET['first'])){
									if($_GET['first'] == 1){
										$this->parsedOutput = '<li class="f_list">Extra Posts</li>';
									}else{
										$this->parsedOutput = '';
									}
								}else{
									$this->parsedOutput = '';
								}
							}else{
								$permissions = false;
								if($this->parsedOutput = apc_fetch('forum-posts-'.$this->tokens[1].'-'.$offset)){
									$isUsingCache = 1;
								}else{
									// This sets the parsed output to false
									// So must overwrite this accordingly
									if(isset($_GET['first'])){
										if($_GET['first'] == 1){
											$this->parsedOutput = '<li class="f_list">Extra Posts</li>';
										}else{
											$this->parsedOutput = '';
										}
									}else{
										$this->parsedOutput = '';
									}
								}
							}
							if(!$isUsingCache){
								// Only retrieve posts if not in cache
								$this->data = $cq->forumClass->posts($this->tokens[1],array('onset'=>intval($_GET['from']),'offset'=>$offset));
								//$this->data = $cq->forumClass->posts($this->tokens[1],array('onset'=>intval(1),'offset'=>2));
								if(empty($this->data)){
									die('false');
								}
								$posts_list_ids = array();
								foreach($this->data as &$data){
									$data['views']=$strings->abbreviateNumber($data['views']);
									$data['views'] = ( $data['views'] ? $data['views'] : '0' );
									
									$data['friendlyDate']=$strings->humanTiming(strtotime($data['date']));
									$data['friendlyDate'] = ( $data['friendlyDate'] ? $data['friendlyDate'] : 'NaN' );
									
									$data['replyCount'] = ( $data['replyCount'] ? $data['replyCount'] : '0' );
									
									$data['titleLink']=$strings->urlFreindly($data['title']);
									$posts_list_ids[] = 'ajax_dynamic_'.$data['post_id'];
									$this->parsedOutput .= '
										<li id="ajax_dynamic_'.$data['post_id'].'" class="f_list';
											if($data['flagCount']==0){ $this->parsedOutput .= ' unpopular'; }
											$this->parsedOutput .= '" style="display:none" onmouseover="$(this).find(\'.f_newReplies\').show()" onmouseout="$(this).find(\'.f_newReplies\').hide()">
											<a href="http://techberry.org/user/'.$data['username'].'/">
												<div data-user="'.$data['username'].'" class="f_list_bubble miniprofile" style="background-color:'.$data['color'].'">
													<img class="f_list_icon" src="'.$data['avatar'].'" alt="'.htmlentities($data['title']).'"/>
												</div>
											</a>
											<div class="f_list_info">
												<a class="light" href="http://techberry.org/forum/p='.$data['post_id'].'/'.$data['postTitleLink'].'">
													<h2>'.htmlentities($data['title']).'</h2>
												</a>
												<p class="f_newReplies" style="display: none">
													----------- <a href="http://techberry.org/forum/p='.$data['post_id'].'/'.$data['postTitleLink'].'?goto=newreplies">new replies</a> -----------
												</p>
												<p class="f_list_description shortened more">
													'.htmlentities($data['content']).'
												</p>
											</div>
											<div class="f_list_stats">
												<div class="f_list_box help" data-ot="This count is based on approximations">
													<span class="f_list_value">
														'.$data['views'].'
													</span>
													Views
												</div>
												<div class="f_list_box">
													<span class="f_list_value">
														'.$data['replyCount'].'
													</span>
													Replies
												</div>
												<div class="f_list_box">
													<span datetime="'.$data['date'].'" class="f_list_value tiny age">
														'.$data['friendlyDate'].'
													</span>
													Age
												</div>';
												if($data['isLocked']==1){
													$this->parsedOutput .= '
													<div class="f_list_box_action">
														<a href="#" data-ot="This post is permanently locked" data-action="unlock" class="flatLocked pointsNeeded">Locked</a>
													</div>';
												}else{
													$this->parsedOutput .= '
													<div class="f_list_box_action">
														<a href="http://techberry.org/forum/flag/p='.$data['post_id'].'/'.$_SESSION['token'].'" class="';
														if(!$permissions['forum_flagPost']){
															$this->parsedOutput .= 'strikethrough flatLocked tooltipWiki pointsNeeded" data-action="forum_flagPost" data-v="forum:post:flag:lackPrivilege"';
														}else{
															$this->parsedOutput .= 'flatRed"';
														}$this->parsedOutput .= '>Flag</a>
													</div>
													<div class="f_list_box_action">
														<a href="http://techberry.org/forum/edit/p='.$data['post_id'].'/" class="flatBlue">Edit</a>
													</div>
													<div class="f_list_box_action">
														<a href="http://techberry.org/forum/lock/p='.$data['post_id'].'/'.$_SESSION['token'].'" class="';
														if(!$permissions['forum_lockPost']){
															$this->parsedOutput .= 'flatLocked strikethrough tooltipWiki pointsNeeded" data-action="forum_lockPost" data-v="forum:post:lock:lackPrivilege"';
														}else{
															$this->parsedOutput .= 'flatBlue"';
														}$this->parsedOutput .= '>Lock</a>
													</div>';
												}
												$this->parsedOutput .= '
											</div>
										</li>';
								}
								$this->parsedOutput .= '<script type="text/javascript">';
								foreach($posts_list_ids as $pli){
									$this->parsedOutput .= '$("#'.$pli.'").fadeIn("slow").removeAttr(\'id\');';
								}
								$this->parsedOutput .= '</script>';
								// The posts are not in cache and user is not logged in
								// So add to cache
								if(!$this->loginCheck()){
									apc_store('forum-posts-'.$this->tokens[1].'-'.$offset, $this->parsedOutput, 120);
								}
							}
							break;
						case 'tutorials-category':
						
							break;
						case 'news-replies':
							/*
								Load more news comments
							*/
							$this->expectedURLType = "http://techberry.org/news/";
							$this->validateReferer();
							$this->parsedOutput = '<div class="comment_wrap" style="padding-left:0px"><a href="http://techberry.org/user/admin/" data-user="admin" class="miniprofile"><div class="n_avatar_bubble_list"><img class="n_avatar_image_list" src="http://www.avatarsdb.com/avatars/acrobat.gif"></div></a><div class="comment_content_wrap"><div class="comment_content_child"><pre class="prettyprint prettyprinted" style=""><span class="pln"> echo </span><span class="str">hello world</span><span class="pun">;</span><span class="pln"> </span><span class="kwd">function</span><span class="pun">(</span><span class="pln">$this</span><span class="pun">){</span><span class="kwd">return</span><span class="pln"> $this</span><span class="pun">-&gt;</span><span class="pln">that</span><span class="pun">();}</span></pre> test content &lt;script&gt;dsfjkjsdfh&lt;/script&gt;</div></div><hr class="medium-dotted" style="text-align:right"><p style="margin-right:20px;text-align:right;color:#aaa"><a href="#" onclick="setNewsCommentParent(10); return false;" class="default">Reply</a> | <a href="#" class="default">Flag</a></p></div>';
							break;
						default:
							die(self::$errorAlert);
					}
					/*
						Print final html and cease execution
						- Javascript error alert if failed to parse tree
						- or contained invalid parameters
					*/
					$this->parsedOutput .= '<script type="text/javascript">Opentip.findElements();renderDynamicTips();</script>';
					empty($this->parsedOutput)?die(self::$errorAlert):die($this->parsedOutput);
				}
			}else{
				die(); // No get parameter
			}
		}
		public function validateLimit($offset){
			if(is_int($offset)){
				if($offset %20 != 0){
					return true;
				}else{
					return false;
				}
			}else{
				return false;
			}
		}
		public function validateReferer(){
			if(strpos($this->referer,$this->expectedURLType) !== false){
				return true;
			}else{
				if($content = apc_fetch('nyan_html')){
					die($content);
				}else{
					if($content = file_get_contents('/home/content/99/11499199/html/templates/funny/nyan.tpl')){
						apc_add('nyan_html', $content, 1200);
						die($content);
					}else{
						die(self::$directAccess);
					}
				}
			}
		}
	}
	$lM = new loadMore();
?>