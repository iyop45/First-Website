<?php
	namespace techberry\page\index;

	require("/home/content/99/11499199/html/class.content.php");
	require("/home/content/99/11499199/html/lib/Smarty.class.php");
	
	$c = new \techberry\content;
	
	$tpl = new \Smarty;
	$c->tpl = &$tpl;
	$c->setTemplateVars('forumEdit','default');

// Head variables
$cssLinks = array();
$javaScriptLinks = array('https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?lang=css&skin=desert');
$inlineCSS = "input[name=reason]{margin-top:10px !important}";

$userBanner = $c->userBanner;

$tpl->assign("title","Forum - TechBerry");

// inlineScript is  dynamic in each if statement
$tpl->assign("inlineCSS",$inlineCSS);

$tpl->assign("forumTab",true);

$tpl->assign("cssLinks",$cssLinks);
$tpl->assign("javaScriptLinks",$javaScriptLinks);

$tpl->assign("withTopPadding",true);
$tpl->assign("withSidePadding",true);

// Just for this page
$c->cq->forum();
$f = $c->forum();
if(isset($_GET['reply_id']) && !isset($_GET['category_id'],$_GET['topic_id'],$_GET['post_id'])){
	// Editing an individual reply
	if(($reply = $c->cq->forumClass->replyInfo($_GET['reply_id']))){
		$tpl->assign("replyExists",1);
		$replyContent = $reply['content'];
		$replyUsername = $reply['username'];
		$replyDate = $c->humanTiming(strtotime($reply['date']));
			
			$reply_id = $reply['id'];
			$post_id = $reply['post_id'];
			$topic_id = $reply['topic_id'];
			$category_id = $reply['category_id'];
			
			$postTitle = $reply['post_title'];
			$topicTitle = $reply['topic_title'];
			$categoryTitle = $reply['category_title'];
			
		// Make titles friendly for SEO
		$postTitleLink = $c->urlFreindly($reply['post_title']);
		$topicTitleLink = $c->urlFreindly($reply['topic_title']);
		$categoryTitleLink = $c->urlFreindly($reply['category_title']);
		
		$tpl->assign("reply_id",$reply_id);
		$tpl->assign("post_id",$post_id);
		$tpl->assign("topic_id",$topic_id);
		$tpl->assign("category_id",$category_id);
		
		$tpl->assign("replyContent",$replyContent);
		$tpl->assign("replyUsername",$replyUsername);
		$tpl->assign("replyDate",$replyDate);
		
		$tpl->assign("postTitle",$postTitle);
		$tpl->assign("topicTitle",$topicTitle);
		$tpl->assign("categoryTitle",$categoryTitle);
		
		$tpl->assign("postTitleLink",$postTitleLink);
		$tpl->assign("topicTitleLink",$topicTitleLink);
		$tpl->assign("categoryTitleLink",$categoryTitleLink);
		
		$edits = $c->cq->forumClass->edits('reply',$_GET['reply_id']);
		$inlineScript = $c->renderSCEditor();
		if(isset($_GET['edit_id']) && strlen($_GET['edit_id'])===10){
			$show_edit=true;
			$inlineScript = "";
		}
		if($edits){
			foreach($edits as &$edit){
				$edit['date']=$c->humanTiming(strtotime($edit['date']));
				$edit['link_id']=substr(md5($edit['id']),0,10);
				if($show_edit){
					if($_GET['edit_id']==substr(md5($edit['id']),0,10)){
						$tpl->assign("showEdit",1);
						$tpl->assign("edit_id",$edit['id']);
						$edit['select']=1;
						// Overwrite to show the edit rather than post
						include_once '/home/content/99/11499199/html/lib/finediff-code.php';
						//-- Render differences --//
						$opcodes = \FineDiff::getDiffOpcodes($replyContent,$edit['content']);
						$difference = \FineDiff::renderDiffToHTMLFromOpcodes($replyContent,$opcodes);
						$replyContent=$difference;
					}
				}
			}
		}
		$tpl->assign("content",$replyContent);
		$tpl->assign("postUsername",$postUsername);
		$tpl->assign("postDate",$c->humanTiming(strtotime($postDate)));
		$tpl->assign("show_edit",$show_edit);
		$tpl->assign("edits",$edits);
		$tpl->assign("inlineScript",$inlineScript.'
		(function poll(){
			var repeat = true;
			$.ajax({ url: "http://techberry.org/forum/poll/edit/r='.$reply['id'].'/'.date('Y-m-d G:i:s').'/'.$c->token.'", success: function(response){
					if(response==\'true\'){
						$("#f_new_event").css({"display":"block"});
						$("#f_new_event").html("There has been a <a class=\"default\" href=\"http://techberry.org/forum/edit/r='.$reply_id.'/\">new</a> edit to this reply");
						repeat = true;
					}
			}, complete: function(data){ 
								if(repeat==true){
									setTimeout(poll,5000);
								}
							}
			});
		})();');
	}else{
		$tpl->assign("replyExists",0);
	}
	$tpl->display('/home/content/99/11499199/html/forum/templates/edit.reply.tpl');
}elseif(isset($_GET['post_id']) && !isset($_GET['category_id'],$_GET['topic_id'],$_GET['reply_id'])){
	// Editing an individual post
	if(($post=$c->cq->forumClass->postInfo($_GET['post_id']))){
		$tpl->assign("postExists",1);
		$postContent = $post['content'];
		$postUsername = $post['username'];
		$postDate = $c->humanTiming(strtotime($post['date']));
			$post_id = $post['id'];
			$topic_id = $post['topic_id'];
			$category_id = $post['category_id'];
			$postTitle = $post['title'];
			$topicTitle = $post['topic_title'];
			$categoryTitle = $post['category_title'];
		// Make titles friendly for SEO
		$postTitleLink = $c->urlFreindly($post['title']);
		$topicTitleLink = $c->urlFreindly($post['topic_title']);
		$categoryTitleLink = $c->urlFreindly($post['category_title']);
		$tpl->assign("post_id",$post_id);
		$tpl->assign("topic_id",$topic_id);
		$tpl->assign("category_id",$category_id);
		$tpl->assign("postTitle",$postTitle);
		$tpl->assign("topicTitle",$topicTitle);
		$tpl->assign("categoryTitle",$categoryTitle);
		$tpl->assign("postTitleLink",$postTitleLink);
		$tpl->assign("topicTitleLink",$topicTitleLink);
		$tpl->assign("categoryTitleLink",$categoryTitleLink);
		$edits = $c->cq->forumClass->edits('post',$_GET['post_id']);
		$inlineScript = $c->renderSCEditor();
		if(isset($_GET['edit_id']) && strlen($_GET['edit_id'])===10){
			$show_edit=true;
			$inlineScript = "";
		}
		if($edits){
			foreach($edits as &$edit){
				$edit['date']=$c->humanTiming(strtotime($edit['date']));
				$edit['link_id']=substr(md5($edit['id']),0,10);
				if($show_edit){
					if($_GET['edit_id']==substr(md5($edit['id']),0,10)){
						$tpl->assign("showEdit",1);
						$tpl->assign("edit_id",$edit['id']);
						$edit['select']=1;
						// Overwrite to show the edit rather than post
						include_once '/home/content/99/11499199/html/lib/finediff-code.php';
						$opcodes = \FineDiff::getDiffOpcodes($postTitle,$edit['title']);
						$difference = \FineDiff::renderDiffToHTMLFromOpcodes($postTitle,$opcodes);
						$postTitle=$difference;
						//-- Render differences --//
						$opcodes = \FineDiff::getDiffOpcodes($postContent,$edit['content']);
						$difference = \FineDiff::renderDiffToHTMLFromOpcodes($postContent,$opcodes);
						$postContent=$difference;
					}
				}
			}
		}
		$tpl->assign("title",$postTitle);
		$tpl->assign("content",$postContent);
		$tpl->assign("postUsername",$postUsername);
		$tpl->assign("postDate",$postDate);
		$tpl->assign("show_edit",$show_edit);
		$tpl->assign("edits",$edits);
		$tpl->assign("inlineScript",$inlineScript.'
		(function poll(){
			var repeat = true;
			$.ajax({ url: "http://techberry.org/forum/poll/edit/p='.$post_id.'/'.date('Y-m-d G:i:s').'/'.$c->token.'", success: function(response){
					if(response==\'true\'){
						$("#f_new_event").css({"display":"block"});
						$("#f_new_event").html("There has been a <a class=\"default\" href=\"http://techberry.org/forum/edit/p='.$post_id.'/\">new</a> edit to this post");
						repeat = false;
					}
			}, complete: function(data){ 
								if(repeat==true){
									setTimeout(poll,5000);
								}
							}
			});
		})();');
	}else{
		$tpl->assign("postExists",0);
	}
	$tpl->display('/home/content/99/11499199/html/forum/templates/edit.post.tpl');
}elseif(isset($_GET['topic_id']) && !isset($_GET['category_id'],$_GET['post_id'],$_GET['reply_id'])){
	// Editing an individual topic
	$topic = $c->cq->forumClass->topicInfo($_GET['topic_id']);
	$edits = $c->cq->forumClass->edits('topic',$_GET['topic_id']);
	$topicTitle = $topic['title'];
	$topicDescription = $topic['description'];
	$inlineScript = "";
	if(isset($_GET['edit_id']) && strlen($_GET['edit_id'])===10){
		$show_edit=true;
	}
	if($edits){
		foreach($edits as &$edit){
			$edit['date']=$c->humanTiming(strtotime($edit['date']));
			$edit['link_id']=substr(md5($edit['id']),0,10);
			if($show_edit){
				if($_GET['edit_id']==substr(md5($edit['id']),0,10)){
					$tpl->assign("showEdit",1);
					$tpl->assign("edit_id",$edit['id']);
					$edit['select']=1;
					// Overwrite to show the edit rather than post
					include_once '/home/content/99/11499199/html/lib/finediff-code.php';
					$opcodes = \FineDiff::getDiffOpcodes($topicTitle,$edit['title']);
					$difference = \FineDiff::renderDiffToHTMLFromOpcodes($topicTitle,$opcodes);
					$topicTitle=$difference;
					//-- Render differences --//
					$opcodes = \FineDiff::getDiffOpcodes($topicDescription,$edit['description']);
					$difference = \FineDiff::renderDiffToHTMLFromOpcodes($topicDescription,$opcodes);
					$topicDescription=$difference;
				}
			}
		}
	}
	$tpl->assign("topic_id",$topic['id']);
	$tpl->assign("originalTopicTitle",$topic['title']);
	$tpl->assign("topicTitle",$topicTitle);
	$tpl->assign("topicTitleLink",$c->urlFreindly($topicTitle));
	$tpl->assign("topicDescription",$topicDescription);
	$tpl->assign("topicUsername",$topic['username']);
	$tpl->assign("topicDate",$c->humanTiming(strtotime($topic['date'])));
	$tpl->assign("category_id",$topic['category_id']);
	$tpl->assign("categoryTitle",$topic['categoryTitle']);
	$tpl->assign("categoryTitleLink",$topic['categoryTitle']);
	$tpl->assign("show_edit",$show_edit);
	$tpl->assign("edits",$edits);
	$tpl->assign("inlineScript",$inlineScript.'
	(function poll(){
		var repeat = true;
		$.ajax({ url: "http://techberry.org/forum/poll/edit/t='.$topic['id'].'/'.date('Y-m-d G:i:s').'/'.$c->token.'", success: function(response){
			if(response==\'true\'){
				$("#f_new_event").css({"display":"block"});
				$("#f_new_event").html("There has been a <a class=\"default\" href=\"http://techberry.org/forum/edit/t='.$topic_id.'/\">new</a> edit to this topic");
				repeat = false;
			}
		}, complete: function(data){ 
							if(repeat==true){
								setTimeout(poll,5000);
							}
						}
		});
	})();');
	$tpl->display('/home/content/99/11499199/html/forum/templates/edit.topic.tpl');
}elseif(isset($_GET['category_id']) && !isset($_GET['topic_id'],$_GET['post_id'],$_GET['reply_id'])){
	// Editing an individual category
	$category = $c->cq->forumClass->categoryInfo($_GET['category_id']);
	$edits = $c->cq->forumClass->edits('category',$_GET['category_id']);

	$categoryTitle = $category['title'];
	
	$directory_categoryTitle = $category['title'];
	$directory_categoryTitleLink = $c->urlFreindly($category['title']);
	
	$categoryDescription = $category['description'];
	$inlineScript = "";
	//die(var_dump($_GET['category_id']));
	//die(var_dump($f->isLocked('category',$_GET['category_id'])));
	if($f->isLocked('category',$_GET['category_id'])){
		$tpl->assign("isLocked",1);
	}else{
		$tpl->assign("isLocked",0);
	}
	if(isset($_GET['edit_id']) && strlen($_GET['edit_id'])===10){
		$show_edit=true;
	}
	if($edits){
		foreach($edits as &$edit){
			$edit['date']=$c->humanTiming(strtotime($edit['date']));
			$edit['link_id']=substr(md5($edit['id']),0,10);
			if($show_edit){
				if($_GET['edit_id']==substr(md5($edit['id']),0,10)){
					$tpl->assign("showEdit",1);
					$tpl->assign("edit_id",$edit['id']);
					$edit['select']=1;
					// Overwrite to show the edit rather than post
					include_once '/home/content/99/11499199/html/lib/finediff-code.php';
					$opcodes = \FineDiff::getDiffOpcodes($categoryTitle,$edit['title']);
					$difference = \FineDiff::renderDiffToHTMLFromOpcodes($categoryTitle,$opcodes);
					$categoryTitle=$difference;
					//-- Render differences --//
					$opcodes = \FineDiff::getDiffOpcodes($categoryDescription,$edit['description']);
					$difference = \FineDiff::renderDiffToHTMLFromOpcodes($categoryDescription,$opcodes);
					$categoryDescription=$difference;
				}
			}
		}
	}
	
	$tpl->assign("category_id",$category['id']);
	$tpl->assign("categoryTitle",$categoryTitle);
	
	$tpl->assign("directory_categoryTitle",$directory_categoryTitle);
	$tpl->assign("directory_categoryTitleLink",$directory_categoryTitleLink);
	
	$tpl->assign("categoryDescription",$categoryDescription);
	
	$tpl->assign("categoryUsername",$category['username']);
	$tpl->assign("categoryDate",$c->humanTiming(strtotime($category['date'])));
	
	$tpl->assign("show_edit",$show_edit);
	$tpl->assign("edits",$edits);
	$tpl->assign("inlineScript",$inlineScript.'
	(function poll(){
		var repeat = true;
		$.ajax({ url: "http://techberry.org/forum/poll/edit/c='.$category['id'].'/'.date('Y-m-d G:i:s').'/'.$c->token.'", success: function(response){
			if(response==\'true\'){
				$("#f_new_event").css({"display":"block"});
				$("#f_new_event").html("There has been a <a class=\"default\" href=\"http://techberry.org/forum/edit/c='.$category_id.'/\">new</a> edit to this category");
				repeat = false;
			}
		}, complete: function(data){ 
							if(repeat==true){
								setTimeout(poll,5000);
							}
						}
		});
	})();');
	$tpl->display('/home/content/99/11499199/html/forum/templates/edit.category.tpl');
}

?>