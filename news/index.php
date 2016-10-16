<?php
	namespace techberry\page;

	require("/home/content/99/11499199/html/class.content.php");
	require("/home/content/99/11499199/html/lib/Smarty.class.php");
	
	$c = new \techberry\content;
	
	$tpl = new \Smarty;
	$c->tpl = &$tpl;
	$c->setTemplateVars('news','default');
	
$inlineScript = 
<<<'EOT'
	function likeNewsArticle(){
		$('form#likeNewsArticle').submit();
	}
EOT;
$inlineCSS = false;
$tpl->assign("platformsTab",true);

$tpl->assign("inlineScript",$inlineScript);
$tpl->assign("inlineCSS",$inlineCSS);

$tpl->assign("cssLinks",array());
$tpl->assign("javaScriptLinks",array('https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?lang=css&skin=desert'));

$tpl->assign("withTopPadding",true);
$tpl->assign("withSidePadding",true);

// Just for this page
$c->cq->news();
if(isset($_GET['article_id'])){
	$mainArticle = $c->cq->newsClass->article($_GET['article_id']);
	$tpl->assign("mainArticle",$mainArticle);
	$sideArticles = $c->cq->newsClass->relevantArticles($mainArticle['title'],$mainArticle['id']);
	if(empty($sideArticles)){
		/*
			There are no relevant news articles so just load the most recent
		*/
		$sideArticles = $c->cq->newsClass->recentArticles();
	}else{
		$recentArticles = $c->cq->newsClass->recentArticles();
		foreach($recentArticles as &$recentArticle){
			$recentArticle['titleLink']=$c->urlFreindly($recentArticle['title']);
		}
		$tpl->assign("recentArticles", $recentArticles);
	}
	foreach($sideArticles as &$sideArticle){
		$sideArticle['titleLink']=$c->urlFreindly($sideArticle['title']);
	}
	$comments = $c->cq->newsClass->articleComments($_GET['article_id']);
	$tpl->assign("sideArticles",$sideArticles);
}else{
	$mainArticle = $c->cq->newsClass->article(5);
	//$mainArticle = $c->cq->newsClass->mainArticle();
	$tpl->assign("mainArticle",$mainArticle);
	$sideArticles = $c->cq->newsClass->relevantArticles($mainArticle['title'],$mainArticle['id']);
	if(empty($sideArticles)){
		/*
			There are no relevant news articles so just load the most recent
		*/
		$sideArticles = $c->cq->newsClass->recentArticles();
	}else{
		$recentArticles = $c->cq->newsClass->recentArticles();
		foreach($recentArticles as &$recentArticle){
			$recentArticle['titleLink']=$c->urlFreindly($recentArticle['title']);
		}
		$tpl->assign("recentArticles", $recentArticles);
	}
	foreach($sideArticles as &$sideArticle){
		$sideArticle['titleLink']=$c->urlFreindly($sideArticle['title']);
	}
	$comments = $c->cq->newsClass->articleComments($mainArticle['id']);
	$tpl->assign("sideArticles",$sideArticles);
}
// Now loop your comments list, and every time you find a child, push it
// into its parent
foreach($comments as $k => &$v){
	if($v['parent'] != 0){
		$comments[$v['parent']]['childs'][] =& $v;
	}
}
unset($v);

// Delete the childs comments from the top level
foreach($comments as $k => $v){
	if($v['parent'] != 0){
		unset($comments[$k]);
	}
}
$c->cq->newsClass->display_comments($comments);
$tpl->assign("comments",$c->compress_html($c->cq->newsClass->comments));
$tpl->display('/home/content/99/11499199/html/news/templates/view.article.tpl');
?>