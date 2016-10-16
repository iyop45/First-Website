<?php
	namespace techberry\frames\im;

	require("/home/content/99/11499199/html/class.content.php");
	require("/home/content/99/11499199/html/lib/Smarty.class.php");
	
	$c = new \techberry\content;
	
	$tpl = new \Smarty;

// Head variables
$cssLinks = array();
$javaScriptLinks = array();
$inlineScript = false;
// There is an escaped quote in this css
$inlineCSS = 'body {margin: 0;}.wrap {padding: 118px 0;font: 16px Roboto,arial,sans-serif;color: #aaa;text-align: center;background-color: #e5e5e5;}.load {height: 32px;width: 32px;margin: 0 auto;}.message {font: 16px Roboto,arial,sans-serif;color: #aaa;text-align: center;padding-top: 40px;}.im_bar{height: 36px;color: #fff;padding:10px;font-size: 13px;background-color: #404040;box-sizing: border-box;font-family: \'Arial\',sans-serif;-moz-border-radius: 0px;-webkit-border-radius: 4px 4px 0px 0px;border-radius: 4px 4px 0px 0px;}#im_close{float:left;cursor: pointer;margin-left:10px;}#im_close:hover{text-decoration:underline;}#im_following{float:left;cursor: pointer;}#im_following:hover{text-decoration:underline;}#im_actions{float:right;}.im_content{overflow-y:scroll;overflow-x:hidden;height:800px;}.im_toggle_bar{cursor: pointer;float:left;width:180px;}#im_comment{background-color: #fff;border: 1px solid #CFCFCF;min-height: 38px;max-height: 38px;position:absolute;bottom:0px;box-sizing: border-box;margin:0;color: #222;display: inline-block;font-family: arial;max-width: 100%;font-size: 13px;padding: 5px 2px 2px 5px;vertical-align: top;width: 100%;-moz-box-sizing: border-box;-webkit-box-sizing: border-box;-webkit-border-radius: 1px;-webkit-appearance: none;}.im_warning{margin: 0;color: #222;font-size: 12px;background-color: #E0C97D;padding: 5px;font-weight: bold;font-family: arial;border-bottom: 1px solid #CFCFCF;}.im_messages{padding: 5px;margin: 0px;height:215px;overflow-y: scroll;}.im_messages li{list-style: none;overflow:hidden;}.im_messages li p{margin: 5px;display: inline-block;font-weight: bold;font-size: 12px;background: #D6D6D6;border: 1px solid #ccc;padding: 5px;border-radius: 4px;max-width: 212px;overflow: hidden;text-overflow: ellipsis;}.im_messages li img{-moz-border-radius: 2px;-webkit-border-radius: 2px;border-radius: 2px;margin: 5px;background-image: linear-gradient(to bottom,#fcfcfc 0,#f8f8f8 100%);background-image: -webkit-gradient(linear,left top,left bottom,color-stop(0,#fcfcfc),color-stop(100%,#f8f8f8));background-image: -webkit-linear-gradient(top,#fcfcfc 0,#f8f8f8 100%);border: 1px solid #d3d3d3;}.im_garbage{text-align: center;font-size: 14px;color: #444;font-family: Trebuchet MS,Liberation Sans,DejaVu Sans,sans-serif;margin-top: 5px;}';
$tpl->assign("inlineScript",$inlineScript);
$tpl->assign("inlineCSS",$inlineCSS);

$tpl->assign("token",$c->token);
//$tpl->assign("content","Instant messenger is currently disabled");
$tpl->assign("sentToken",$_GET['token']);
$tpl->assign("sentUsername",$_GET['username_to']);

$tpl->display('/home/content/99/11499199/html/frames/templates/instant_messenger.tpl');
?>