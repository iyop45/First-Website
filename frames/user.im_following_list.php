<?php
	namespace techberry\frames\following_list;

	require("/home/content/99/11499199/html/class.content.php");
	require("/home/content/99/11499199/html/lib/Smarty.class.php");
	
	$c = new \techberry\content;
	
	$tpl = new \Smarty;

// Head variables
$cssLinks = array();
$javaScriptLinks = array();
$inlineScript = false;
$inlineCSS = 'body{margin:0}.wrap{padding:118px 0;font:16px Roboto,arial,sans-serif;color:#aaa;text-align:center;background-color:#e5e5e5}.load{height:32px;width:32px;margin:0 auto}.message{font:16px Roboto,arial,sans-serif;color:#aaa;text-align:center;padding-top:40px}.im_bar{height:36px;color:#fff;padding:10px;font-size:13px;background-color:#404040;box-sizing:border-box;font-family:\'Arial\',sans-serif;-moz-border-radius:0;-webkit-border-radius:4px 4px 0 0;border-radius:4px 4px 0 0}#im_close{float:right;cursor:pointer}#im_close:hover{text-decoration:underline}.im_content{overflow-y:scroll;overflow-x:hidden;height:800px}.im_toggle_bar{cursor:pointer;float:left;width:240px}.im_warning{margin:0;color:#222;font-size:12px;background-color:#E0C97D;padding:5px;font-weight:700;font-family:arial;border-bottom:1px solid #CFCFCF}.im_users{margin:0;list-style:none;color:#222;padding:0;font-size:12px;font-weight:700;font-family:arial}.im_users li{border-bottom:1px solid #CFCFCF;padding:5px}.im_users li .username{cursor:pointer;font-weight:700}.im_users li .username:hover{text-decoration:underline}#im_search{background-color:#fff;border:1px solid #CFCFCF;position:absolute;bottom:0;box-sizing:border-box;margin:0;color:#222;display:inline-block;font-family:arial;max-width:100%;padding:5px;width:100%;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;-webkit-border-radius:1px;-webkit-appearance:none}';
$tpl->assign("inlineScript",$inlineScript);
$tpl->assign("inlineCSS",$inlineCSS);

$tpl->assign("token",$c->token);
$tpl->assign("sentToken",$_GET['token']);

$tpl->display('/home/content/99/11499199/html/frames/templates/following_list.tpl');
?>