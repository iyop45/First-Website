<?php
	namespace techberry\page;

	require("/home/content/99/11499199/html/class.content.php");
	require("/home/content/99/11499199/html/lib/Smarty.class.php");
	
	$c = new \techberry\content;
	
	$tpl = new \Smarty;
	$c->tpl = &$tpl;
	$c->setTemplateVars('faq','default');


// Head variables
$cssLinks = array();
$javaScriptLinks = array();
$inlineScript = 
<<<'EOT'
	$(document).ready(function(){$("a.ref").anchorAnimate()}),jQuery.fn.anchorAnimate=function(a){return a=jQuery.extend({speed:1100},a),this.each(function(){var b=this;$(b).click(function(c){c.preventDefault(),window.location.href;var e=$(b).attr("href"),f=$(e).offset().top-$("#g_h").height()-50;return $("html:not(:animated),body:not(:animated)").animate({scrollTop:f},a.speed,function(){window.location.hash=e}),!1})})};
EOT;
$inlineCSS = false;

$tpl->assign("title","FAQ - TechBerry");

$tpl->assign("supportTab",true);

$tpl->assign("inlineScript",$inlineScript);
$tpl->assign("inlineCSS",$inlineCSS);

$tpl->assign("cssLinks",$cssLinks);
$tpl->assign("javaScriptLinks",$javaScriptLinks);

$tpl->assign("withTopPadding",true);
$tpl->assign("withSidePadding",true);

// Just for this page
$c->getFAQ();
$tpl->assign("faqContent",$c->faqContent);

$tpl->display('/home/content/99/11499199/html/templates/pages/support.tpl');
?>