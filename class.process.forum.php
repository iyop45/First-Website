<?php
/**
 * Functions including in class:
 * DYNAMIC:
 * remove, removeEdit, removeCommits, editExists, exists, activate, lock
 * numberOfEdits, numberOfCommits
 * NON-DYNAMIC:
 * createReply, createPost, createTopic, createCategory
 * replyParentID, postParentID, topicParentID
 * flagReply, flagPost, flagTopic, flagCategory
 * addCategoryEditSuggestion, addTopicEditSuggestion, addPostEditSuggestion, addReplyEditSuggestion
 * addCategoryEdit, addTopicEdit, addTopPostEdit, addReplyEdit
 * publishCategoryEdit, publishTopicEdit, publishPostEdit, publishReplyEdit
 **/
namespace techberry\forum;

use techberry\core\constants as constants;

class process extends constants
{
    private $mysqli;
    
    function __construct($mysqli)
    {
        $this->mysqli = $mysqli;
    }
	
	public function getAuther($type, $id)
	{
        if (array_key_exists($type, constants::$dbForumName))
        {
			$sql = "SELECT user_id 
					FROM " . constants::$forumPrefix . constants::$dbForumName[$type]['table'] . "  
					WHERE id = ?";
            if ($stmt = $this->mysqli->prepare($sql))
            {
                $stmt->bind_param('i', $id);
                $stmt->execute();
                $stmt->bind_result($user_id);
                $stmt->fetch();
				$stmt->close();
				return $user_id;
			}
        }
        return false;		
	}	
	
	public function getEditAuther($type, $id)
	{
        if (array_key_exists($type, constants::$dbForumName))
        {
			$sql = "SELECT user_id 
					FROM " . constants::$forumPrefix . constants::$dbForumName[$type]['edit']['table'] . "  
					WHERE id = ?";
            if ($stmt = $this->mysqli->prepare($sql))
            {
                $stmt->bind_param('i', $id);
                $stmt->execute();
                $stmt->bind_result($user_id);
                $stmt->fetch();
				$stmt->close();
				return $user_id;
			}
        }
        return false;	
	}
    
    public function remove($type, $id)
    {
        if (array_key_exists($type, constants::$dbForumName))
        {
            if ($stmt = $this->mysqli->prepare("
				DELETE FROM " . constants::$forumPrefix . constants::$dbForumName[$type]['table'] . " 
				WHERE id = ?"))
            {
                $stmt->bind_param('i', $id);
                $stmt->execute();
                $stmt->close();
                return true;
            }
        }
        return false;
    }
    
    public function removeEdit($type, $id)
    {
        if (array_key_exists($type, constants::$dbForumName))
        {
            if ($stmt = $this->mysqli->prepare("
				DELETE FROM " . constants::$forumPrefix . constants::$dbForumName[$type]['edit']['table'] . " 
				WHERE id = ?"))
            {
                $stmt->bind_param('i', $id);
                $stmt->execute();
                $stmt->close();
                return true;
            }
        }
        return false;
    }
    
    public function editExists($type, $id)
    {
        if (array_key_exists($type, constants::$dbForumName))
        {
            if ($stmt = $this->mysqli->prepare("
				SELECT EXISTS
				( 
					SELECT 1 
					FROM " . constants::$forumPrefix . constants::$dbForumName[$type]['edit']['table'] . "  
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
    
    public function removeCommits($type, $id)
    {
        if (array_key_exists($type, constants::$dbForumName) && !array_key_exists($type, array(
            'reply',
            'post'
        )))
        {
			$sql = "DELETE FROM " . constants::$forumPrefix . constants::$dbForumName[$type]['commit']['table'] . "
					  WHERE " . constants::$dbForumName[$type]['id'] . " = ?";
            if ($stmt = $this->mysqli->prepare($sql))
            {
                $stmt->bind_param('i', $id);
                $stmt->execute();
                $stmt->close();
                return true;
            }
        }
        return false;
    }
    
    public function activate($type, $id)
    {
        if (array_key_exists($type, constants::$dbForumName) && !array_key_exists($type, array(
            'reply',
            'post'
        )))
        {
            $this->removeCommits($type, $id);
			$sql = "UPDATE " . constants::$forumPrefix . constants::$dbForumName[$type]['table'] . "
					  SET pending = 0
					  WHERE id = ?";
            if ($stmt = $this->mysqli->prepare($sql))
            {
                $stmt->bind_param('i', $id);
                $stmt->execute();
                $stmt->close();
                return true;
            }
        }
        return false;
    }
	
	public function flag($type, $id)
	{
		$sql = "INSERT INTO  ". constants::$forumPrefix . constants::$dbForumName[$type]['flag']['table'] . " 
					( ". constants::$dbForumName[$type]['id'] . ",user_id)
					VALUES (?,?)";
		if ($stmt = $this->mysqli->prepare($sql))
		{
			$stmt->bind_param('ii', $id, $_SESSION['user_id']);
			$stmt->execute();
			$stmt->close();
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function hasFlagged($type, $id)
	{
		if ($stmt = $this->mysqli->prepare("
			SELECT 1 FROM  ". constants::$forumPrefix . constants::$dbForumName[$type]['flag']['table'] . " 
			WHERE user_id = ? AND ".constants::$dbForumName[$type]['id']." = ? LIMIT 1"))
		{
			$stmt->bind_param('ii', $_SESSION['user_id'], $id);
			$stmt->execute();
            $stmt->store_result();
            $stmt->fetch();
			if($stmt->num_rows > 0){
				return true;
			}else{
				return false;
			}
		}
		else
		{
			return false;
		}
	}
	
	public function hasCommitted($type, $id)
	{
		if ($stmt = $this->mysqli->prepare("
			SELECT 1 FROM  ". constants::$forumPrefix . constants::$dbForumName[$type]['commits']['table'] . " 
			WHERE user_id = ? LIMIT 1"))
		{
			$stmt->bind_param('i', $_SESSION['user_id']);
			$stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($hasCommitted);
            $stmt->fetch();
			if($stmt->num_rows == 1){
				return true;
			}else{
				return false;
			}
		}
		else
		{
			return false;
		}
	}

	public function commit($type, $id)
	{
		$sql = "INSERT INTO  ". constants::$forumPrefix . constants::$dbForumName[$type]['commit']['table'] . " 
					( ". constants::$dbForumName[$type]['id'] . ",user_id)
					VALUES (?,?)";
		if ($stmt = $this->mysqli->prepare($sql))
		{
			$stmt->bind_param('ii', $id, $_SESSION['user_id']);
			$stmt->execute();
			$stmt->close();
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function isLocked($type, $id)
	{
		$sql = "SELECT isLocked FROM  ". constants::$forumPrefix . constants::$dbForumName[$type]['table'] . " 
				  WHERE id = ? LIMIT 1";
		if ($stmt = $this->mysqli->prepare($sql))
		{
			$stmt->bind_param('i', $id);
			$stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($isLocked);
            $stmt->fetch();
			if($isLocked === 1){
				$stmt->close();
				return true;
			}else{
				$stmt->close();
				return false;
			}
		}
		else
		{
			return false;
		}
	}
              
	
	public function lock($type,$id)
	{
		if ($stmt = $this->mysqli->prepare("UPDATE ". constants::$forumPrefix . constants::$dbForumName[$type]['table'] . "
														SET isLocked = 1 
														WHERE id = ?"))
		{
			$stmt->bind_param('i', $id);
			$stmt->execute();
			$stmt->close();
			return true;
		}
		else
		{
			return false;
		}
	}
    
    public function numberOfEdits($type, $id)
    {
        global $const;
        if (array_key_exists($type, constants::$dbForumName))
        {
            if ($stmt = $this->mysqli->prepare("
				SELECT COUNT(*)
				FROM " . constants::$forumPrefix . constants::$dbForumName[$type]['edit']['table'] . "
				WHERE " . constants::$dbForumName[$type]['id'] . " = ?"))
            {
                $stmt->bind_param('i', $id);
                $stmt->execute();
                $stmt->bind_result($count);
                $stmt->fetch();
                $stmt->close();
                return $count;
            }
            else
            {
                return false;
            }
        }
        return false;
    }
    
    public function numberOfCommits($type, $id)
    {
        if (array_key_exists($type, constants::$dbForumName) && !array_key_exists($type, array(
            'reply',
            'post'
        )))
        {
            if ($stmt = $this->mysqli->prepare("
				SELECT COUNT(*)
				FROM " . constants::$forumPrefix . constants::$dbForumName[$type]['commit']['table'] . "
				WHERE " . constants::$dbForumName[$type]['id'] . " = ?"))
            {
                $stmt->bind_param('i', $id);
                $stmt->execute();
                $stmt->bind_result($count);
                $stmt->fetch();
                $stmt->close();
                return $count;
            }
            else
            {
                return false;
            }
        }
        return false;
    }
    /*
     *
     * THE FOLLOWING ARE NON DYNAMIC METHODS
     *
     */
    public function createReply($post_id, $content)
    {
		if ($stmt = $this->mysqli->prepare("INSERT INTO
											forum_replies (content,post_id,user_id)
											VALUES (?,?,?)"))
		{
			$stmt->bind_param('sii', $content, $post_id, $_SESSION['user_id']);
			$stmt->execute();
			$stmt->close();
			return $post_id;
		}
        else
        {
            return false;
        }
    }
    public function createPost($topic_id, $title, $content)
    {
		if ($stmt = $this->mysqli->prepare("INSERT INTO
											forum_posts (title,content,topic_id,user_id)
											VALUES (?,?,?,?)"))
		{
			$stmt->bind_param('ssii', $title, $content, $topic_id, $_SESSION['user_id']);
			$stmt->execute();
			$stmt->close();
			return $topic_id;
		}
        else
        {
            return false;
        }
    }
    public function createTopic($category_id, $title, $description)
    {
		if ($stmt = $this->mysqli->prepare("INSERT INTO
											forum_topics (title,description,category_id,user_id,pending)
											VALUES (?,?,?,?,1)"))
		{
			$stmt->bind_param('ssii', $title, $description, $category_id, $_SESSION['user_id']);
			$stmt->execute();
			$stmt->close();
			return $category_id;
		}
		else
		{
			return false;
		}
    }
    public function createCategory($title, $description)
    {
		$sql = "INSERT INTO
					forum_categories (title,description,user_id,pending)
					VALUES (?,?,?,1)";
        if ($stmt = $this->mysqli->prepare($sql))
        {
            $stmt->bind_param('ssi', $title, $description, $_SESSION['user_id']);
            $stmt->execute();
            $stmt->close();
            return true;
        }
		else
		{
			return false;
		}
    }
    public function replyParent_id($reply_id)
    {
        if ($stmt = $this->mysqli->prepare("
			SELECT post_id FROM forum_replies WHERE id=? LIMIT 1"))
        {
            $stmt->bind_param('i', $reply_id);
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($post_id);
            $stmt->fetch();
            if ($stmt->num_rows == 0)
            {
                $stmt->close();
                return false;
            }
            else
            {
                $stmt->close();
                return $post_id;
            }
        }
        else
        {
            return false;
        }
    }
    public function postParent_id($post_id)
    {
        if ($stmt = $this->mysqli->prepare("
			SELECT topic_id FROM forum_posts WHERE id = ? LIMIT 1"))
        {
            $stmt->bind_param('i', $post_id);
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($topic_id);
            $stmt->fetch();
            if ($stmt->num_rows == 0)
            {
                $stmt->close();
                return false;
            }
            else
            {
                $stmt->close();
                return $topic_id;
            }
        }
        else
        {
            return false;
        }
    }
    public function topicParent_id($topic_id)
    {
		$sql = "SELECT category_id FROM forum_topics WHERE id=? LIMIT 1";
        if ($stmt = $this->mysqli->prepare($sql))
        {
            $stmt->bind_param('i', $topic_id);
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($category_id);
            $stmt->fetch();
            if ($stmt->num_rows == 0)
            {
                $stmt->close();
                return false;
            }
            else
            {
                $stmt->close();
                return $category_id;
            }
        }
        else
        {
            return false;
        }
    }
    
    public function editCategoryParent_id($categoryEdit_id)
    {
        if ($stmt = $this->mysqli->prepare("
			SELECT category_id FROM forum_categoryEdits WHERE id=? LIMIT 1"))
        {
            $stmt->bind_param('i', $categoryEdit_id);
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($category_id);
            $stmt->fetch();
            if ($stmt->num_rows == 0)
            {
                $stmt->close();
                return false;
            }
            else
            {
                $stmt->close();
                return $category_id;
            }
        }
        else
        {
            return false;
        }
    }
    
    public function editTopicCategory_id($topicEdit_id)
    {
        if ($stmt = $this->mysqli->prepare("
			SELECT t.category_id FROM forum_topicEdits AS te
			INNER JOIN forum_topics AS t
			WHERE te.id = ?
			LIMIT 1"))
        {
            $stmt->bind_param('i', $topicEdit_id);
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($topic_id);
            $stmt->fetch();
            if ($stmt->num_rows == 0)
            {
                $stmt->close();
                return false;
            }
            else
            {
                $stmt->close();
                return $topic_id;
            }
        }
        else
        {
            return false;
        }
    }
    
    public function editPostTopic_id($postEdit_id)
    {
        if ($stmt = $this->mysqli->prepare("
			SELECT p.topic_id FROM forum_postEdits as pe
			INNER JOIN forum_posts as p
			ON(p.id = pe.post_id)
			WHERE pe.id = ? 
			LIMIT 1"))
        {
            $stmt->bind_param('i', $postEdit_id);
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($topic_id);
            $stmt->fetch();
            if ($stmt->num_rows == 0)
            {
                $stmt->close();
                return false;
            }
            else
            {
                $stmt->close();
                return $topic_id;
            }
        }
        else
        {
            return false;
        }
    }
    
    public function editReplyPost_id($replyEdit_id)
    {
        if ($stmt = $this->mysqli->prepare("
			SELECT r.post_id FROM forum_replyEdits AS re
			INNER JOIN forum_replies AS r
			ON(r.id = re.reply_id)
			WHERE re.id = ?
			LIMIT 1"))
        {
            $stmt->bind_param('i', $replyEdit_id);
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($post_id);
            $stmt->fetch();
            if ($stmt->num_rows == 0)
            {
                $stmt->close();
                return false;
            }
            else
            {
                $stmt->close();
                return $post_id;
            }
        }
        else
        {
            return false;
        }
    }
    
    public function addCategoryEditSuggestion($category_id, $title, $description, $reason)
    {
        if ($stmt = $this->mysqli->prepare("
			INSERT INTO forum_categoryEdits(
											category_id,
											title,
											description,
											user_id,
											reason
			)
			VALUES (?,?,?,?,?)"))
        {
            $stmt->bind_param('issis', $category_id, $title, $description, $_SESSION['user_id'], $reason);
            $stmt->execute();
            $stmt->close();
            return true;
        }
        else
        {
            return false;
        }
    }
    public function addTopicEditSuggestion($topic_id, $title, $description, $reason)
    {
        if ($stmt = $this->mysqli->prepare("
			INSERT INTO forum_topicEdits(
											topic_id,
											title,
											description,
											user_id,
											reason
			)
			VALUES (?,?,?,?,?)"))
        {
            $stmt->bind_param('issis', $topic_id, $title, $description, $_SESSION['user_id'], $reason);
            $stmt->execute();
            $stmt->close();
            return true;
        }
        else
        {
            return false;
        }
    }
    public function addPostEditSuggestion($post_id, $title, $content, $reason)
    {
        if ($stmt = $this->mysqli->prepare("
			INSERT INTO forum_postEdits(
											post_id,
											title,
											content,
											user_id,
											reason
			)
			VALUES (?,?,?,?,?)"))
        {
            $stmt->bind_param('issis', $post_id, $title, $content, $_SESSION['user_id'], $reason);
            $stmt->execute();
            $stmt->close();
            return true;
        }
        else
        {
            return false;
        }
    }
    public function addReplyEditSuggestion($reply_id, $content, $reason)
    {
        if ($stmt = $this->mysqli->prepare("
			INSERT INTO forum_replyEdits(
											reply_id,
											content,
											user_id,
											reason
			)
			VALUES (?,?,?,?,?)"))
        {
            $stmt->bind_param('isis', $reply_id, $content, $_SESSION['user_id'], $reason);
            $stmt->execute();
            $stmt->close();
            return true;
        }
        else
        {
            return false;
        }
    }
    public function addCategoryEdit($category_id, $title, $description)
    {
        if ($stmt = $this->mysqli->prepare("
			UPDATE forum_categories
			SET title=?,
				description=?
			WHERE id = ?"))
        {
            $stmt->bind_param('ssi', $title, $description, $category_id);
            $stmt->execute();
            $stmt->close();
            return true;
        }
        else
        {
            return false;
        }
    }
    public function addTopicEdit($topic_id, $title, $description)
    {
        if ($stmt = $this->mysqli->prepare("
			UPDATE forum_topics
			SET title=?,
				description=?
			WHERE id = ?"))
        {
            $stmt->bind_param('ssi', $title, $description, $topic_id);
            $stmt->execute();
            $stmt->close();
            return true;
        }
        else
        {
            return false;
        }
    }
    public function addPostEdit($post_id, $title, $content)
    {
        if ($stmt = $this->mysqli->prepare("
			UPDATE forum_posts
			SET title=?,
				content=?
			WHERE id = ?"))
        {
            $stmt->bind_param('ssi', $title, $content, $post_id);
            $stmt->execute();
            $stmt->close();
            return true;
        }
        else
        {
            return false;
        }
    }
    public function addReplyEdit($reply_id, $content)
    {
        if ($stmt = $this->mysqli->prepare("
			UPDATE forum_replies
			SET content=?
			WHERE id = ?"))
        {
            $stmt->bind_param('si', $content, $reply_id);
            $stmt->execute();
            $stmt->close();
            return true;
        }
        else
        {
            return false;
        }
    }
    
    public function publishReplyEdit($edit_id)
    {
        if ($stmt = $this->mysqli->prepare("
			UPDATE forum_replies
			SET content =
			(
				SELECT content FROM forum_replyEdits WHERE id = ?
			)
			WHERE id = 
			(
				SELECT reply_id FROM forum_replyEdits WHERE id = ?
			)"))
        {
            $stmt->bind_param('ii', $edit_id, $edit_id);
            $stmt->execute();
            $stmt->close();
            return true;
        }
        else
        {
            return false;
        }
    }
    
    public function publishPostEdit($edit_id)
    {
        if ($stmt = $this->mysqli->prepare("
			UPDATE forum_posts
			SET title =
			(
				SELECT title FROM forum_postEdits WHERE id = ?
			),
				content =
			(
				SELECT content FROM forum_postEdits WHERE id = ?
			)
			WHERE id = 
			(
				SELECT post_id FROM forum_postEdits WHERE id = ?
			)"))
        {
            $stmt->bind_param('iii', $edit_id, $edit_id, $edit_id);
            $stmt->execute();
            $stmt->close();
            return true;
        }
        else
        {
            return false;
        }
    }
    
    public function publishTopicEdit($edit_id)
    {
        if ($stmt = $this->mysqli->prepare("
			UPDATE forum_topics
			SET title =
			(
				SELECT title FROM forum_topicEdits WHERE id = ?
			),
				description =
			(
				SELECT description FROM forum_topicEdits WHERE id = ?
			)
			WHERE id = 
			(
				SELECT topic_id FROM forum_topicEdits WHERE id = ?
			)"))
        {
            $stmt->bind_param('iii', $edit_id, $edit_id, $edit_id);
            $stmt->execute();
            $stmt->close();
            return true;
        }
        else
        {
            return false;
        }
    }
    
    public function publishCategoryEdit($edit_id)
    {
        if ($stmt = $this->mysqli->prepare("
			UPDATE forum_categories
			SET title =
			(
				SELECT title FROM forum_categoryEdits WHERE id = ?
			),
				description =
			(
				SELECT description FROM forum_categoryEdits WHERE id = ?
			)
			WHERE id = 
			(
				SELECT category_id FROM forum_categoryEdits WHERE id = ?
			)"))
        {
            $stmt->bind_param('iii', $edit_id, $edit_id, $edit_id);
            $stmt->execute();
            $stmt->close();
            return true;
        }
        else
        {
            return false;
        }
    }
}
?>