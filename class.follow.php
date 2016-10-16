<?php
namespace techberry\core;

class follow
{
    
    private $mysqli;
    
    function __construct($mysqli)
    {
        $this->mysqli = $mysqli;
    }
    
    public function follow($username)
    {
        if ($stmt = $this->mysqli->prepare("
				INSERT INTO 
					user_follows (user,followed) 
					VALUES 
						(
							?,
							(
								SELECT id FROM users WHERE username = ?
							)
						)
							"))
        {
            $stmt->bind_param('is', $_SESSION['user_id'], $username);
            $stmt->execute();
            $stmt->close();
            return true;
        }
        else
        {
            return false;
        }
    }
	
    
    public function unFollow($username)
    {
        if ($stmt = $this->mysqli->prepare("
				DELETE FROM user_follows WHERE user = ?
				AND followed = 
							(
								SELECT id FROM users WHERE username = ?
							)"))
        {
            $stmt->bind_param('is', $_SESSION['user_id'], $username);
            $stmt->execute();
            $stmt->close();
            return true;
        }
        else
        {
            return false;
        }
    }
    
    public function isFollowing($username)
    {
        if ($stmt = $this->mysqli->prepare("
				SELECT 
					EXISTS(
						SELECT 1
						FROM user_follows AS f
						WHERE f.user = ?
						AND f.followed = (
										SELECT id FROM users WHERE username = ?
												)
					)"))
        {
            $stmt->bind_param('is', $_SESSION['user_id'], $username);
            $stmt->execute();
            $stmt->bind_result($isFollowing);
            $stmt->fetch();
            $stmt->close();
            if ($isFollowing == 1)
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
    
    public function followCount()
    {
        if ($stmt = $this->mysqli->prepare("SELECT COUNT(*) FROM user_follows WHERE user = ?"))
        {
            $stmt->bind_param('i', $_SESSION['user_id']);
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
    
    /*
    Used by the online_following frame w/ instant messenger
    returns all the users online that the user is following
    ** getFollowing() but for only online users
    */
    public function onlineFollowing($user_id)
    {
        if ($stmt = $this->mysqli->prepare("
				SELECT
					u.id,
					u.username,
					IF(LENGTH(u.avatar) > 0, u.avatar , CONCAT('http://vanillicon.com/',md5(u.email)))
					FROM users AS u
					INNER JOIN user_follows AS f
						ON(f.followed = u.id)
					WHERE f.user = ?
					AND u.last_active > (NOW() - INTERVAL 1 MINUTE)
				"))
        {
            $stmt->bind_param('i', $user_id);
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($id, $username, $avatar);
            if ($stmt->num_rows == 0)
            {
                $stmt->close();
                return array(
                    'error' => 'No users, of whom you\'re, following are online'
                );
            }
            else
            {
                $data = array();
                while ($stmt->fetch())
                {
                    $data[] = array(
                        'id' => $id,
                        'username' => $username,
                        'avatar' => $avatar
                    );
                }
                $stmt->close();
                return array(
                    'success' => $data
                );
            }
        }
        else
        {
            return array(
                'error' => 'Failed to execute query'
            );
        }
    }
    
    /*
    Return a list of all users the current user is following
    ** May need to put limits on this query soon
    */
    public function getFollowing($user_id)
    {
        if ($stmt = $this->mysqli->prepare("
					SELECT
						u.id,
						u.username,
						IF(LENGTH(u.avatar) > 0, u.avatar , CONCAT('http://vanillicon.com/',md5(u.email))),
						IF(u.last_active < (NOW() - INTERVAL 1 MINUTE), 'offline', 'online'),
						(SELECT
							COUNT(*) FROM user_badges AS uba
								INNER JOIN badges AS ba
								 ON(ba.id = uba.id_badge)
								WHERE uba.user_id = u.id
								AND ba.value = 3) AS bronze_count,
						(SELECT
							COUNT(*) FROM user_badges AS ubb
								INNER JOIN badges AS bb
								 ON(bb.id = ubb.id_badge)
								WHERE ubb.user_id = u.id
								AND bb.value = 2) AS silver_count,
						(SELECT
							COUNT(*) FROM user_badges AS ubc
								INNER JOIN badges AS bc
								 ON(bc.id = ubc.id_badge)
								WHERE ubc.user_id = u.id
								AND bc.value = 1) AS gold_count
						FROM users AS u
						INNER JOIN user_follows AS f
							ON(f.followed = u.id)
						WHERE f.user = ?
				"))
        {
            $stmt->bind_param('i', $user_id);
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($id, $username, $avatar, $online_status, $bronze_count, $silver_count, $gold_count);
            $following = array();
            while ($stmt->fetch())
            {
                if ($id != $user_id)
                {
                    $following[] = array(
                        'id' => $id,
                        'username' => $username,
                        'avatar' => $avatar,
                        'online_status' => $online_status,
                        'bronze_count' => $bronze_count,
                        'silver_count' => $silver_count,
                        'gold_count' => $gold_count
                    );
                }
            }
            $stmt->close();
            return $following;
        }
        else
        {
            return false;
        }
    }
    
    /*
    Return a list of all the followers of a current user
    ** May need to put limits on this query soon
    */
    public function getFollowers($user_id)
    {
        if ($stmt = $this->mysqli->prepare("
					SELECT
						u.id,
						u.username,
						IF(LENGTH(u.avatar) > 0, u.avatar , CONCAT('http://vanillicon.com/',md5(u.email))),
						IF(u.last_active < (NOW() - INTERVAL 1 MINUTE), 'offline', 'online'),
						(SELECT
							COUNT(*) FROM user_badges AS uba
								INNER JOIN badges AS ba
								 ON(ba.id = uba.id_badge)
								WHERE uba.user_id = u.id
								AND ba.value = 3) AS bronze_count,
						(SELECT
							COUNT(*) FROM user_badges AS ubb
								INNER JOIN badges AS bb
								 ON(bb.id = ubb.id_badge)
								WHERE ubb.user_id = u.id
								AND bb.value = 2) AS silver_count,
						(SELECT
							COUNT(*) FROM user_badges AS ubc
								INNER JOIN badges AS bc
								 ON(bc.id = ubc.id_badge)
								WHERE ubc.user_id = u.id
								AND bc.value = 1) AS gold_count
						FROM users AS u
						INNER JOIN user_follows AS f
							ON(f.user = u.id)
						WHERE f.followed = ?
				"))
        {
            $stmt->bind_param('i', $user_id);
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($id, $username, $avatar, $online_status, $bronze_count, $silver_count, $gold_count);
            $followers = array();
            while ($stmt->fetch())
            {
                if ($id != $user_id)
                {
                    $followers[] = array(
                        'id' => $id,
                        'username' => $username,
                        'avatar' => $avatar,
                        'online_status' => $online_status,
                        'bronze_count' => $bronze_count,
                        'silver_count' => $silver_count,
                        'gold_count' => $gold_count
                    );
                }
            }
            $stmt->close();
            return $followers;
        }
        else
        {
            return false;
        }
    }
    
	public $totalNumberOfFollowersActivities;
    public function followersActivity($start_from = 0)
    {
        if ($stmt = $this->mysqli->prepare("
SELECT SQL_CALC_FOUND_ROWS  type, data_ ,title ,content,date_,username,avatar FROM
(
	SELECT 'wallPost' AS type,
		   wallUser.username AS data_,
		   0 AS title,
		   wp.post AS content,
		   wp.date AS date_,
		   u.username AS username,
		   IF(LENGTH(u.avatar) > 0, u.avatar , CONCAT('http://vanillicon.com/',md5(u.email))) AS avatar
		   FROM user_wallPosts AS wp
		   INNER JOIN users AS wallUser
			ON(wallUser.id = wp.user)
		   INNER JOIN users AS u
			ON(u.id = wp.from_user)
		   WHERE u.id IN
				(
					SELECT followed FROM user_follows
						WHERE user = ?
				)
	UNION ALL
	SELECT 'forumCategory' AS type,
		   fc.id AS data_,
		   fc.title AS title,
		   LEFT(fc.description,100) AS content,
		   fc.date AS date_,
		   u1.username AS username,
		   IF(LENGTH(u1.avatar) > 0, u1.avatar , CONCAT('http://vanillicon.com/',md5(u1.email))) AS avatar
		   FROM forum_categories AS fc
		   INNER JOIN users AS u1
			ON(u1.id = fc.user_id)
		   WHERE u1.id IN 
				(
					SELECT followed FROM user_follows
						WHERE user = ?
				)
	UNION ALL
	SELECT 'forumTopic' AS type,
		   ft.category_id AS data_,
		   ft.title AS title,
		   LEFT(ft.description,100) AS content,
		   ft.date AS date_,
		   u2.username AS username,
		   IF(LENGTH(u2.avatar) > 0, u2.avatar , CONCAT('http://vanillicon.com/',md5(u2.email)))
		   FROM forum_topics AS ft
		   INNER JOIN users AS u2
			ON(u2.id = ft.user_id)
		   WHERE u2.id IN 
				(
					SELECT followed FROM user_follows
						WHERE user = ?
				)
	UNION ALL
	SELECT 'forumPost' AS type,
		   fp.topic_id AS data_,
		   fp.title AS title,
		   LEFT(fp.content,100) AS content,
		   fp.date AS date_,
		   u3.username AS username,
		   IF(LENGTH(u3.avatar) > 0, u3.avatar , CONCAT('http://vanillicon.com/',md5(u3.email)))
		   FROM forum_posts AS fp
		   INNER JOIN users AS u3
			ON(u3.id = fp.user_id)
		   WHERE u3.id IN
				(
					SELECT followed FROM user_follows
						WHERE user = ?
				)
	UNION ALL
	SELECT 'forumReply' AS type,
		   fr.post_id AS data_,
		   0 AS title,
		   LEFT(fr.content,100) AS content,
		   fr.date AS date_,
		   u4.username AS username,
		   IF(LENGTH(u4.avatar) > 0, u4.avatar , CONCAT('http://vanillicon.com/',md5(u4.email)))
		   FROM forum_replies AS fr
		   INNER JOIN users AS u4
			ON(u4.id = fr.user_id)
		   WHERE u4.id IN 
				(
					SELECT followed FROM user_follows
						WHERE user = ?
				)
	UNION ALL
	SELECT 'newsComment' AS type,
		   nc.news_id AS data_,
		   0 AS title,
		   LEFT(nc.comment,100) AS content,
		   nc.date AS date_,
		   u4.username AS username,
		   IF(LENGTH(u4.avatar) > 0, u4.avatar , CONCAT('http://vanillicon.com/',md5(u4.email)))
		   FROM news_comments AS nc
		   INNER JOIN users AS u4
			ON(u4.id = nc.user_id)
		   WHERE u4.id IN 
				(
					SELECT followed FROM user_follows
						WHERE user = ?
				)
	UNION ALL
	SELECT 'tutPage' AS type,
		   tp.group_id AS data_,
		   tp.title AS title,
		   LEFT(tp.content,100) AS content,
		   tp.date AS date_,
		   u5.username AS username,
		   IF(LENGTH(u5.avatar) > 0, u5.avatar , CONCAT('http://vanillicon.com/',md5(u5.email)))
		   FROM tuts_pages AS tp
		   INNER JOIN users AS u5
			ON(u5.id = tp.user_id)
		   WHERE u5.id IN
				(
					SELECT followed FROM user_follows
						WHERE user = ?
				)
	UNION ALL
	SELECT 'tutGroup' AS type,
		   0 AS data_,
		   tg.title AS title,
		   LEFT(tg.description,100) AS content,
		   tg.date AS date_,
		   u6.username AS username,
		   IF(LENGTH(u6.avatar) > 0, u6.avatar , CONCAT('http://vanillicon.com/',md5(u6.email)))
		   FROM tuts_pages AS tg
		   INNER JOIN users AS u6
			ON(u6.id = tg.user_id)
		   WHERE u6.id IN 
				(
					SELECT followed FROM user_follows
						WHERE user = ?
				)
	UNION ALL
	SELECT 'qaAnswer' AS type,
		   0 AS data_,
		   0 AS title,
		   LEFT(qa.content,100) AS content,
		   qa.date AS date_,
		   u7.username AS username,
		   IF(LENGTH(u7.avatar) > 0, u7.avatar , CONCAT('http://vanillicon.com/',md5(u7.email)))
		   FROM qa_answers AS qa
		   INNER JOIN users AS u7
			ON(u7.id = qa.user_id)
		   WHERE u7.id IN
				(
					SELECT followed FROM user_follows
						WHERE user = ?
				)
	UNION ALL
	SELECT 'qaQuestions ' AS type,
		   0 AS data_,
		   qq.title AS title,
		   LEFT(qq.content,100) AS content,
		   qq.date AS date_,
		   u8.username AS username,
		   IF(LENGTH(u8.avatar) > 0, u8.avatar , CONCAT('http://vanillicon.com/',md5(u8.email)))
		   FROM qa_questions AS qq
		   INNER JOIN users AS u8
			ON(u8.id = qq.user_id)
		   WHERE u8.id IN
				(
					SELECT followed FROM user_follows
						WHERE user = ?
				)
	UNION ALL
	SELECT 'qaComment ' AS type,
		   0 AS data_,
		   0 AS title,
		   LEFT(qc.content,100) AS content,
		   qc.date AS date_,
		   u9.username AS username,
		   IF(LENGTH(u9.avatar) > 0, u9.avatar , CONCAT('http://vanillicon.com/',md5(u9.email)))
		   FROM qa_comments AS qc
		   INNER JOIN users AS u9
			ON(u9.id = qc.user_id)
		   WHERE u9.id IN
				(
					SELECT followed FROM user_follows
						WHERE user = ?
				)
) AS t
ORDER BY t.date_ DESC LIMIT ?,20
			"))
        {
			// 9x integer params
            $stmt->bind_param('iiiiiiiiiiii', $_SESSION['user_id'], $_SESSION['user_id'], $_SESSION['user_id'],
														 $_SESSION['user_id'], $_SESSION['user_id'], $_SESSION['user_id'], 
														 $_SESSION['user_id'], $_SESSION['user_id'], $_SESSION['user_id'],
														$_SESSION['user_id'], $_SESSION['user_id'], $start_from);
            $stmt->execute();
            $stmt->bind_result($type, $data, $title, $content, $date, $username, $avatar);
            $activity = array();
            while ($stmt->fetch())
            {
                $activity[] = array(
                    'type' => $type,
                    'data' => $data,
                    'title' => $title,
                    'content' => $content,
                    'date' => $date,
                    'username' => $username,
                    'avatar' => $avatar
                );
            }
            $stmt->close();
			
			if($stmt  = $this->mysqli->prepare("SELECT FOUND_ROWS()")){
				$stmt->execute();
				$stmt->bind_result($num);
				$stmt->fetch();
				$this->totalNumberOfFollowersActivities = $num;
				$stmt->close();
			}
            return $activity;
        }
        else
        {
            return false;
        }
    }
    
}