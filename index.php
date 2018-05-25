<?php
	namespace techberry\page;

	require("/home/content/99/11499199/html/class.content.php");
	require("/home/content/99/11499199/html/lib/Smarty.class.php");
	
	$c = new \techberry\content;
	
	$tpl = new \Smarty;
	$c->tpl = &$tpl;
	$c->setTemplateVars('home','default');

$tpl->assign("homeTab",true);

if($c->isLoggedIn){
	$f = $c->follow();
	$activities = $f->followersActivity();
	if(empty($activities)){
		// No followers activity, so recommend users to follow
		$tpl->assign("emptyActivity",true);	
		//$u = $c->userLookups();
		//$tpl->assign("recommendedUsers",$u->topFollowed());
	}else{
		foreach($activities as &$a){
			$a['timeSince']=$c->humanTiming(strtotime($a['date']),$compressed=0);
			switch($a['type']){
				case 'wallPost':
					$a['titleContent'] = "Posted on <a class='default' href='http://techberry.org/user/".$a['data']."/'>".$a['data']."'s</a> wall";
					break;
				case 'forumCategory':
					$a['titleContent'] = "Created a new <a class='default' href='http://techberry.org/forum/'> category</a> in the forum";
					break;
				case 'forumTopic':
					$a['titleContent'] = "Created a new <a class='default' href='http://techberry.org/forum/c=".$a['data']."/'> topic</a> in the forum";
					break;
				case 'forumPost':
					$a['titleContent'] = "Made a <a class='default' href='http://techberry.org/forum/t=".$a['data']."/'> post</a> on the forum";
					break;
				case 'forumReply':
					$a['titleContent'] = "Replied to a <a class='default' href='http://techberry.org/forum/p=".$a['data']."/'> post</a> in the forum";
					break;
				case 'newsComment':
					$a['titleContent'] = "Commented on a <a class='default' href='http://techberry.org/news/n=".$a['data']."/'> new article</a> ";
					break;
				default:
					$a['titleContent'] = "This data type is either not recognized or no longer supported";
			}
		}
		
		// if there are more activities than currently being displayed then enable show more button
		if($f->totalNumberOfFollowersActivities > count($activities)){
			$tpl->assign("showMoreButton",true);
		}
		
		$tpl->assign("activities",$activities);
	}
	$tpl->display('/home/content/99/11499199/html/templates/pages/followersActivity.tpl');
}else{
	// Head variables
	$inlineScript = false;
	$inlineCSS = false;

	$tpl->assign("CSSPage",'index');

	$tpl->assign("inlineScript",$inlineScript);
	$tpl->assign("inlineCSS",$inlineCSS);

	$tpl->assign("cssLinks",array());
	$tpl->assign("javaScriptLinks",array('//cdn.sublimevideo.net/js/f4xmvpcf.js'));

	$tpl->assign("withTopPadding",true);
	$tpl->assign("withSidePadding",true);

	$tpl->assign("captcha",\captcha::form());

	$tpl->display('/home/content/99/11499199/html/templates/pages/index.tpl');
}
?>