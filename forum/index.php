<?php
namespace techberry\forum;

require("/home/content/99/11499199/html/class.content.php");
require("/home/content/99/11499199/html/lib/Smarty.class.php");
require("/home/content/99/11499199/html/lib/Zebra_Pagination.php");

$c = new \techberry\content;

$tpl = new \Smarty;
$c->tpl =& $tpl;
$c->setTemplateVars('forum', 'default');

// Head variables
$cssLinks        = array();
$javaScriptLinks = array(
    'https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js?lang=css&skin=desert'
);
$inlineScript    = 
'$(document).ready(function(){
	if(window.location.hash=="#new") {
		$("html, body").animate({ scrollTop: $(document).height() }, 1000);
	} 
});';
$inlineCSS       = false;

$tpl->assign("CSSPage", 'global');

$tpl->assign("forumTab", true);

$tpl->assign("inlineCSS", $inlineCSS);
$tpl->assign("inlineScript", $inlineCSS);

$tpl->assign("startOfHead", "");

$tpl->assign("cssLinks", $cssLinks);
$tpl->assign("javaScriptLinks", $javaScriptLinks);

$tpl->assign("endOfHead", "");

$tpl->assign("startOfBody", "");
$tpl->assign("footerText", "Access tools and platforms for basic programming through to maintaining large applications and programs. We strive to make a strong and collaborative community of active and willing programmers of experience within all areas of computing. I am always looking to add new features that will open up programming to more people and make learning a new language easy.");
$tpl->assign("endOfBody", "");

$tpl->assign("withTopPadding", true);
$tpl->assign("withSidePadding", true);

$settings = \techberry\core\constants::$forumSettings;
$tpl->assign("settings", $settings);

// Just for this page
$c->cq->forum();

// instantiate the pagination object
$c->cq->forumClass->pagination = new \Zebra_Pagination();
$c->cq->forumClass->pagination->method('url');
$c->cq->forumClass->pagination->variable_name('page=');

if (isset($_GET['post_id']) && !isset($_GET['category_id'], $_GET['topic_id']))
{
    // JBBCode parsing is only used in viewing post content
    require_once '/home/content/99/11499199/html/lib/parser/Parser.php';
    $parser = new \JBBCode\Parser();
    $parser->addCodeDefinitionSet(new \JBBCode\ForumDefinitionSet());
    // Viewing replies within a post
    if (rand(1, 100) === 1)
    {
        // 1% chance of adding 100 views (approximately accurate)
        $c->cq->forumClass->addViews('Post', $_GET['post_id'], 100);
        if ($stmt = $c->mysqli->prepare("SELECT user_id,views FROM forum_posts WHERE id = ?"))
        {
            $stmt->bind_param('i', $_GET['post_id']);
            $stmt->execute();
            $stmt->bind_result($user_id, $newViews);
            $stmt->fetch();
            $stmt->close();
            if ($newViews >= 1600 && ($newViews - 100) < 1600)
            {
                $c->requestBadge('Famous Post', $user_id);
                $c->addNotification($user_id, 'earnt_new_badge', 18);
            }
            else if ($newViews >= 800 && ($newViews - 100) < 800)
            {
                $c->requestBadge('Popular Post', $user_id);
                $c->addNotification($user_id, 'earnt_new_badge', 21);
            }
            else if ($newViews >= 400 && ($newViews - 100) < 400)
            {
                $c->requestBadge('Prominent Post', $user_id);
                $c->addNotification($user_id, 'earnt_new_badge', 17);
            }
        }
        
    }
    // Returns an array for referencing
    if (($replies = $c->cq->forumClass->replies($_GET['post_id'])))
    {
        if (isset($_GET['goto']))
        {
            switch ($_GET['goto'])
            {
                case 'newreply':
                    $this->isJustNewReplies = 1;
                    break;
            }
        }
        $tpl->assign("postExists", 1);
        foreach ($replies as &$reply)
        {
            if ($reply['isPost'] == 1)
            {
                // Just for the post
                $post_id           = $reply['id']; // This will be the post id too
                $topic_id          = $reply['topic_id'];
                $category_id       = $reply['category_id'];
                $postTitle         = $reply['title'];
                $topicTitle        = $reply['topicTitle'];
                $categoryTitle     = $reply['categoryTitle'];
                // Make titles friendly for SEO
                $postTitleLink     = $c->urlFreindly($reply['title']);
                $topicTitleLink    = $c->urlFreindly($reply['topicTitle']);
                $categoryTitleLink = $c->urlFreindly($reply['categoryTitle']);
            }
            $reply['views']        = $c->abbreviateNumber($reply['views']);
            $reply['friendlyDate'] = $c->humanTiming(strtotime($reply['date']));
            $parser->parse(htmlspecialchars($reply['content'], ENT_QUOTES));
            $reply['content'] = $c->singleTags($parser->getAsHtml());
        }
        $tpl->assign("post_id", $post_id);
        $tpl->assign("topic_id", $topic_id);
        $tpl->assign("category_id", $category_id);
        $tpl->assign("postTitle", $postTitle);
        $tpl->assign("topicTitle", $topicTitle);
        $tpl->assign("categoryTitle", $categoryTitle);
        $tpl->assign("postTitleLink", $postTitleLink);
        $tpl->assign("topicTitleLink", $topicTitleLink);
        $tpl->assign("categoryTitleLink", $categoryTitleLink);
        $tpl->assign("replies", $replies);
		
		// because we are using url_rewriting
		$c->cq->forumClass->pagination->base_url('http://techberry.org/forum/p='.$_GET['post_id'].'/', FALSE);
		
		// pass the total number of records to the pagination class
		$c->cq->forumClass->pagination->records($c->cq->forumClass->totalNumberOfReplies);

		// records per page
		$c->cq->forumClass->pagination->records_per_page($settings['ReplyResultsPerPage']);
		
		ob_start();
		$c->cq->forumClass->pagination->render();
		$pageLinks = ob_get_clean();

		$tpl->assign("pagination", $pageLinks);
        
		$tpl->display('/home/content/99/11499199/html/forum/templates/view.replies.tpl');
    }
    else
    {
        $tpl->assign("postExists", 0);
        $tpl->display('/home/content/99/11499199/html/forum/templates/view.replies.tpl');
    }
}
elseif (isset($_GET['topic_id']) && !isset($_GET['category_id'], $_GET['post_id']))
{
	if($c->cq->forumClass->exists('topic',$_GET['topic_id']))
	{
		$tpl->assign("topicExists", 1);
		// Viewing posts within a topic
		if (rand(1, 100) === 1)
		{
			// Every 100 views add 100 views
			$c->cq->forumClass->addViews('Topic', $_GET['topic_id'], 100);
			if ($stmt = $c->mysqli->prepare("SELECT user_id,views FROM forum_topics WHERE id = ?"))
			{
				$stmt->bind_param('i', $_GET['post_id']);
				$stmt->execute();
				$stmt->bind_result($user_id, $newViews);
				$stmt->fetch();
				$stmt->close();
				if ($newViews >= 1200 && ($newViews - 100) < 1200)
				{
					$c->requestBadge('Famous Topic', $user_id);
					$c->addNotification($user_id, 'earnt_new_badge', 16);
				}
				else if ($newViews >= 600 && ($newViews - 100) < 600)
				{
					$c->requestBadge('Popular Topic', $user_id);
					$c->addNotification($user_id, 'earnt_new_badge', 15);
				}
				else if ($newViews >= 300 && ($newViews - 100) < 300)
				{
					$c->requestBadge('Prominent Topic', $user_id);
					$c->addNotification($user_id, 'earnt_new_badge', 20);
				}
			}
		}
		// Returns an array for referencing
		if ($c->cq->forumClass->isPending('topic', $_GET['topic_id']))
		{
			$isPending                  = 1;
			$topic                      = $c->cq->forumClass->topicInfo($_GET['topic_id']);
			$topic['categoryTitleLink'] = $c->urlFreindly($topic['categoryTitle']);
			$topic['titleLink']         = $c->urlFreindly($topic['title']);
			$tpl->assign("topic", $topic);
		}
		else
		{
			$posts = $c->cq->forumClass->posts($_GET['topic_id'],$postLimits);
			$i     = 1;
			foreach ($posts as &$post)
			{
				if ($i === 1)
				{
					$topic_id          = $post['topic_id'];
					$category_id       = $post['category_id'];
					$topicTitle        = $post['topicTitle'];
					$categoryTitle     = $post['categoryTitle'];
					// Make titles friendly for SEO
					$topicTitleLink    = $c->urlFreindly($post['topicTitle']);
					$categoryTitleLink = $c->urlFreindly($post['categoryTitle']);
					if ($post['post_id'] === null)
					{
						// If first id is null then there are no posts
						$tpl->assign("hasPosts", 0);
					}
					else
					{
						$tpl->assign("hasPosts", 1);
					}
				}
				$post['views']         = $c->abbreviateNumber($post['views']);
				$post['friendlyDate']  = $c->humanTiming(strtotime($post['date']));
				$post['postTitleLink'] = $c->urlFreindly($post['title']);
				$i++;
			}
			$tpl->assign("topic_id", $topic_id);
			$tpl->assign("category_id", $category_id);
			$tpl->assign("topicTitle", $topicTitle);
			$tpl->assign("categoryTitle", $categoryTitle);
			$tpl->assign("topicTitleLink", $topicTitleLink);
			$tpl->assign("categoryTitleLink", $categoryTitleLink);
			$tpl->assign("posts", $posts);

			// because we are using url_rewriting
			$c->cq->forumClass->pagination->base_url('http://techberry.org/forum/t='.$_GET['topic_id'].'/', FALSE);
			
			// pass the total number of records to the pagination class
			$c->cq->forumClass->pagination->records($c->cq->forumClass->totalNumberOfPosts);

			// records per page
			$c->cq->forumClass->pagination->records_per_page($settings['PostResultsPerPage']);
			
			ob_start();
			$c->cq->forumClass->pagination->render();
			$pageLinks = ob_get_clean();

			$tpl->assign("pagination", $pageLinks);
			
		}
		$tpl->assign("isPending", $isPending);
	}
	else
	{
		$tpl->assign("topicExists", 0);
	}
	$tpl->assign("returnedNumberOfPosts", 0);
    $tpl->display('/home/content/99/11499199/html/forum/templates/view.posts.tpl');
}
elseif (isset($_GET['category_id']) && !isset($_GET['topic_id'], $_GET['post_id']))
{
	if($c->cq->forumClass->exists('category',$_GET['category_id']))
	{
		$tpl->assign("categoryExists", 1);
		// Viewing topics within a category
		if (rand(1, 100) === 1)
		{
			// Every 100 views add 100 views
			$c->cq->forumClass->addViews('Category', $_GET['category_id'], 100);
			if ($stmt = $c->mysqli->prepare("SELECT user_id,views FROM forum_categories WHERE id = ?"))
			{
				$stmt->bind_param('i', $_GET['category_id']);
				$stmt->execute();
				$stmt->bind_result($user_id, $newViews);
				$stmt->fetch();
				$stmt->close();
				if ($newViews >= 1000 && ($newViews - 100) < 1000)
				{
					$c->requestBadge('Famous Category', $user_id);
					$c->addNotification($user_id, 'earnt_new_badge', 14);
				}
				else if ($newViews >= 500 && ($newViews - 100) < 500)
				{
					$c->requestBadge('Popular Category', $user_id);
					$c->addNotification($user_id, 'earnt_new_badge', 13);
				}
				else if ($newViews >= 250 && ($newViews - 100) < 250)
				{
					$c->requestBadge('Prominent Category', $user_id);
					$c->addNotification($user_id, 'earnt_new_badge', 19);
				}
			}
		}
		if ($c->cq->forumClass->isPending('category', $_GET['category_id']))
		{
			$isPending             = 1;
			$category              = $c->cq->forumClass->categoryInfo($_GET['category_id']);
			$category['titleLink'] = $c->urlFreindly($category['title']);
			$tpl->assign("category", $category);
		}
		else
		{
			$topics = $c->cq->forumClass->topics($_GET['category_id']);
			$i      = 1;
			foreach ($topics as &$topic)
			{
				if ($i === 1)
				{
					// Runs only on first iteration
					$category_id       = $topic['category_id'];
					$categoryTitle     = $topic['categoryTitle'];
					$categoryTitleLink = $c->urlFreindly($topic['categoryTitle']);
					if ($topic['id'] === null)
					{
						// If first id is null then there are no topics
						$tpl->assign("hasTopics", 0);
					}
					else
					{
						$tpl->assign("hasTopics", 1);
					}
				}
				$topic['views']        = $c->abbreviateNumber($topic['views']);
				$topic['friendlyDate'] = $c->humanTiming(strtotime($topic['date']));
				$topic['titleLink']    = $c->urlFreindly($topic['title']);
				if ($topic['pending'] === 1)
				{
					$topic['commits']    = $c->cq->forumClass->commits('topic', $topic['id']);
					$topic['meterWidth'] = (($topic['commits']) / $settings['TopicCommitsToActivate'] ) * 100;
				}
				$i++;
			}
			$tpl->assign("pendingTitle", 1);
			$tpl->assign("category_id", $category_id);
			$tpl->assign("categoryTitle", $categoryTitle);
			$tpl->assign("categoryTitleLink", $categoryTitleLink);
			$tpl->assign("topics", $topics);

			// because we are using url_rewriting
			$c->cq->forumClass->pagination->base_url('http://techberry.org/forum/c='.$_GET['category_id'].'/', FALSE);
			
			// pass the total number of records to the pagination class
			$c->cq->forumClass->pagination->records($c->cq->forumClass->totalNumberOfTopics);

			// records per page
			$c->cq->forumClass->pagination->records_per_page($settings['TopicResultsPerPage']);
			
			ob_start();
			$c->cq->forumClass->pagination->render();
			$pageLinks = ob_get_clean();

			$tpl->assign("pagination", $pageLinks);
			
		}
		$tpl->assign("isPending", $isPending);
	}
	else
	{
		$tpl->assign("categoryExists", 0);
	}
    $tpl->display('/home/content/99/11499199/html/forum/templates/view.topics.tpl');
}
else
{
    // Viewing all categories
    $categories = $c->cq->forumClass->categories();
    foreach ($categories as &$category)
    {
        $category['views']        = $c->abbreviateNumber($category['views']);
        $category['friendlyDate'] = $c->humanTiming(strtotime($category['date']));
        $category['titleLink']    = $c->urlFreindly($category['title']);
        if ($category['pending'] === 1)
        {
            $category['commits']    = $c->cq->forumClass->commits('category', $category['id']);
            $category['meterWidth'] = (($category['commits']) / $settings['CategoryCommitsToActivate']) * 100;
        }
    }
	
	// because we are using url_rewriting
	$c->cq->forumClass->pagination->base_url('http://techberry.org/forum/', FALSE);
	
	// pass the total number of records to the pagination class
	$c->cq->forumClass->pagination->records($c->cq->forumClass->totalNumberOfCategories);

	// records per page
	$c->cq->forumClass->pagination->records_per_page($settings['CategoryResultsPerPage']);
	
	ob_start();
	$c->cq->forumClass->pagination->render();
	$pageLinks = ob_get_clean();

	$tpl->assign("pagination", $pageLinks);
	
    $tpl->assign("pendingTitle", 1);
    $tpl->assign("categories", $categories);
    $tpl->display('/home/content/99/11499199/html/forum/templates/view.categories.tpl');
}
?>