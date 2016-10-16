<?php
	namespace techberry\page;

	require("/home/content/99/11499199/html/class.content.php");
	require("/home/content/99/11499199/html/lib/Smarty.class.php");
	
	$c = new \techberry\content;
	
	$tpl = new \Smarty;
	$c->tpl = &$tpl;
	$c->setTemplateVars('forumCreate','default');

// Head variables
$cssLinks = array();
$javaScriptLinks = array('https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?lang=css&skin=desert');
$inlineCSS = false;

$tpl->assign("title","Forum - TechBerry");

$tpl->assign("forumTab",true);

//$tpl->assign("inlineScript",$inlineScript); Is  dynamic in each if statement
$tpl->assign("inlineCSS",$inlineCSS);

$tpl->assign("cssLinks",$cssLinks);
$tpl->assign("javaScriptLinks",$javaScriptLinks);

$tpl->assign("withTopPadding",true);
$tpl->assign("withSidePadding",true);

// Just for this page
$c->cq->forum();

if(isset($_GET['post_id']) && !isset($_GET['newCategory'],$_GET['category_id'],$_GET['topic_id'])){
	// Creating a reply
	$inlineScript = $c->renderSCEditor();
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
		$tpl->assign("title",$postTitle); // This is for meta title too!
		$tpl->assign("content",$postContent);
		$tpl->assign("postUsername",$postUsername);
		$tpl->assign("postDate",$c->humanTiming(strtotime($postDate)));
	}else{
		$tpl->assign("postExists",0);
	}
	$tpl->assign("inlineScript",$c->renderSCEditor());
	$tpl->display('/home/content/99/11499199/html/forum/templates/create.reply.tpl');
}elseif(isset($_GET['topic_id']) && !isset($_GET['newCategory'],$_GET['category_id'],$_GET['post_id'])){
	// Creating a post
	if(($topic = $c->cq->forumClass->topicInfo($_GET['topic_id']))){
		$tpl->assign("topicExists",1);
		$topicTitle = $topic['title'];
		$topicDescription = $topic['description'];
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
	}else{
		$tpl->assign("topicExists",0);
	}
	$tpl->assign("inlineScript",$c->renderSCEditor());
	$tpl->display('/home/content/99/11499199/html/forum/templates/create.post.tpl');
}elseif(isset($_GET['category_id']) && !isset($_GET['newCategory'],$_GET['topic_id'],$_GET['post_id'])){
	// Creating a topic
	if(($category = $c->cq->forumClass->categoryInfo($_GET['category_id']))){
		$tpl->assign("categoryExists",1);
		$categoryTitle = $category['title'];
		$directory_categoryTitle = $category['title'];
		$directory_categoryTitleLink = $c->urlFreindly($category['title']);
		$categoryDescription = $category['description'];
		$tpl->assign("category_id",$category['id']);
		$tpl->assign("categoryTitle",$categoryTitle);
		$tpl->assign("directory_categoryTitle",$directory_categoryTitle);
		$tpl->assign("directory_categoryTitleLink",$directory_categoryTitleLink);
		$tpl->assign("categoryDescription",$categoryDescription);
		$tpl->assign("categoryUsername",$category['username']);
		$tpl->assign("categoryDate",$c->humanTiming(strtotime($category['date'])));
	}else{
		$tpl->assign("categoryExists",0);
	}
	$tpl->assign("inlineScript",false);
	$tpl->display('/home/content/99/11499199/html/forum/templates/create.topic.tpl');
}elseif(isset($_GET['newCategory']) && !isset($_GET['category_id'],$_GET['topic_id'],$_GET['post_id'])){
	// Creating a category
	$tpl->assign("inlineScript",false);
	$tpl->display('/home/content/99/11499199/html/forum/templates/create.category.tpl');
}

?>