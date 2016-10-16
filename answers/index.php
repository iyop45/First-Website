<?php
	namespace techberry\page\index;

	require("/home/content/99/11499199/html/class.content.php");
	require("/home/content/99/11499199/html/lib/Smarty.class.php");
	
	$c = new \techberry\content;
	
	$tpl = new \Smarty;
	$c->tpl = &$tpl;
	$c->setTemplateVars('answers','default');
	

// Head variables
$cssLinks = array();
$javaScriptLinks = array('https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?lang=css&skin=desert');
$inlineScript = false;
$inlineCSS = false;

$tpl->assign("platformsTab",true);

$tpl->assign("inlineScript",$inlineScript);
$tpl->assign("inlineCSS",$inlineCSS);

$tpl->assign("cssLinks",$cssLinks);
$tpl->assign("javaScriptLinks",$javaScriptLinks);

$tpl->assign("withTopPadding",true);
$tpl->assign("withSidePadding",true);

// Just for this page
$c->cq->questions();
require_once '/home/content/99/11499199/html/lib/parser/Parser.php';
$parser = new \JBBCode\Parser();
$parser->addCodeDefinitionSet(new \JBBCode\QuestionsDefinitionSet());

if(isset($_GET['viewQuestion'])){
	// View answers of a question
	$answers = $c->cq->questionsClass->answers($_GET['viewQuestion']);
	$i=1;
	$comments = array();
	foreach($answers as &$answer){
		if($i==1){
			// Run only on first iteration
			$question_id=$answer['id']; // This will be the question
			$questionTitle=$answer['title'];
			$questionTitleLink=$c->urlFreindly($answer['title']);
		}
		$answer['views']=$c->abbreviateNumber($answer['views']);
		$answer['date']=$c->humanTiming(strtotime($answer['date']));
		$comments[$i] = $c->cq->questionsClass->comments($answer['id'],($i==1?1:0));
		$i++;
	}
	$tpl->assign("question_id",$question_id);
	$tpl->assign("questionTitle",$questionTitle);
	$tpl->assign("questionTitleLink",$questionTitleLink);
	$tpl->assign("comments",$comments);
	$tpl->assign("answers",$answers);
	$tpl->display('/home/content/99/11499199/html/answers/templates/view.answers.tpl');
}else{
	// View list of questions
	$questions = $c->cq->questionsClass->questions();
	foreach($questions as &$question){
		$question['views']=$c->abbreviateNumber($question['views']);
		$question['date']=$c->humanTiming(strtotime($question['date']));
		$question['titleLink']=$c->urlFreindly($question['title']);
	}
	$tpl->assign("questions",$questions);
	$tpl->display('/home/content/99/11499199/html/answers/templates/view.questions.tpl');
}