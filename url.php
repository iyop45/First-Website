<?php
	namespace techberry\page;

	require("/home/content/99/11499199/html/class.content.php");
	require("/home/content/99/11499199/html/lib/Smarty.class.php");

	use \techberry\content;
	
	$c = new \techberry\content;
	
	$tpl = new \Smarty;
	$c->tpl = &$tpl;
	$c->setTemplateVars('urlRedirect','default');

if(isset($_GET['src'])){
	if($urlInfo = $c->cq->getRefUrl($_GET['src'])){
		$urlInfo['scanUrl'] = str_replace('http://', '', $urlInfo['url']);
		$tpl->assign("urlInfo",$urlInfo);
	}else{
		header('Location: http://techberry.org/');
	}
}else{
	header('Location: http://techberry.org/');
}

$tpl->assign("homeTab",true);
// Head variables
$inlineScript = false;
$inlineCSS = false;

$tpl->assign("inlineScript",$inlineScript);
$tpl->assign("inlineCSS",$inlineCSS);

$tpl->assign("startOfHead","");

$tpl->assign("cssLinks",array());
$tpl->assign("javaScriptLinks",array());

$tpl->assign("endOfHead","");

$tpl->assign("startOfBody","");
$tpl->assign("footerText","Access tools and platforms for basic programming through to maintaining large applications and programs. We strive to make a strong and collaborative community of active and willing programmers of experience within all areas of computing. I am always looking to add new features that will open up programming to more people and make learning a new language easy.");
$tpl->assign("endOfBody","");

$tpl->assign("withTopPadding",true);
$tpl->assign("withSidePadding",true);

$tpl->display('/home/content/99/11499199/html/templates/pages/url.tpl');
?>