<?php
namespace techberry\core;

class messages
{
    
    private $mysqli;
    
    function __construct($mysqli)
    {
        $this->mysqli = $mysqli;
    }
	
    /*
    Return all messages between two users
    */
    public function getMessages($user_id, $other_username)
    {
        if ($stmt = $this->mysqli->prepare("
			SELECT received,id,avatar,message,dateSent
			FROM(
			SELECT 0 AS received,
					m.id AS id,
					IF(LENGTH(u2.avatar) >0, u2.avatar, CONCAT('http://vanillicon.com/', MD5(u2.email))) AS avatar,
					m.message AS message,
					m.date AS dateSent
					FROM user_messages AS m
				INNER JOIN users AS u
					ON(u.id = m.id_to)
				INNER JOIN users AS u2
					ON(u2.id = m.from_user)
				WHERE m.from_user = ?
					AND u.username = ?
			UNION ALL
			SELECT 1 AS received,
					m1.id AS id,
					IF(LENGTH(u1.avatar) >0, u1.avatar, CONCAT('http://vanillicon.com/', MD5(u1.email))) AS avatar,
					m1.message AS message,
					m1.date AS dateSent
					FROM user_messages AS m1
				INNER JOIN users AS u1
					ON(u1.id = m1.from_user)
				WHERE m1.id_to = ?
					AND u1.username = ?
			) AS t
			ORDER BY t.dateSent DESC LIMIT 40"))
        {
            $stmt->bind_param('isis', $user_id, $other_username, $user_id, $other_username);
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($isRecieved, $id, $avatar, $message, $dateSent);
            if ($stmt->num_rows == 0)
            {
                $stmt->close();
                return array(
                    'log' => 'No messages sent or received'
                );
            }
            else
            {
                $data = array();
                while ($stmt->fetch())
                {
                    $data[] = array(
                        'isRecieved' => $isRecieved,
                        'id' => $id,
                        'avatar' => $avatar,
                        'message' => $message
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
    
    public function sendMessage($username_to, $message)
    {
        if ($stmt = $this->mysqli->prepare("
			INSERT INTO user_messages
				(from_user,id_to,message)
				VALUE
					(
						?,
						(SELECT id FROM users WHERE username = ?),
						?
					)"))
        {
            $stmt->bind_param('iss', $_SESSION['user_id'], $username_to, $message);
            $stmt->execute();
            $stmt->close();
            
            require_once '/home/content/99/11499199/html/lib/parser/Parser.php';
            $parser = new \JBBCode\Parser();
            
            $parser->addCodeDefinitionSet(new \JBBCode\InstantMessengerDefinitionSet());
            $parser->parse(htmlspecialchars($message, ENT_QUOTES));
            $message = $this->singleTags($parser->getAsHtml());
            
            $html = '<li><img style="float:right" src="' . $_SESSION['avatar'] . '" onerror="avatarLoadError()" width="25px" height="25px"><p style="float:right">' . $message . '</p></li>';
            return $html;
        }
        else
        {
            return false;
        }
    }
    
    public function isValidMessage($id)
    {
		if($id == 0){
			return true;
		}
        if ($stmt = $this->mysqli->prepare("
					SELECT
						(
							EXISTS
							(
								SELECT 1
								FROM user_messages
								WHERE user_messages.id = ?
							)
						)"))
        {
            $stmt->bind_param('i', $id);
            $stmt->execute();
            $stmt->bind_result($exists);
            $stmt->fetch();
            $stmt->close();
            if ($exists == 1)
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
    
    public function isNewMessage($username, $latest_id)
    {
		if($latest_id==0){
			// No previous messages between users
			$sql = "SELECT id FROM user_messages AS u
						WHERE u.from_user = 
						(
							SELECT id FROM users WHERE username = ?
						) AND u.id_to = ?";		
		}else{
			$sql = "SELECT id FROM user_messages AS u
						WHERE u.date >
						(
							SELECT user_messages.date
							FROM user_messages
							WHERE user_messages.id = ?
						)						
						AND u.from_user = 
						(
							SELECT id FROM users WHERE username = ?
						) AND u.id_to = ?";
		}
        if ($stmt = $this->mysqli->prepare($sql))
        {
            if($latest_id == 0){
				$stmt->bind_param('si', $username, $_SESSION['user_id']);
			}else{
				$stmt->bind_param('isi', $latest_id, $username, $_SESSION['user_id']);
			}
            $stmt->execute();
			$stmt->store_result();
            $stmt->bind_result($new_id);
			if($stmt->num_rows > 0)
			{
				$ids = array();
				while ($stmt->fetch())
				{
					$ids[] = $new_id;
				}
				$stmt->close();
				return $ids;
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
    
    public function returnMessages($idArray)
    {
		$sql = "SELECT 
					users.id AS user_id,
					user_messages.id as id,
				   user_messages.message as message,
				   users.username as username,
				   IF(LENGTH(users.avatar) > 0, users.avatar , CONCAT('http://vanillicon.com/',md5(users.email))) as avatar
						FROM user_messages
						INNER JOIN users ON (users.id = user_messages.from_user)
						WHERE user_messages.id
						IN (" . implode(',', array_map('intval', $idArray)) . ")";
        if ($result = $this->mysqli->query($sql))
        {
            $shouts = array();
            while ($row = $result->fetch_assoc())
            {
                
                $shouts[] = array(
                    'user_id' => $row['user_id'],
                    'id' => $row['id'],
                    'message' => $row['message'],
                    'username' => $row['username'],
                    'avatar' => $row['avatar']
                );
            }
            $result->free();
            return $shouts;
        }
        else
        {
            return false;
        }
    }
	
    /*
    BBCode replacements for single tags
	FUNCTION IS ALSO IN POLL/CHAT.SHOUTS.PHP AND CLASS.MESSAGES.PHP
    */
    public function singleTags($input)
    {
        $output = str_replace('[hr]', '<hr>', $input);
        $output = str_replace('[br]', '<br>', $output);
        $output = preg_replace_callback('/ #(\w+)/', array(
            $this,
            'handle_hashTag'
        ), $output);
        $output = preg_replace_callback('/ @(\w+)/', array(
            $this,
            'handle_atSign'
        ), $output);
        return $output;
    }
    function handle_hashTag($match)
    {
        return ' <a class="default" href="http://techberry.org/search/?q=' . htmlentities($match[1]) . '">#' . htmlentities($match[1]) . '</a>';
    }
    function handle_atSign($match)
    {
        return ' <a class="default" href="http://techberry.org/user/' . htmlentities($match[1]) . '/">@' . htmlentities($match[1]) . '</a>';
    }
}