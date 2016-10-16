<?php
	namespace techberry\pages;

	require("/home/content/99/11499199/html/class.content.php");
	require("/home/content/99/11499199/html/lib/Smarty.class.php");
	
	$c = new \techberry\content;
	
	$tpl = new \Smarty;
	$c->tpl = &$tpl;
	$c->setTemplateVars('ranking','default');
	

// Head variables
$cssLinks = array();
$javaScriptLinks = array();
$inlineScript = false;
$inlineCSS = false;

$tpl->assign("usersTab",true);

$tpl->assign("inlineScript",$inlineScript);
$tpl->assign("inlineCSS",$inlineCSS);

$tpl->assign("cssLinks",$cssLinks);
$tpl->assign("javaScriptLinks",$javaScriptLinks);

$tpl->assign("withTopPadding",true);
$tpl->assign("withSidePadding",false);

switch($_GET['filter']){
	case 'bots':
		$filter = 'bots';
		$activeTab = 'bots';
		break;
	case 'reputation':
		$filter = 'reputation';
		$activeTab = 'reputation';
		break;
	case 'topFollowed':
		$filter = 'topFollowed';
		$activeTab = 'topFollowed';
		break;
	case 'online':
		$filter = 'online';
		$activeTab = 'online';
		break;
	case 'random':
		$filter = 'random';
		$activeTab = 'random';
		break;
	default:
		$filter = 'reputation';
		$activeTab = 'reputation';
}
$tpl->assign("userList",$c->cq->userRanking($filter));
$tpl->assign("activeTab",$activeTab);

$tpl->display('/home/content/99/11499199/html/templates/pages/rankings.tpl');
?>