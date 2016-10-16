<?php
namespace techberry\core;

class shouts
{
    
    private $mysqli;
    
    function __construct($mysqli)
    {
        $this->mysqli = $mysqli;
    }
	
    /*
    Returns the most recent shouts in the shoutbox
    */
    public function getShouts($room_id = 1)
    {
        if ($stmt = $this->mysqli->prepare("
				SELECT chatbox_messages.id,
					   chatbox_messages.message,
					   users.username,
					   IF(LENGTH(users.avatar) > 0, users.avatar , CONCAT('http://vanillicon.com/',md5(users.email)))
				FROM chatbox_messages
				INNER JOIN users ON (users.id = chatbox_messages.user_id)
				WHERE chatbox_messages.room_id = ?
				ORDER BY chatbox_messages.date DESC LIMIT 40"))
        {
            $stmt->bind_param('i', $room_id);
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($id, $message, $username, $avatar);
            $shouts = array();
            while ($stmt->fetch())
            {
                $shouts[] = array(
                    'id' => $id,
                    'message' => $message,
                    'username' => $username,
                    'avatar' => $avatar
                );
            }
            $stmt->close();
            return $shouts;
        }
        else
        {
            return false;
        }
    }
    
    public function sendShout($message, $roomID = 1)
    {
        if ($stmt = $this->mysqli->prepare("
				INSERT INTO chatbox_messages ( user_id, room_id, message )
					VALUES ( ?, ?, ? )"))
        {
            $stmt->bind_param('iis', $_SESSION['user_id'], $roomID, $message);
            $stmt->execute();
            $stmt->close();
            /*
            So to return rendered bbcode message
            */
            require_once '/home/content/99/11499199/html/lib/parser/Parser.php';
            $parser = new \JBBCode\Parser();
            
            $parser->addCodeDefinitionSet(new \JBBCode\ShoutBoxDefinitionSet());
            $parser->parse(htmlspecialchars($message, ENT_QUOTES));
            $message = $this->singleTags($parser->getAsHtml());
            
            $html = '<li><div id="msg_' . $this->mysqli->insert_id . '" class="c_message c_new"><a href="http://techberry.org/user/' . $_SESSION['username'] . '/" class="miniprofile" data-user="' . $_SESSION['username'] . '"><span class="avatar c_avatar"><img title="' . $_SESSION['username'] . '" src="' . $_SESSION['avatar'] . '" width="25px" height="25px"></span></a>' . $message . '</div></li>';
            return $html;
        }
        else
        {
            return false;
        }
    }
    public function isValidShout($id)
    {
        if ($stmt = $this->mysqli->prepare("
					SELECT
						(
							EXISTS
							(
								SELECT 1
								FROM chatbox_messages
								WHERE chatbox_messages.id = ?
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
    
    public function isNewShout($latest_id)
    {
        if ($stmt = $this->mysqli->prepare("
			SELECT id FROM chatbox_messages
			WHERE chatbox_messages.date >
			(
				SELECT chatbox_messages.date
				FROM chatbox_messages
				WHERE chatbox_messages.id = ?
			)"))
        {
            $stmt->bind_param('i', $latest_id);
            $stmt->execute();
            $stmt->bind_result($new_id);
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
            return false;
        }
    }
    public function shoutsFrom($timestamp, $room_id = 1)
    {
        if ($stmt = $this->mysqli->prepare("
			SELECT chatbox_messages.id,
				   chatbox_messages.message,
				   users.username,
				   IF(LENGTH(users.avatar) > 0, users.avatar , CONCAT('http://vanillicon.com/',md5(users.email)))
			FROM chatbox_messages
			INNER JOIN users ON (users.id = chatbox_messages.user_id)
			WHERE chatbox_messages.room_id = ? AND chatbox_messages.date > ?
			ORDER BY chatbox_messages.date DESC LIMIT 20"))
        {
            $stmt->bind_param('is', $room_id, $timestamp);
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($id, $message, $username, $avatar);
            $shouts = array();
            while ($stmt->fetch())
            {
                $shouts[] = array(
                    'id' => $id,
                    'message' => $message,
                    'username' => $username,
                    'avatar' => $avatar
                );
            }
            $stmt->close();
            return $shouts;
        }
        else
        {
            return false;
        }
    }
	
	public function returnShouts($idArray)
	{
		if($result = $this->mysqli->query("
		SELECT chatbox_messages.id as id,
		chatbox_messages.message as message,
		users.username as username,
		IF(LENGTH(users.avatar) > 0, users.avatar , CONCAT('http://vanillicon.com/',md5(users.email))) as avatar
		FROM chatbox_messages
		INNER JOIN users ON (users.id = chatbox_messages.user_id)
		WHERE chatbox_messages.id
		IN (" . implode(',', array_map('intval', $idArray)) . ")"))
		{
			$shouts = array();
			while($row = $result->fetch_assoc())
			{
				
				$shouts[] = array(
				'id'=>$row['id'],
				'message'=>$row['message'],
				'username'=>$row['username'],
				'avatar'=>$row['avatar']
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