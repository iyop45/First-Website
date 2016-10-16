<?php
	namespace techberry\frames\notifications;

	require("/home/content/99/11499199/html/class.content.php");
	require("/home/content/99/11499199/html/lib/Smarty.class.php");
	
	$c = new \techberry\content;
	
	$tpl = new \Smarty;

// Head variables
$cssLinks = array();
$javaScriptLinks = array();
$inlineScript = false;
if(isset($_GET['isEmbed'])){
	/*
		This is for in the account tab
		so background matches body background color
	*/
	$tpl->assign("withTitle",0);
	$inlineCSS = 'body{margin:0}.wrap{padding:118px 0;font:16px Roboto,arial,sans-serif;color:#aaa;text-align:center}.load{height:32px;width:32px;margin:0 auto}.message{font:16px Roboto,arial,sans-serif;color:#aaa;text-align:center;padding-top:40px}#notification_list{box-sizing:border-box;-moz-box-sizing:border-box;padding:10px 7px;margin:1px 0}#notification_list li{border:1px solid #CECECE;padding:5px;margin-bottom:5px;color:#4CA3D7;font-weight:700;font-size:13px}#notification_list li:hover .notification_remove{display:block}#notification_list li .notification_item a{color:#4CA3D7}#notification_list li .notification_item a:hover{color:#2445ae}.notification_header{font-weight:700;font-size:12px;color:#3d3d3d;overflow:hidden}.notification_header .notification_date{float:left}.notification_header .notification_remove{float:right;display:none}.notification_header .notification_remove a{font-weight:700;font-size:12px;color:#3d3d3d;text-decoration:none}.notification_header .notification_remove a:hover{text-decoration:underline}.notification_content{font-weight:700;font-size:12px;color:#3d3d3d;overflow:hidden}.notification_content a{color:#4CA3D7}.notification_content a:hover{color:#2445ae}.notification_message{float:left}.notification_points{float:right}.notification_plus{color:green}.notification_minus{color:red}.notification_main_link:hover{text-decoration:underline}.notification_title{padding:10px 0;text-align:center}.notification_remove_all{opacity:0.6;margin-right:10px;border:none;cursor:pointer;font-size:20px;color:#404040;margin-top:15px;position:absolute;top:0;right:0;background-color:#e5e5e5}.notification_remove_all:hover{opacity:1}';
}else{
	$tpl->assign("withTitle",1);
	$inlineCSS = 'body{margin:0}.wrap{padding:118px 0;font:16px Roboto,arial,sans-serif;color:#aaa;text-align:center;background-color:#e5e5e5}.load{height:32px;width:32px;margin:0 auto}.message{font:16px Roboto,arial,sans-serif;color:#aaa;text-align:center;padding-top:40px}#notification_list{box-sizing:border-box;-moz-box-sizing:border-box;padding:10px 7px;margin:1px 0}#notification_list li{border:1px solid #CECECE;padding:5px;margin-bottom:5px;color:#4CA3D7;font-weight:700;font-size:13px}#notification_list li:hover .notification_remove{display:block}#notification_list li .notification_item a{color:#4CA3D7}#notification_list li .notification_item a:hover{color:#2445ae}.notification_header{font-weight:700;font-size:12px;color:#3d3d3d;overflow:hidden}.notification_header .notification_date{float:left}.notification_header .notification_remove{float:right;display:none}.notification_header .notification_remove a{font-weight:700;font-size:12px;color:#3d3d3d;text-decoration:none}.notification_header .notification_remove a:hover{text-decoration:underline}.notification_content{font-weight:700;font-size:12px;color:#3d3d3d;overflow:hidden}.notification_content a{color:#4CA3D7}.notification_content a:hover{color:#2445ae}.notification_message{float:left}.notification_points{float:right}.notification_plus{color:green}.notification_minus{color:red}.notification_main_link:hover{text-decoration:underline}.notification_title{padding:10px 0;text-align:center}.notification_remove_all{opacity:0.6;margin-right:10px;border:none;cursor:pointer;font-size:20px;color:#404040;margin-top:15px;position:absolute;top:0;right:0;background-color:#e5e5e5}.notification_remove_all:hover{opacity:1}';
}
$tpl->assign("inlineScript",$inlineScript);
$tpl->assign("inlineCSS",$inlineCSS);

$tpl->assign("token",$c->token);
$tpl->assign("sentToken",$_GET['token']);
if(isset($_GET['callback'])){
	$content = '<ul id="notification_list">';
	switch($_GET['callback']){
		case 's':
			$content .= '<div class="notification_content">Successfully removed notification';
			break;
		case 'e':
			$content .= '<div class="notification_content">Unable to process your request';
			break;
		case 'wu':
			$content .= '<div class="notification_content">Unable to remove notification';
			break;
		default:
			$content .= '<div class="notification_content">Something went wrong';
	}
	$content .= '<a style="float:right" href="http://techberry.org/frames/user.notifications.php?token='.$c->token.'"> go back </a></div></ul>';
	$tpl->assign("content",$content);
}

$tpl->display('/home/content/99/11499199/html/frames/templates/notifications.tpl');
?>