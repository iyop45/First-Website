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
$inlineCSS = false;
$tpl->assign("inlineScript",$inlineScript);
$tpl->assign("inlineCSS",$inlineCSS);

$tpl->assign("isLoggedIn",$c->isLoggedIn);
$tpl->assign("token",$c->token);
$tpl->assign("sentToken",$_GET['token']);
if(isset($_GET['username'])){
	$u = $c->userLookups();
	if($u->userExists($_GET['username'])){
		if(($userInfo = $u->userInfo((string)$_GET['username']))){
			$tpl->assign("userPage_baseEncode",base64_encode("http://techberry.org/user/".$userInfo['username']."/"));
			if(isset($_GET['u'])){
				$tpl->assign("hashedURL",md5($_GET['u']));
			}else{
				// MD5 of http://techberry.org
				$tpl->assign("hashedURL","181bd386ec3e44adeb7ff31123c5d2e3");
			}
			if(isset($_SESSION['username'])){
				if($_SESSION['username']==$_GET['username']){
					$tpl->assign("isCurrentUser",1);
				}else{
					$tpl->assign("followStringID", $c->randomString(10));
				}
				
				$f = $c->follow();
				if ($f->isFollowing($_GET['username']))
				{
					$tpl->assign("isFollowing", 1);
				}
				else
				{
					$tpl->assign("isFollowing", 0);
				}	
			
			}else{
				$tpl->assign("isFollowing", 0);
				$tpl->assign("followStringID", $c->randomString(10));
			}
			$rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
			$tpl->assign("randomColor",'#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)]);
			$userInfo['reputation'] = $c->abbreviateNumber($userInfo['reputation']);
			$tpl->assign("userInfo",$userInfo);
			$tpl->assign("badges",$u->getUserBadges($userInfo['id']));
			$tpl->assign("badgeCount",$u->getUserBadgeCounts($userInfo['id']));
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
$tpl->display('/home/content/99/11499199/html/frames/templates/profile.tpl');
?>