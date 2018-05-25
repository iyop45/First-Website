<?php
namespace techberry\core;

use techberry\core\constants as constants;
/**
 * Functions including in class:
 * DYNAMIC:
 * flags, isNew, addViews, isPending, edits, commits
DUPLICATE: exists
 * NON-DYNAMIC:
 * categoryInfo, topicInfo, postInfo, replyInfo
 * categories, topics, posts, replies
 **/
class forums extends constants
{
    private $mysqli;
    
    public $post_id;
    public $topic_id;
    public $category_id;
    
    function __construct($mysqli)
    {
        $this->mysqli = $mysqli;
    }
	
    public function exists($type, $id)
    {
        if (array_key_exists($type, constants::$dbForumName))
        {
            if ($stmt = $this->mysqli->prepare("
				SELECT EXISTS
				( 
					SELECT 1 
					FROM " . constants::$forumPrefix . constants::$dbForumName[$type]['table'] . "  
					WHERE id = ?
				) LIMIT 1"))
            {
                $stmt->bind_param('i', $id);
                $stmt->execute();
                $stmt->bind_result($exists);
                $stmt->fetch();
                if ($exists == 1)
                {
                    $stmt->close();
                    return true;
                }
                else
                {
                    $stmt->close();
                    return false;
                }
            }
        }
        return false;
    }
    
    public function flags($type, $id)
    {
        if (array_key_exists($type, constants::$dbForumName))
        {
            if ($stmt = $this->mysqli->prepare('
				SELECT COUNT(*) 
				FROM ' . constants::$forumPrefix . constants::$dbForumName[$type]['flag']['table'] . ' AS f
				WHERE f.' . constants::$dbForumName[$type]['id'] . ' = ?'))
            {
                $stmt->bind_param('i', $id);
                $stmt->execute();
                $stmt->bind_result($flag_count);
                $stmt->fetch();
                $stmt->close();
                return $flag_count;
            }
        }
        return false;
    }
    
    public function isNew($type, $id, $time)
    {
	
        if (array_key_exists($type, constants::$dbForumName))
        {
			$sql = '				
				SELECT EXISTS
				(
					SELECT 1 
					FROM ' . constants::$forumPrefix . constants::$dbForumName[$type]['table'] . ' AS e 
					WHERE e.id = ?
					AND e.date > ?
				)';
				var_dump($sql);die('sdf');
            if ($stmt = $this->mysqli->prepare($sql))
            {
				die($sql);
                $stmt->bind_param('is', $id, $time);
                $stmt->execute();
                $stmt->bind_result($isNew);
                $stmt->fetch();
                $stmt->close();
                return $isNew;
            }
        }
		die('sddsf');
        return false;
    }
    
    public function isNewEdit($type, $id, $time)
    {
        if (array_key_exists($type, constants::$dbForumName))
        {
            if ($stmt = $this->mysqli->prepare('
				SELECT EXISTS
				(
					SELECT 1 
					FROM ' . constants::$forumPrefix . constants::$dbForumName[$type]['edit']['table'] . ' AS e 
					WHERE e.id = ?
					AND e.date > ?
				)'))
            {
                $stmt->bind_param('is', $id, $time);
                $stmt->execute();
                $stmt->bind_result($isNew);
                $stmt->fetch();
                $stmt->close();
                return $isNew;
            }
        }
        return false;
    }
    
    public function addViews($type, $id, $views)
    {
        if (array_key_exists($type, constants::$dbForumName))
        {
            if ($stmt = $this->mysqli->prepare('
				UPDATE ' . constants::$forumPrefix . constants::$dbForumName[$type]['table'] . '
				SET views = (views+?)
				WHERE id = ?'))
            {
                $stmt->bind_param('is', $id, $time);
                $stmt->execute();
                $stmt->bind_result($isNew);
                $stmt->fetch();
                $stmt->close();
                return $isNew;
            }
        }
        return false;
    }
    
    public function isPending($type, $id)
    {
        if (array_key_exists($type, constants::$dbForumName) && !array_key_exists($type, array(
            'reply',
            'post'
        )))
        {
			$sql = 'SELECT pending	FROM ' . constants::$forumPrefix . constants::$dbForumName[$type]['table'] . ' WHERE id = ?';
			if ($stmt = $this->mysqli->prepare($sql))
            {
                $stmt->bind_param('i', $id);
                $stmt->execute();
				$stmt->store_result();
                $stmt->bind_result($isPending);
                $stmt->fetch();
                if ($isPending == 1 || $stmt->num_rows == 0)
                {
					$stmt->close();
                    return true;
                }
                else
                {
					$stmt->close();
                    return false;
                }
            }
        }
        return false;
    }
    
    public function edits($type, $id)
    {
        if (array_key_exists($type, constants::$dbForumName))
        {
			if($type == 'reply')
			{
				$title = "'empty'";
			}
			else
			{
				$title = 'e.title';
			}
			$sql   =
				"SELECT e.id, 
					   $title,
					   e.description, 
					   m.username, 
					   e.reason, 
					   e.date
					FROM " . constants::$forumPrefix . constants::$dbForumName[$type]['edit']['table'] . " as e
					INNER JOIN users as m
					ON (m.id = e.user_id)
					WHERE e." . constants::$dbForumName[$type]['id'] . " = ?";
            if ($stmt = $this->mysqli->prepare($sql))
            {
                $stmt->bind_param('i', $id);
                $stmt->execute();
				$stmt->bind_result($id,$title,$description,$username,$reason,$date);
				$edits = array();
				while($stmt->fetch())
				{
					$edits[] = array(
											'id' => $id,
											'description' => $description,
											'username' => $username,
											'reason' => $reason,
											'date' => $date
										  );
				}
                $stmt->close();
                return $edits;
            }
        }
        return false;
    }
    
    public function commits($type, $id)
    {
        if (array_key_exists($type, constants::$dbForumName))
        {
            if ($stmt = $this->mysqli->prepare("
				SELECT 1 FROM 
				" . constants::$forumPrefix . constants::$dbForumName[$type]['commit']['table'] . " 
				WHERE " . constants::$dbForumName[$type]['id'] . " = ?"))
            {
                $stmt->bind_param('i', $id);
                $stmt->execute();
                $stmt->store_result();
                $commits = $stmt->num_rows;
                $stmt->close();
                return $commits;
            }
            else
            {
                die($sql);
            }
        }
        else
        {
            die($type);
        }
        return 0;
    }
    /*
     *
     * THE FOLLOWING ARE NON DYNAMIC METHODS
     *
     */
    // Specific row/table information
    public function categoryInfo($id)
    {
        if ($stmt = $this->mysqli->prepare("
			SELECT c.id,
				   c.title,
				   c.description,
				   c.date,
				   u.username
				FROM forum_categories AS c
				INNER JOIN users AS u
					ON(u.id = c.user_id)
				WHERE c.id = ?"))
        {
            $stmt->bind_param('i', $id);
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($id, $title, $description, $date, $username);
            $stmt->fetch();
            if ($stmt->num_rows == 0)
            {
                $stmt->close();
                return false;
            }
            else
            {
                $stmt->close();
                return array(
                    'id' => $id,
                    'title' => $title,
                    'description' => $description,
                    'date' => $date,
                    'username' => $username
                );
            }
        }
        else
        {
            return false;
        }
    }
    public function topicInfo($id)
    {
        if ($stmt = $this->mysqli->prepare("
			SELECT t.id,
				   t.title,
				   t.description,
				   t.date,
				   c.id as category_id,
				   c.title as categoryTitle,
				   u.username
				FROM forum_topics as t
				INNER JOIN forum_categories as c
				ON (c.id = t.category_id)
				INNER JOIN users AS u 
				ON (u.id = t.user_id)
				WHERE t.id = ?"))
        {
            $stmt->bind_param('i', $id);
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($id, $title, $description, $date, $category_id, $categoryTitle, $username);
            $stmt->fetch();
            if ($stmt->num_rows == 0)
            {
                $stmt->close();
                return false;
            }
            else
            {
                $stmt->close();
                return array(
                    'id' => $id,
                    'title' => $title,
                    'description' => $description,
                    'date' => $date,
                    'category_id' => $category_id,
                    'categoryTitle' => $categoryTitle,
                    'username' => $username
                );
            }
        }
        else
        {
            return false;
        }
    }
    public function postInfo($id)
    {
        if ($stmt = $this->mysqli->prepare("
			SELECT p.id,
				   p.title,
				   p.content,
				   p.date,
				   t.id,
				   t.title,
				   c.id,
				   c.title,
				   u.username
				FROM forum_posts AS p
				INNER JOIN forum_topics AS t ON(t.id = p.topic_id)
				INNER JOIN forum_categories AS c ON(c.id = t.category_id)
				INNER JOIN users AS u ON(u.id = p.user_id)
				WHERE p.id = ?"))
        {
            $stmt->bind_param('i', $id);
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($id, $title, $content, $date, $topic_id, $topic_title, $category_id, $category_title, $username);
            $stmt->fetch();
            if ($stmt->num_rows == 0)
            {
                $stmt->close();
                return false;
            }
            else
            {
                $stmt->close();
                return array(
                    'id' => $id,
                    'title' => $title,
                    'content' => $content,
                    'date' => $date,
                    'topic_id' => $topic_id,
                    'topic_title' => $topic_title,
                    'category_id' => $category_id,
                    'category_title' => $category_title,
                    'username' => $username
                );
            }
        }
        else
        {
            return false;
        }
    }
    public function replyInfo($id)
    {
        if ($stmt = $this->mysqli->prepare("
			SELECT r.id,
				   r.content,
				   r.date,
				   p.id,
				   p.title,
				   t.id,
				   t.title,
				   c.id,
				   c.title,
				   u.username
				FROM forum_replies AS r
				INNER JOIN forum_posts AS p ON(r.post_id = p.id)
				INNER JOIN forum_topics AS t ON(p.topic_id = t.id)
				INNER JOIN forum_categories AS c ON(t.category_id = c.id)
				INNER JOIN users AS u ON(u.id = r.user_id)
				WHERE r.id = ?"))
        {
            $stmt->bind_param('i', $id);
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($id, $content, $date, $post_id, $post_title, $topic_id, $topic_title, $category_id, $category_title, $username);
            $stmt->fetch();
            if ($stmt->num_rows == 0)
            {
                $stmt->close();
                return false;
            }
            else
            {
                $stmt->close();
                return array(
                    'id' => $id,
                    'content' => $content,
                    'date' => $date,
                    'post_id' => $post_id,
                    'post_title' => $post_title,
                    'topic_id' => $topic_id,
                    'topic_title' => $topic_title,
                    'category_id' => $category_id,
                    'category_title' => $category_title,
                    'username' => $username
                );
            }
        }
        else
        {
            return false;
        }
    }
    public $returnedNumberOfCategories;
    public $totalNumberOfCategories;
    // Return all from tables
    public function categories($limit = null)
    {
		is_null($limit) ? $limit = array('onset' => 0, 'offset' => constants::$forumSettings['CategoryResultsPerLoad']) : $limit = $limit;
        isset($_SESSION['user_id']) ? $isLoggedIn = 1 : $isLoggedIn = 0;
		$sql = "SELECT * FROM
				( SELECT c.id,
						c.title,
						c.description,
						IF(LENGTH(c.icon) > 0, c.icon , CONCAT('http://www.gravatar.com/avatar/',md5(c.title),'?r=PG&s=256&default=identicon')),
						c.views,
					    ( SELECT COUNT(*)
										FROM forum_categoryFlags AS cf
										WHERE cf.category_id = c.id) AS flagCount,
						( SELECT COUNT(*)
									   FROM forum_topics AS t
									   WHERE t.category_id = c.id) AS topicCount,
						c.pending,
						c.isLocked,
						c.date,
						" . (($isLoggedIn) ? "EXISTS (
													SELECT 1 
														FROM forum_categoryCommits AS cc 
														WHERE cc.category_id = c.id 
														AND cc.user_id = ?
												     )" : "0") . " AS hasCommitted
				FROM forum_categories AS c
				ORDER BY c.views DESC ) as g
			ORDER BY g.pending
			LIMIT ". (($this->pagination->get_page() - 1) * constants::$forumSettings['CategoryResultsPerPage'] ) . ", " . constants::$forumSettings['CategoryResultsPerPage'];
        if ($stmt = $this->mysqli->prepare($sql))
        {
            if ($isLoggedIn)
            {
                $stmt->bind_param('i', $_SESSION['user_id']);
            }
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($id, $title, $description, $icon, $views, $flagCount, $topics, $pending, $isLocked, $date, $hasCommitted);
            $categories                       = array();
            $this->returnedNumberOfCategories = $stmt->num_rows();
            while ($stmt->fetch())
            {
                $categories[] = array(
                    'id' => $id,
                    'title' => $title,
                    'description' => $description,
                    'icon' => $icon,
                    'views' => $views,
                    'flagCount' => $flagCount,
                    'topics' => $topics,
                    'pending' => $pending,
                    'isLocked' => $isLocked,
                    'date' => $date,
                    'hasCommitted' => $hasCommitted
                );
            }
            $stmt->close();
			
			//get total number of categories
			if($stmt = $this->mysqli->prepare("SELECT COUNT(*) FROM forum_categories LIMIT 1")){
				$stmt->execute();
				$stmt->bind_result($num);
				$stmt->fetch();
					$this->totalNumberOfCategories=$num;
				$stmt->close();
			}
            return $categories;
        }
        else
        {
            return false;
        }
    }
    public $totalNumberOfTopics;
    public function topics($categoryId)
    {
        isset($_SESSION['user_id']) ? $isLoggedIn = 1 : $isLoggedIn = 0;
		$sql = "SELECT SQL_CALC_FOUND_ROWS *
					FROM
			  (SELECT t.id AS topic_id,
					  t.title AS topicTitle,
					  t.description,
					  t.pending,
					  t.isLocked,
					( SELECT COUNT(*)
									FROM forum_topicFlags AS tf
									WHERE tf.topic_id = t.id) AS flagCount,
					 ( SELECT COUNT(*)
								   FROM forum_posts AS p
								   WHERE p.topic_id = t.id) AS postCount,
					  t.views,
					  t.date,
					  c.id AS cat_id,
					  c.title AS categoryTitle,
					  IF(LENGTH(c.icon) > 0, c.icon , CONCAT('http://www.gravatar.com/avatar/',md5(c.title),'?r=PG&s=256&default=identicon')),
					  " . (($isLoggedIn) ? "EXISTS (
												SELECT 1 
													FROM forum_topicCommits AS tc 
													WHERE tc.topic_id = t.id 
													AND tc.user_id = ?
												 )" : "0") . " AS hasCommitted
			   FROM forum_categories AS c
			   LEFT JOIN forum_topics AS t ON(c.id = t.category_id)
			   WHERE c.id = ?
			   ORDER BY t.views DESC) AS g
			ORDER BY g.pending
			LIMIT ". (($this->pagination->get_page() - 1) * constants::$forumSettings['TopicResultsPerPage'] ) . ", " . constants::$forumSettings['TopicResultsPerPage'];
		if ($stmt = $this->mysqli->prepare($sql))
        {
            if ($isLoggedIn)
            {
                $stmt->bind_param('ii', $_SESSION['user_id'], $categoryId);
            }
            else
            {
                $stmt->bind_param('i', $categoryId);
            }
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($id, $title, $description, $pending, $isLocked, $flagCount, $posts, $views, $date, $category_id, $categoryTitle, $categoryIcon, $hasCommitted);
            $topics                       = array();
            $this->returnedNumberOfTopics = $stmt->num_rows();
            while ($stmt->fetch())
            {
                $topics[] = array(
                    'id' => $id,
                    'title' => $title,
                    'description' => $description,
                    'pending' => $pending,
                    'isLocked' => $isLocked,
                    'flagCount' => $flagCount,
                    'posts' => $posts,
                    'views' => $views,
                    'date' => $date,
                    'category_id' => $category_id,
                    'categoryTitle' => $categoryTitle,
                    'categoryIcon' => $categoryIcon,
                    'hasCommitted' => $hasCommitted
                );
            }
            $stmt->close();
			
			//get total number of topics
			if($stmt = $this->mysqli->prepare("SELECT COUNT(*) FROM forum_topics WHERE category_id = ? LIMIT 1")){
				$stmt->bind_param('i',$categoryId);
				$stmt->execute();
				$stmt->bind_result($num);
				$stmt->fetch();
					$this->totalNumberOfTopics=$num;
				$stmt->close();
			}
            return $topics;
        }
        else
        {
            return false;
        }
    }
    public $totalNumberOfPosts;
    public function posts($topicId)
    {
        if ($stmt = $this->mysqli->prepare("
			SELECT p.id AS post_id,
				   p.title AS postTitle,
				   LEFT(p.content, 100) ,

			  ( SELECT COUNT(*)
			   FROM forum_replies AS r
			   WHERE r.post_id = p.id) AS replyCount,

			  ( SELECT COUNT(*)
			   FROM forum_postFlags AS pf
			   WHERE pf.post_id = p.id) AS flagCount,
				   p.isLocked,
				   p.views,
				   p.date,
				   t.id AS topic_id,
				   t.title AS topicTitle,
				   c.id AS category_id,
				   c.title AS categoryTitle,
				   m.username,
				   IF(LENGTH(m.avatar) >0, m.avatar, CONCAT('http://vanillicon.com/', MD5(m.email)))
			FROM forum_topics AS t
			LEFT JOIN forum_posts AS p ON (t.id = p.topic_id)
			LEFT JOIN forum_categories AS c ON (t.category_id = c.id)
			LEFT JOIN users AS m ON (p.user_id = m.id)
			WHERE t.id = ?
			ORDER BY p.date DESC 
			LIMIT ". (($this->pagination->get_page() - 1) * constants::$forumSettings['PostResultsPerPage'] ) . ', ' . constants::$forumSettings['PostResultsPerPage']))
        {
            $stmt->bind_param('i', $topicId);
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($post_id, $title, $content, $replyCount, $flagCount, $isLocked, $views, $date, $topic_id, $topicTitle, $category_id, $categoryTitle, $username, $avatar);
            $posts                       = array();
            $this->returnedNumberOfPosts = $stmt->num_rows();
            while ($stmt->fetch())
            {
                $posts[] = array(
                    'post_id' => $post_id,
                    'title' => $title,
                    'content' => $content,
                    'replyCount' => $replyCount,
                    'flagCount' => $flagCount,
                    'isLocked' => $isLocked,
                    'views' => $views,
                    'date' => $date,
                    'topic_id' => $topic_id,
                    'topicTitle' => $topicTitle,
                    'category_id' => $category_id,
                    'categoryTitle' => $categoryTitle,
                    'username' => $username,
                    'avatar' => $avatar
                );
            }
            $stmt->close();
			
			//get total number of posts
			if($stmt = $this->mysqli->prepare("SELECT COUNT(*) FROM forum_posts WHERE topic_id = ? LIMIT 1")){
				$stmt->bind_param('i',$topicId);
				$stmt->execute();
				$stmt->bind_result($num);
				$stmt->fetch();
					$this->totalNumberOfPosts=$num;
				$stmt->close();
			}
            return $posts;
        }
        else
        {
            return false;
        }
    }
    
    public $isJustNewReplies;
    public $totalNumberOfReplies;
    public function replies($postId)
    {
		$sql = "			 
			( SELECT  0 AS isPost,
					   a.id AS id,
					   a.content AS content,
					   a.isLocked AS isLocked,
					   0 AS views,
					   a.date AS dtime,
					   b.title AS title,
					   (SELECT COUNT(*) FROM forum_replyFlags AS rf WHERE rf.reply_id = a.id) AS flags,
					   c.id AS topic_id,
					   c.title AS topicTitle,
					   d.id AS category_id,
					   d.title AS categoryTitle,
					   IF(LENGTH(e.avatar) > 0, e.avatar , CONCAT('http://vanillicon.com/',md5(e.email))) AS avatar,
					   e.username AS username,
					   x.name AS groupName
			   FROM forum_replies AS a
			   INNER JOIN forum_posts AS b ON(b.id = a.post_id)
			   INNER JOIN forum_topics AS c ON(c.id = b.topic_id)
			   INNER JOIN forum_categories AS d ON(c.category_id = d.id)
			   INNER JOIN users AS e ON(e.id = a.user_id)
			   INNER JOIN user_groups AS x ON(e.group_id = x.id)
			   WHERE b.id = ? 
			   LIMIT ". (($this->pagination->get_page() - 1) * constants::$forumSettings['ReplyResultsPerPage'] ) . ', ' . constants::$forumSettings['ReplyResultsPerPage'] . "
			)
			UNION
			  (SELECT " . ($this->isJustNewReplies ? "TOP (29) " : "") . "
					  1 AS isPost,
					  f.id AS id,
					  f.content AS content,
					  f.isLocked AS isLocked,
					  f.views AS views,
					  f.date AS dtime,
					  f.title AS title,
					  (SELECT COUNT(*) FROM forum_postFlags AS pf WHERE pf.post_id = f.id) AS flags,
					  g.id AS topic_id,
					  g.title AS topicTitle,
					  h.id AS category_id,
					  h.title AS categoryTitle,
					  IF(LENGTH(i.avatar) > 0, i.avatar , CONCAT('http://vanillicon.com/',md5(i.email))) AS avatar,
					  i.username AS username,
					  y.name AS groupName
			   FROM forum_posts AS f
			   INNER JOIN forum_topics AS g ON(g.id = f.topic_id)
			   INNER JOIN forum_categories AS h ON(g.category_id = h.id)
			   INNER JOIN users AS i ON(i.id = f.user_id)
			   INNER JOIN user_groups AS y ON(i.group_id = y.id)
			   WHERE f.id = ? LIMIT 1)
			ORDER BY dtime ASC";
        if ($stmt = $this->mysqli->prepare($sql))
        {
            $stmt->bind_param('ii', $postId, $postId);
            $stmt->execute();
            $stmt->store_result();
            if ($stmt->num_rows != 0)
            {
                $stmt->bind_result($isPost, $id, $content, $isLocked, $views, $date, $title, $flagCount, $topic_id, $topicTitle, $category_id, $categoryTitle, $avatar, $username, $groupName);
                $replies = array();
                while ($stmt->fetch())
                {
                    $replies[] = array(
                        'isPost' => $isPost,
                        'id' => $id,
                        'content' => $content,
                        'isLocked' => $isLocked,
                        'views' => $views,
                        'date' => $date,
                        'title' => $title,
                        'flagCount' => $flagCount,
                        'topic_id' => $topic_id,
                        'topicTitle' => $topicTitle,
                        'category_id' => $category_id,
                        'categoryTitle' => $categoryTitle,
                        'avatar' => $avatar,
                        'username' => $username,
                        'groupName' => $groupName
                    );
                }
                $stmt->close();
				
				//get total number of replies
				if($stmt = $this->mysqli->prepare("SELECT COUNT(*) FROM forum_replies WHERE post_id = ? LIMIT 1")){
					$stmt->bind_param('i',$postId);
					$stmt->execute();
					$stmt->bind_result($num);
					$stmt->fetch();
						$this->totalNumberOfReplies=$num;
					$stmt->close();
				}
				
                return $replies;
            }
            else
            {
                $stmt->close();
                return false;
            }
        }
        else
        {
            return false;
        }
    }
}
?>