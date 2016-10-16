<?php
	namespace techberry\page\index;

	require("/home/content/99/11499199/html/class.content.php");
	require("/home/content/99/11499199/html/lib/Smarty.class.php");
	
	$c = new \techberry\content;
	
	$tpl = new \Smarty;
	$c->tpl = &$tpl;
	$c->setTemplateVars('about','default');

$tpl->assign("supportTab",true);
// Head variables
$inlineScript = false;
$inlineCSS = false;

$tpl->assign("inlineScript",$inlineScript);
$tpl->assign("inlineCSS",$inlineCSS);

$tpl->assign("cssLinks",array());
$tpl->assign("javaScriptLinks",array());

$tpl->assign("withTopPadding",true);
$tpl->assign("withSidePadding",true);

/*
	Just for this page
*/

$result = $c->mysqli->query('SELECT COUNT(*) FROM users LIMIT 1');
$row = $result->fetch_array(MYSQLI_NUM);
$numberOfMembers = $row[0];
$result->close();

$result = $c->mysqli->query('SELECT COUNT(*) FROM forum_posts UNION SELECT COUNT(*) FROM user_wallPosts');
$row = $result->fetch_array(MYSQLI_NUM);
$numberOfPosts = $row[0];
$result->close();

$result = $c->mysqli->query('SELECT COUNT(*) FROM qa_answers');
$row = $result->fetch_array(MYSQLI_NUM);
$numberOfAnswers = $row[0];
$result->close();

$result = $c->mysqli->query('SELECT COUNT(*) FROM tuts_pages');
$row = $result->fetch_array(MYSQLI_NUM);
$numberOfTutorials = $row[0];
$result->close();

$result = $c->mysqli->query('SELECT COUNT(*) FROM news_comments');
$row = $result->fetch_array(MYSQLI_NUM);
$numberOfComments = $row[0];
$result->close();

if($c->loginCheck()){
	$ua = $c->userActions();
	$ua->requestBadge('Informed',$_SESSION['user_id']);
}

$tpl->assign("numberOfMembers", $c->abbreviateNumber($numberOfMembers));
$tpl->assign("numberOfPosts", $c->abbreviateNumber($numberOfPosts));
$tpl->assign("numberOfAnswers", $c->abbreviateNumber($numberOfAnswers));
$tpl->assign("numberOfTutorials", $c->abbreviateNumber($numberOfTutorials));
$tpl->assign("numberOfComments", $c->abbreviateNumber($numberOfComments));

$tpl->display('/home/content/99/11499199/html/about/templates/about.tpl');
?>