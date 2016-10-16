<?php
namespace techberry\page;

require("/home/content/99/11499199/html/class.content.php");
require("/home/content/99/11499199/html/lib/Smarty.class.php");

$c = new \techberry\content;

$tpl = new \Smarty;
$c->tpl =& $tpl;
$c->setTemplateVars('user', 'default');

// Head variables
$cssLinks        = array();
$javaScriptLinks = array();
$inlineScript    = false;
$inlineCSS       = '
a.light{
	color: #fff !important;
}
a.light:hover{
	text-decoration:underline;
}
';
$tpl->assign("title", "Account - TechBerry");

$tpl->assign("homeTab", true);

$tpl->assign("inlineScript", $inlineScript);
$tpl->assign("inlineCSS", $inlineCSS);

$tpl->assign("cssLinks", $cssLinks);
$tpl->assign("javaScriptLinks", $javaScriptLinks);

$tpl->assign("withTopPadding", false);
$tpl->assign("withSidePadding", false);

$tpl->assign("followStringID", $c->randomString(10));
if (isset($_SESSION['failedWallPostContent']))
{
    $tpl->assign("failedWallPostContent", $_SESSION['failedWallPostContent']);
}
// Just for this page
if (isset($_GET['username']))
{
	$ul = $c->userLookups();
	$f = $c->follow();
    if (($ul->userExists($_GET['username']) === 1))
    {
        $rand = array(
            '0',
            '1',
            '2',
            '3',
            '4',
            '5',
            '6',
            '7',
            '8',
            '9',
            'a',
            'b',
            'c',
            'd',
            'e',
            'f'
        );
        $tpl->assign("randomColor", '#' . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)] . $rand[rand(0, 15)]);
        $userInfo   = $ul->userInfo((string) $_GET['username']);
        $badges     = $ul->getUserBadges($userInfo['id']);
        $badgeCount = $ul->getUserBadgeCounts($userInfo['id']);
        $followers  = $f->getFollowers($userInfo['id']);
        $following  = $f->getFollowing($userInfo['id']);
        if ($c->isLoggedIn)
        {
			if ($f->isFollowing($_GET['username']))
			{
				$tpl->assign("isFollowing", 1);
			}
			else
			{
				$tpl->assign("isFollowing", 0);
			}
        }
        if ($wallPosts = $ul->getUserWallPosts($userInfo['id']))
        {
            require_once '/home/content/99/11499199/html/lib/parser/Parser.php';
            $parser = new \JBBCode\Parser();
            $parser->addCodeDefinitionSet(new \JBBCode\wallPostsDefinitionSet());
            foreach ($wallPosts as &$wallPost)
            {
                if ($userInfo['is_bot'] == 1)
                {
                    // No xss escaping on bot posts
                    $parser->parse($wallPost['post']);
                }
                else
                {
                    $parser->parse(htmlspecialchars($wallPost['post'], ENT_QUOTES));
                }
                $wallPost['post'] = $c->singleTags($parser->getAsHtml());
            }
            $tpl->assign("wallPosts", $wallPosts);
        }
        $tpl->assign("userInfo", $userInfo);
        /*
        Iterate through the users badges and add the url freindly
        name for the anchor links
        */
        foreach ($badges as &$ub)
        {
            $ub['urlName'] = urlencode($ub['name']);
        }
        $tpl->assign("badges", $badges);
        $tpl->assign("badgeCount", $badgeCount);
        $tpl->assign("followers", $followers);
        $tpl->assign("following", $following);
        $tpl->display('/home/content/99/11499199/html/user/templates/profile.tpl');
    }
    else
    {
        $tpl->assign("noBypassLink", true);
        $tpl->display('/home/content/99/11499199/html/templates/pages/404.tpl');
    }
}
else
{
    $tpl->assign("noBypassLink", true);
    $tpl->display('/home/content/99/11499199/html/templates/pages/404.tpl');
}
?>