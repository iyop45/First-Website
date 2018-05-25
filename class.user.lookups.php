<?php
namespace techberry\user;

/*
This class is for direct calls for logged in users
*/

class lookups
{
    
    private $mysqli;
    
    function __construct($mysqli)
    {
        $this->mysqli = $mysqli;
    }
    
    /*
    Check if user already exists
    */
    public function userExists($username)
    {
        if ($stmt = $this->mysqli->prepare("
				SELECT (EXISTS(
							SELECT 1 FROM users WHERE username = ?
							))"))
        {
            $stmt->bind_param('s', $username);
            $stmt->execute();
            $stmt->bind_result($exists);
            $stmt->fetch();
            $stmt->close();
            return $exists;
        }
        else
        {
            return false;
        }
    }
	
    public function userID($username)
    {
        if ($stmt = $this->mysqli->prepare("SELECT id FROM users WHERE username = ?"))
        {
            $stmt->bind_param('s', $username);
            $stmt->execute();
            $stmt->bind_result($id);
            $stmt->fetch();
            $stmt->close();
            return $id;
        }
        else
        {
            return false;
        }
    }
	
	public function userData($collumn,$id)
	{
        if ($stmt = $this->mysqli->prepare("SELECT $collumn FROM users WHERE id = ?"))
        {
            $stmt->bind_param('i', $id);
            $stmt->execute();
            $stmt->bind_result($data);
            $stmt->fetch();
            $stmt->close();
            return $data;
        }
        else
        {
            return false;
        }	
	}
    
    /*
    $identifier can either be a user_id or the username
    the check is made dependant on if string or int
    */
    public function userInfo($identifier = null)
    {
        /* 
        If no identifier (or invalid) is
        passed through then return false
        */
        if ($identifier === null)
        {
            return false;
        }
        if (is_int($identifier))
        {
            $identifier_type = 'user_id';
        }
        else if (is_string($identifier))
        {
            $identifier_type = 'username';
        }
        else
        {
            return false;
        }
        $sql = "
			SELECT u.id,
				   u.username,
				   u.reputation,
				   IF(LENGTH(u.avatar) > 0, u.avatar , CONCAT('http://vanillicon.com/',md5(u.email))),
				   IF(u.gender = 'M', 'Male', 'Female'),
				   IF(u.birth_date > '', u.birth_date, '-'),
				   IF(u.homepage > '', u.homepage, '-'),
				   IF(u.occupation > '', u.occupation, '-'),
				   IF(u.interests > '', u.interests, '-'),
				   u.cover,
				   u.is_bot,
				   g.name
				   FROM users AS u
				   LEFT JOIN user_groups AS g 
						ON(g.id = u.group_id)
				   WHERE
		";
        if ($identifier_type == 'user_id')
        {
            $sql .= "u.id = ? LIMIT 1";
        }
        else
        {
            $sql .= "u.username  = ? LIMIT 1";
        }
        if ($stmt = $this->mysqli->prepare($sql))
        {
            if ($identifier_type == 'user_id')
            {
                $stmt->bind_param('i', $identifier);
            }
            else
            {
                $stmt->bind_param('s', $identifier);
            }
            $stmt->execute();
            $stmt->bind_result($id, $username, $reputation, $avatar, $gender, $birth_date, $homepage, $occupation, $interests, $cover, $is_bot, $group_name);
            $stmt->fetch();
            $info = array(
                'id' => $id,
                'username' => $username,
                'reputation' => $reputation,
                'avatar' => $avatar,
                'gender' => $gender,
                'birth_date' => $birth_date,
                'homepage' => $homepage,
                'occupation' => $occupation,
                'interests' => $interests,
                'cover' => $cover,
                'is_bot' => $is_bot,
                'group_name' => $group_name
            );
            $stmt->close();
            return $info;
        }
        else
        {
            $this->notifyClass()->source()->type('error')->msg('Unable to retrieve user info')->process();
            return false;
        }
    }
    
    public function getUserBadgeCounts($user_id)
    {
        if ($stmt = $this->mysqli->prepare("
			SELECT * FROM(
			(SELECT
				COUNT(*) FROM user_badges AS uba
					INNER JOIN badges AS ba
					 ON(ba.id = uba.id_badge)
					WHERE uba.user_id = ?
					AND ba.value = 3) AS bronze_count,
			(SELECT
				COUNT(*) FROM user_badges AS ubb
					INNER JOIN badges AS bb
					 ON(bb.id = ubb.id_badge)
					WHERE ubb.user_id = ?
					AND bb.value = 2) AS silver_count,
			(SELECT
				COUNT(*) FROM user_badges AS ubc
					INNER JOIN badges AS bc
					 ON(bc.id = ubc.id_badge)
					WHERE ubc.user_id = ?
					AND bc.value = 1) AS gold_count) LIMIT 1"))
        {
            $stmt->bind_param('iii', $user_id, $user_id, $user_id);
            $stmt->execute();
            $stmt->bind_result($bronze_count, $silver_count, $gold_count);
            $stmt->fetch();
            $stmt->close();
            return array(
                'bronze_count' => $bronze_count,
                'silver_count' => $silver_count,
                'gold_count' => $gold_count
            );
        }
        else
        {
            $this->notifyClass()->source()->type('error')->msg('Unable to retrieve user badge count')->process();
            return false;
        }
    }
    
    public function getUserbadges($user_id, $limit = 100)
    {
        if ($stmt = $this->mysqli->prepare("
			SELECT b.id,
				   b.name,
				   b.description,
				   b.value,
				   ub.accumulated
				   FROM user_badges AS ub
				   INNER JOIN badges AS b
					ON(b.id = ub.id_badge)
				   WHERE ub.user_id = ?
				   LIMIT ?"))
        {
            $stmt->bind_param('ii', $user_id, $limit);
            $stmt->execute();
            $stmt->bind_result($id, $name, $description, $value, $accumulated);
            $badges = array();
            while ($stmt->fetch())
            {
                $badges[] = array(
                    'id' => $id,
                    'name' => $name,
                    'description' => $description,
                    'value' => $value,
                    'accumulated' => $accumulated
                );
            }
            $stmt->close();
            return $badges;
        }
        else
        {
            $this->notifyClass()->source()->type('error')->msg('Unable to retrieve user badges')->process();
            return false;
        }
    }
    
    public function getUserWallPosts($user_id, $start_from = 0)
    {
        if ($stmt = $this->mysqli->prepare("
			SELECT wp.post,
				   wp.date,
				   u.username,
				   u.is_bot,
				   IF(LENGTH(u.avatar) > 0, u.avatar , CONCAT('http://vanillicon.com/',md5(u.email)))
				   FROM user_wallPosts AS wp
				   INNER JOIN users AS u
					ON(u.id = wp.from_user)
				   WHERE wp.user = ?
				   ORDER BY wp.date DESC
				   LIMIT ?, 20"))
        {
            $stmt->bind_param('ii', $user_id, $start_from);
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($post, $date, $username, $is_bot, $avatar);
            $wallPosts = array();
            while ($stmt->fetch())
            {
                $wallPosts[] = array(
                    'post' => $post,
                    'date' => $date,
                    'username' => $username,
                    'is_bot' => $is_bot,
                    'avatar' => $avatar
                );
            }
            if ($stmt->num_rows == 0)
            {
                $stmt->close();
                return false;
            }
            else
            {
                $stmt->close();
                return $wallPosts;
            }
        }
        else
        {
            $this->notify->source()->type('error')->msg('Unable to retrieve wall posts')->process();
            return false;
        }
    }
    /*
		Return a last of all online users on a given page
	 */
    public function getActiveUsersOnPage($page)
    {
		$sql = "SELECT u.id, 
					u.username, 
					IF(Length(u.avatar) > 0, u.avatar, Concat('http://vanillicon.com/', Md5(u.email))) 
					FROM  users AS u 
					WHERE  u.last_active > Now() - INTERVAL 1 MINUTE 
					AND u.last_page = ? 
					LIMIT  50";
        if ($stmt = $this->mysqli->prepare($sql))
        {
            $stmt->bind_param('s', $page);
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($id, $username, $avatar);
            $users = array();
            if ($stmt->num_rows == 0)
            {
                $stmt->close();
                return false;
            }
            else
            {
                while ($stmt->fetch())
                {
                    $users[] = array(
					'id' => $id,
					'username' => $username,
					'avatar' => $avatar
                    );
                }
                $stmt->close();
                return $users;
            }
        }
        else
        {
            return false;
        }
    }
    /*
    Check if the user is a bot or not
    */
    public function is_bot($username)
    {
        if ($stmt = $this->mysqli->prepare("
				SELECT is_bot FROM users WHERE username = ?
				"))
        {
            $stmt->bind_param('s', $username);
            $stmt->execute();
            $stmt->bind_result($is_bot);
            $stmt->fetch();
            $stmt->close();
            if ($is_bot == 0)
            {
                return false;
            }
            else
            {
                return true;
            }
        }
        else
        {
            return false;
        }
    }
    
    public function isOnline($user_id)
    {
        if ($stmt = $this->mysqli->prepare("
			SELECT IF(last_active < (NOW() - INTERVAL 1 MINUTE), 0, 1)
				FROM users WHERE id = ? LIMIT 1"))
        {
            $stmt->bind_param('i', $user_id);
            $stmt->execute();
            $stmt->bind_result($isOnline);
            $stmt->fetch();
            $stmt->close();
            if ($isOnline == 1)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
    }
	
	public function userSettings($user_id)
	{
        if ($stmt = $this->mysqli->prepare("
			SELECT settings_disableAPIAccess,
						settings_subscribedToNewsletter,
						settings_emailNotifications,
						settings_showLockedButtons
						FROM users WHERE id = ?
						LIMIT 1"))
        {
            $stmt->bind_param('i', $user_id);
            $stmt->execute();
            $stmt->bind_result($disabledAPIAccess,$subscribedToNewsletter,$emailNotifications,$showLockedButtons);
            $stmt->fetch();
			$settings = array(
								'disabledAPIAccess'=>$disabledAPIAccess,
								'subscribedToNewsletter'=>$subscribedToNewsletter,
								'emailNotifications'=>$emailNotifications,
								'showLockedButtons'=>$showLockedButtons,		
										);
            $stmt->close();
			return $settings;
        }
        else
        {
            return false;
        }	
	}
	
    /*
    This is the main function called by
    the notifications frame
    ** SQL query may soon be exported considering
    ** how large it is and how much it will need
    ** to grow
	
		the polling method only checks to see if there are notifications where seen = 0
		it doesn't care what they are, so just return true if num_rows > 0
    */
    public function userNotifications($isPolling = 0)
    {
		$sql = "";
		if($isPolling == 1){
			$sql .= "SELECT (EXISTS(";
		}
		$sql .= "
SELECT  n.id,
		CASE
			WHEN t.title = 'gained_follower'
				OR
				 t.title = 'lost_follower'
				OR
				 t.title ='new_message'
			THEN
			(
				SELECT
				REPLACE
				(
					t.template,
					'{username}',
					(
						SELECT username
						FROM users
						WHERE id = n.source_id
					)
				)
			)
			WHEN t.title = 'earnt_new_badge'
			THEN
			(
				SELECT
				REPLACE
				(
					t.template,
					'{badge}',
					(
						SELECT name
						FROM badges
						WHERE id = n.source_id
					)
				)
			)
			WHEN t.title = 'new_privilege'
				OR
				 t.title = 'lost_privilege'
			THEN
			(
				SELECT
				REPLACE
				(
					t.template,
					'{action_id}',
					(
						SELECT action
						FROM permissions
						WHERE id = n.source_id
					)
				)
			)
			WHEN t.title = 'forum_replyEdit_published'
				OR
				 t.title = 'forum_replyEdit_removed'
				OR
				 t.title = 'forum_replyEdit'
				OR
				 t.title = 'forum_postEdit'
				OR
				 t.title = 'forum_newReply'
				OR
				 t.title = 'forum_replyFlagged'
				OR
				 t.title = 'forum_replyLocked'
			THEN
			(
				SELECT
				REPLACE
				(
					t.template,
					'{post_id}',
					(
						n.source_id
					)
				)
			)
			WHEN t.title = 'forum_postEdit_published'
				OR
				 t.title = 'forum_postEdit_removed'
				OR
				 t.title = 'forum_postFlagged'
				OR
				 t.title = 'forum_postLocked'
			THEN
			(
				SELECT
				REPLACE
				(
					t.template,
					'{topic_id}',
					(
						n.source_id
					)
				)
			)
			WHEN t.title = 'forum_topicEdit_published'
				OR
				 t.title = 'forum_topicEdit_published'
				OR
				 t.title = 'forum_topicCommit'
				OR
				 t.title = 'forum_topicActivated'
				OR
				 t.title = 'forum_topicFlagged'
				OR
				 t.title = 'forum_topicLocked'
			THEN
			(
				SELECT
				REPLACE
				(
					t.template,
					'{category_id}',
					(
						n.source_id
					)
				)
			)
			WHEN t.title = 'qa_answeredQuestion'
				OR
				 t.title = 'qa_commentQuestion'
				OR
				 t.title = 'qa_upVotedQuestion'
				OR
				 t.title = 'qa_downVotedQuestion'
				OR
				 t.title = 'qa_acceptedAnswer'
				OR
				 t.title = 'qa_upVotedAnswer'
				OR
				 t.title = 'qa_downVotedQuestion'
				OR
				 t.title = 'qa_commentAnswer'
			THEN
			(
				SELECT
				REPLACE
				(
					t.template,
					'{question_id}',
					(
						n.source_id
					)
				)
			)
			WHEN t.title = 'news_repliedComment'
			THEN
			(
				SELECT
				REPLACE
				(
					t.template,
					'{article_id}',
					(
						n.source_id
					)
				)
			)
			ELSE
				t.template
		END,
		t.points,
		t.type,
		n.date
FROM user_notifications AS n
INNER JOIN notification_templates AS t ON(n.template_id = t.id)
WHERE n.user_id = ? ";
	if($isPolling == 1){
		$sql .= "AND n.seen = 0 ";
	}
	$sql .= "ORDER BY n.date DESC LIMIT 30";
	if($isPolling == 1){
		$sql .= "))";
	}
    if ($stmt = $this->mysqli->prepare($sql))
        {
			$stmt->bind_param('i', $_SESSION['user_id']);
			
            $stmt->execute();
			
			if($isPolling == 1){
				$stmt->bind_result($exists);
				$stmt->fetch();
				$stmt->close();
				return $exists;
			}
			
            $stmt->bind_result($id, $content, $reputation, $type, $date);
            $notification = array();
            while ($stmt->fetch())
            {
                $notification[] = array(
                    'id' => $id,
                    'content' => $content,
                    'reputation' => $reputation,
                    'type' => $type,
                    'date' => $date
                );
            }
            $stmt->close();
            return $notification;
        }
        else
        {
            return false;
        }
    }
    /*
    Returns graph data for a users reputation
    */
    public function reputationInfo($user_id)
    {
        if ($stmt = $this->mysqli->prepare("
			SELECT value,date FROM user_points
				WHERE id_from = ?
				ORDER BY date DESC
				LIMIT 5"))
        {
            $stmt->bind_param('i', $user_id);
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($value, $date);
            $reputationInfo = array();
            if ($stmt->num_rows == 0)
            {
                $stmt->close();
                return false;
            }
            else
            {
                while ($stmt->fetch())
                {
                    $reputationInfo[] = array(
                        'value' => $value,
                        'date' => $date
                    );
                }
                $stmt->close();
                return $reputationInfo;
            }
        }
        else
        {
            return false;
        }
    }

	public function topFollowed($limit=5)
	{
		return array();
	}

}