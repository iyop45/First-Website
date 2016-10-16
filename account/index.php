<?php
	namespace techberry\page;

	require("/home/content/99/11499199/html/class.content.php");
	require("/home/content/99/11499199/html/lib/Smarty.class.php");
	
	$c = new \techberry\content;
	
	$tpl = new \Smarty;
	$c->tpl = &$tpl;
	$c->setTemplateVars('account','default');

$tpl->assign("homeTab",true);
// Head variables
$inlineScript = false;
$inlineCSS = '#g_f_w{margin: 0 !important;}';
if(!$c->isLoggedIn){
	// Must be logged in
	$c->notify->source()->type('error')->msg("You must be logged in ")->process();
	$continue = base64_encode('http://techberry.org/account/');
	header('Location: http://techberry.org/login.php?continue='.$continue);
}
$tpl->assign("inlineScript",$inlineScript);
$tpl->assign("inlineCSS",$inlineCSS);

$tpl->assign("endOfHead","");

$tpl->assign("startOfBody","");
$tpl->assign("footerText","Access tools and platforms for basic programming through to maintaining large applications and programs. We strive to make a strong and collaborative community of active and willing programmers of experience within all areas of computing. I am always looking to add new features that will open up programming to more people and make learning a new language easy.");
$tpl->assign("endOfBody","");

$tpl->assign("withTopPadding",false);
$tpl->assign("withSidePadding",false);
$tpl->assign("noAnnouncements",true);

// Just for this page
if(isset($_GET['view'])){
	switch($_GET['view']){
		case 'edit':
			// Editing account info
			$l = $c->userLookups();
			$tpl->assign("userInfo",$l->userInfo($_SESSION['user_id']));
			$tpl->assign("accountAccountTab",true);
			$tpl->display('/home/content/99/11499199/html/account/templates/account.edit.tpl');
			break;
		case 'password':
			// Changing password
			$tpl->assign("accountAccountTab",true);
			$tpl->display('/home/content/99/11499199/html/account/templates/account.password.tpl');
			break;
		case 'notifications':
			$tpl->assign("accountNotificationsTab",true);
			$tpl->display('/home/content/99/11499199/html/account/templates/notifications.tpl');
			break;
		case 'general':
			$f = $c->follow();
			$tpl->assign("accountGeneralTab",true);
			$followers = $f->getFollowers($_SESSION['user_id']);
			$following = $f->getFollowing($_SESSION['user_id']);
			$tpl->assign("followers",$followers);
			$tpl->assign("following",$following);
			$tpl->display('/home/content/99/11499199/html/account/templates/general.tpl');
			break;
		case 'achievements':
			$l = $c->userLookups();
			$tpl->assign("accountAchievementsTab",true);
			$badges = $l->getUserBadges($_SESSION['user_id'],20);
			foreach($badges as &$badge){
				$badge['urlName'] = urlencode($badge['name']);
			}
			if(($privileges = $c->p->getUserPrivileges($_SESSION['user_id'],$isCompressed=0))){
				$tpl->assign("privileges",$privileges);
			}else{
				$c->notify->source()->type('error')->msg('Unable to retrieve your privileges')->process();
			}
			$tpl->assign("badges",$badges);
			$tpl->display('/home/content/99/11499199/html/account/templates/achievements.tpl');
			break;
		case 'settings':
			$ul = $c->userLookups();
			$settings = $ul->userSettings($_SESSION['user_id']);
			$tpl->assign("settings",$settings);
			$tpl->assign("accountSettingsTab",true);
			$tpl->display('/home/content/99/11499199/html/account/templates/settings.tpl');
			break;
		default:
			$tpl->assign("accountAccountTab",true);
			$tpl->display('/home/content/99/11499199/html/account/templates/account.tpl');
	}
}else{
	$tpl->assign("accountAccountTab",true);
	$tpl->display('/home/content/99/11499199/html/account/templates/account.tpl');
}
?>