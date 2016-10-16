<?php
	namespace techberry\frames;

	require("/home/content/99/11499199/html/class.content.php");
	require("/home/content/99/11499199/html/lib/Smarty.class.php");
	
	$c = new \techberry\content;
	
	$tpl = new \Smarty;

// Head variables
$cssLinks = array();
$javaScriptLinks = array();
$inlineScript = false;
$inlineCSS = false;
$tpl->assign("inlineScript",$inlineScript);
$tpl->assign("inlineCSS",$inlineCSS);

$tpl->assign("isLoggedIn",$c->isLoggedIn);
$tpl->assign("token",$c->token);
$tpl->assign("sentToken",$_GET['token']);
if(isset($_GET['privilege'])){
	if($c->privilegeExists($_GET['privilege'])){
		if(($groups = $c->groupsWithPrivilege($_GET['privilege']))){
			$tpl->assign("privilege",htmlentities($_GET['privilege']));
			$tpl->assign("groups",$groups));
		}else{
			$errorMessage ='Unable to retrieve information';
			$tpl->assign("errorMessage",$errorMessage);
		}
	}else{
		$errorMessage ='Unable to retrieve information';
		$tpl->assign("errorMessage",$errorMessage);
	}
}else{
	$errorMessage ='Unable to retrieve information';
	$tpl->assign("errorMessage",$errorMessage);
}
$tpl->display('/home/content/99/11499199/html/frames/templates/groups.tpl');
?>