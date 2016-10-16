<?php
	namespace techberry\page;

	require("/home/content/99/11499199/html/class.content.php");
	require("/home/content/99/11499199/html/lib/Smarty.class.php");
	
	$c = new \techberry\content;
	
	$tpl = new \Smarty;
	$c->tpl = &$tpl;
	$c->setTemplateVars('tutorials','default');

// Head variables
$cssLinks = array();
$javaScriptLinks = array('https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?lang=css&skin=desert');
$inlineScript = false;
$inlineCSS = false;

$tpl->assign("title","Tutorials - TechBerry");

$tpl->assign("platformsTab",true);

$tpl->assign("inlineScript",$inlineScript);
$tpl->assign("inlineCSS",$inlineCSS);

$tpl->assign("cssLinks",$cssLinks);
$tpl->assign("javaScriptLinks",$javaScriptLinks);

$tpl->assign("withTopPadding",true);
$tpl->assign("withSidePadding",true);

// Just for this page

// Instantiate class
$c->cq->tutorial();
require_once '/home/content/99/11499199/html/lib/parser/Parser.php';
$parser = new \JBBCode\Parser();
$parser->addCodeDefinitionSet(new \JBBCode\TutorialDefinitionSet());
if(isset($_GET['tutorial_id'])){
	// Returns an array for referencing
	if(($tut=$c->cq->tutorialClass->tutorial($_GET['tutorial_id']))){
		// Make titles friendly for SEO
		if($c->cq->tutorialClass->isTutorialPending($_GET['tutorial_id'])){
			$isPending = 1;
			$tut = $c->cq->tutorialClass->tutorialInfo($_GET['tutorial_id']);
			$tut['titleLink']=$c->urlFreindly($tut['title']);
			$tut['groupTitleLink']=$c->urlFreindly($tut['groupTitle']);
			$tpl->assign("tut",$tut);
		}else{
			$tut['previousTitleLink'] = $c->urlFreindly($tut['previousTitle']);
			$tut['nextTitleLink'] = $c->urlFreindly($tut['nextTitle']);
			$tut['titleLink'] = $c->urlFreindly($tut['title']);
				$groupTitleLink= $c->urlFreindly($tut['groupTitle']);
			$tpl->assign("groupTitle",$tut['groupTitle']);
			$tpl->assign("groupTitleLink",$groupTitleLink);
			$tpl->assign("group_id",$tut['group_id']);
			$tpl->assign("tut",$tut);
			// Easier parsing bbcode here than in the model
			// But this may be changed at a later date
			$parser->parse(htmlspecialchars($tut['content'], ENT_QUOTES));
			//$parser->parse($tut['content']);
			$content = $c->singleTags($parser->getAsHtml());
			
			$tpl->assign("content",$content);
		}
		$tpl->assign("isPending",$isPending);
		$tpl->display('/home/content/99/11499199/html/tutorials/layout.tpl');
	}else{
		$c->notify->source()->type('error')->msg('Unable to find page')->process();
		$groups = $c->cq->tutGroups();
		foreach($groups as &$group){
			$group['views']=$c->abbreviateNumber($group['views']);
			$group['date']=$c->humanTiming(strtotime($group['date']));
		}
		$tpl->assign("pendingTitle",1);
		$tpl->assign("groups",$groups);
		$tpl->display('/home/content/99/11499199/html/tutorials/templates/view.groups.tpl');
	}
}elseif(isset($_GET['group_id'])){
	// Just viewing tutorials within group
	if($c->cq->tutorialClass->isGroupPending($_GET['group_id'])){
		$isPending = 1;
		$group =$c->cq->tutorialClass->groupInfo($_GET['group_id']);
		$group['titleLink']=$c->urlFreindly($group['title']);
		$tpl->assign("group",$group);
	}else{
		$chapters = $c->cq->tutorialClass->chapters($_GET['group_id']);
		$i=1;
		foreach($chapters as &$chapter){
			if($i===1){
				$groupTitle = $chapter['groupTitle'];
				$groupTitleLink= $c->urlFreindly($chapter['groupTitle']);
				$group_id= $chapter['group_id'];
				$groupPending = $chapter['groupPending'];
			}
			$chapter['views']=$c->abbreviateNumber($chapter['views']);
			$chapter['date']=$c->humanTiming(strtotime($chapter['date']));
			$chapter['titleLink']=$c->urlFreindly($chapter['title']);
			if($chapter['pending']===1){
				$chapter['commits']=$c->cq->tutorialClass->chapterCommits($chapter['chapter_id']);
				$chapter['meterWidth']=(($chapter['commits'])/10)*100;
			}
			$i++;
		}
		$tpl->assign("pendingTitle",1);
		$tpl->assign("groupTitle",$groupTitle);
		$tpl->assign("groupTitleLink",$groupTitleLink);
		$tpl->assign("group_id",$group_id);
		$tpl->assign("groupPending",$groupPending);
		$tpl->assign("chapters",$chapters);
	}
	$tpl->assign("isPending",$isPending);
	$tpl->display('/home/content/99/11499199/html/tutorials/templates/view.chapters.tpl');
}else{
	$groups = $c->cq->tutorialClass->groups();
	foreach($groups as &$group){
		$group['views']=$c->abbreviateNumber($group['views']);
		$group['date']=$c->humanTiming(strtotime($group['date']));
		$group['titleLink'] = $c->urlFreindly($group['title']);
		if($group['pending']===1){
			$group['commits']=$c->cq->tutorialClass->groupCommits($group['id']);
			$group['meterWidth']=(($group['commits'])/10)*100;
		}
	}
	$tpl->assign("pendingTitle",1);
	$tpl->assign("groups",$groups);
	$tpl->assign("groupTitleLink",$groupTitleLink);
	$tpl->display('/home/content/99/11499199/html/tutorials/templates/view.groups.tpl');
}
?>