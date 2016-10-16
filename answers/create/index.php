<?php
	namespace techberry\page;

	require("/home/content/99/11499199/html/class.content.php");
	require("/home/content/99/11499199/html/lib/Smarty.class.php");
	
	$c = new \techberry\content;
	
	$tpl = new \Smarty;
	$c->tpl = &$tpl;
	$c->setTemplateVars('questionsCreate','default');

// Head variables
$cssLinks = array();
$javaScriptLinks = array('https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?lang=css&skin=desert');
$inlineCSS = false;

$tpl->assign("title","Questions - TechBerry");

$tpl->assign("platformsTab",true);

//$tpl->assign("inlineScript",$inlineScript); Is  dynamic in each if statement
$tpl->assign("inlineCSS",$inlineCSS);

$tpl->assign("cssLinks",$cssLinks);
$tpl->assign("javaScriptLinks",$javaScriptLinks);

$tpl->assign("withTopPadding",true);
$tpl->assign("withSidePadding",true);

// Just for this page
$c->cq->questions();

if(isset($_GET['question_id']) && !isset($_GET['newQuestion'])){
	// Creating a reply
	$inlineScript = $c->renderSCEditor();
	if(($question=$c->cq->questionsClass->questionInfo($_GET['question_id']))){
		$tpl->assign("questionExists",1);
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
		$tpl->assign("questionExists",0);
	}
	$tpl->assign("inlineScript",$c->renderSCEditor());
	$tpl->display('/home/content/99/11499199/html/answers/templates/create.answer.tpl');
}elseif(isset($_GET['newQuestion']) && !isset($_GET['question_id'])){
	// Creating a new question
	$tpl->assign("inlineScript",$c->renderSCEditor());
	$tpl->display('/home/content/99/11499199/html/answers/templates/create.question.tpl');
}

?>