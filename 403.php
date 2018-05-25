<?php
namespace techberry\page;

require("/home/content/99/11499199/html/class.content.php");
require("/home/content/99/11499199/html/lib/Smarty.class.php");

$c = new \techberry\content;

$tpl = new \Smarty;
$c->tpl =& $tpl;
$c->setTemplateVars('403', 'default');

$tpl->assign("homeTab", true);
// Head variables
$inlineScript = false;
$inlineCSS    = false;

$tpl->assign("inlineScript", $inlineScript);
$tpl->assign("inlineCSS", $inlineCSS);

$tpl->assign("cssLinks", array());
$tpl->assign("javaScriptLinks", array());

$tpl->assign("withTopPadding", true);
$tpl->assign("withSidePadding", true);

$tpl->display('/home/content/99/11499199/html/templates/pages/403.tpl');
?>