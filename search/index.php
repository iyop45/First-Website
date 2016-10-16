<?php
	namespace techberry\page;

	require("/home/content/99/11499199/html/class.content.php");
	require("/home/content/99/11499199/html/lib/Smarty.class.php");
	
	$c = new \techberry\content;
	
	$tpl = new \Smarty;
	$c->tpl = &$tpl;
	$c->setTemplateVars('search','default');
	
// Head variables
$cssLinks = array();
$javaScriptLinks = array();
$inlineScript = false;
$inlineCSS = false;

$tpl->assign("metaTitle","Search - TechBerry");

$tpl->assign("searchBarEnabled",false);
$tpl->assign("bannerLinkWidth","20%");

$tpl->assign("inlineScript",$inlineScript);
$tpl->assign("inlineCSS",$inlineCSS);

$tpl->assign("cssLinks",$cssLinks);
$tpl->assign("javaScriptLinks",$javaScriptLinks);

$tpl->assign("withTopPadding",true);
$tpl->assign("withSidePadding",true);

if(isset($_GET['q'])){

}else{
	$tpl->assign("noSearchTerm",true);
}

$tpl->display('/home/content/99/11499199/html/templates/pages/search.tpl');
?>