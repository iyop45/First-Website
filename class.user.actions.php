<?php
namespace techberry\user;

/*
This class is for direct calls for logged in users
*/

class actions
{
    
    private $mysqli;
	public $error;
    
    function __construct($mysqli)
    {
        $this->mysqli = $mysqli;
    }
	
	/*
		Main method for authenticating log in requests
	 */
	public function login($email,$password,$forceLogin=0)
	{
		if($stmt = $this->mysqli->prepare("
		SELECT u.id,
		u.username,
		u.email,
		u.password,
		u.salt,
		u.reputation,
		u.hasNotifications,
		IF(LENGTH(u.avatar) > 0, u.avatar , CONCAT('http://vanillicon.com/',md5(u.email))),
		u.login_count,
		u.group_id,
		g.name,
		u.settings_showLockedButtons
		FROM users AS u
		INNER JOIN user_groups AS g
		ON(g.id = u.group_id)
		WHERE u.email = ? LIMIT 1"))
		{
			$stmt->bind_param('s', $email);
			$stmt->execute();
			$stmt->store_result();
			$stmt->bind_result(
			$user_id,
			$username,
			$db_email,
			$db_password,
			$salt,
			$reputation,
			$hasNotifications,
			$avatar,
			$login_count,
			$group_id,
			$group_name,
			$settings_showLockedButtons
			); // get variables from result.
			$stmt->fetch();
			$this->user_id = $user_id;
			if($forceLogin != 1){
				$password = hash('sha512', $password.$salt); // hash the password with the unique salt.
				if(isset($_SESSION['hasEnabledJavaScript']) && $_SESSION['hasEnabledJavaScript'] = 0)
				{
					$password = hash('sha512', $password); // hash the password again
				}
			}
			if($stmt->num_rows == 1){ // If the user exists
				if($db_password == $password || $forceLogin===1){ // Check if the password in the database matches the password the user submitted. 
					// Password is correct!
					if($group_name != 'banned' || $forceLogin===1){ // If user is not banned
						$ip_address = $_SERVER['REMOTE_ADDR']; // Get the IP address of the user. 
						$user_browser = $_SERVER['HTTP_USER_AGENT']; // Get the user-agent string of the user.
						
						$_SESSION['user_id'] = $this->user_id; 
						$user_id = preg_replace("/[^0-9]+/", "", $user_id); // XSS protection as we might print this value
						
						$_SESSION['username'] = $username;
						$username = preg_replace("/[^a-zA-Z0-9_\-]+/", "", $username); // XSS protection as we might print this value
						
						$_SESSION['avatar']=$avatar;
						$_SESSION['reputation']=$reputation;
						$_SESSION['hasNotifications']=$hasNotifications;
						$_SESSION['group_id']=$group_id;
						$_SESSION['group_name']=$group_name;
						
						$_SESSION['settings_showLockedButtons']=$settings_showLockedButtons;
						
						$_SESSION['login_string'] = hash('sha512', $password.$ip_address.$user_browser);
						$_SESSION['token'] = md5(openssl_random_pseudo_bytes(16));
						
						$stmt->close();
						if($login_count===0){
							// 'Newbie' badge
							$this->requestBadge('Newbie',$_SESSION['user_id']);
							// Add notifications
							$this->addNotification($user_id,'welcome_message',0);
							$this->addNotification($user_id,'earnt_new_badge',1);
						}else if($login_count===20){
							// 'Active member' badge
							$this->requestBadge('Active member',$_SESSION['user_id']);
							// Add notifications
							$this->addNotification($user_id,'earnt_new_badge',4);
						}else if($number===200){
							// 'Techberry addict' badge
							$this->requestBadge('Techberry addict',$_SESSION['user_id']);
							// Add notifications
							$this->addNotification($user_id,'earnt_new_badge',9);
						}else if($login_count % 1000 == 0){
							// Add techberry devotee badge every 1000 logins
							// 'Techberry devotee' badge
							$this->requestBadge('Techberry devotee',$_SESSION['user_id']);
							// Add notifications
							$this->addNotification($user_id,'earnt_new_badge',28);
						}
						// Add one to the users login count
						if($stmt = $this->mysqli->prepare("UPDATE users SET login_count=login_count+1 WHERE id = ?")){
							$stmt->bind_param('i',$user_id);
							$stmt->execute();
							$stmt->close();
						}
						// Update users latest activity
						$this->updateRecentActivity();
						// Login successful.
						return true;
					}else{
						// User is banned
						// We record this attempt in the database
						$_SESSION['loginError'] = 'This account has been banned';
						$this->error = "This account has been banned";
						return false;
					}
				}else{
					// Password is not correct
					// We record this attempt in the database
					$_SESSION['loginError'] = 'Wrong password or non-existing account';
					$this->error = "Wrong password or non-existing account";
					$now = time();
					$this->mysqli->query("INSERT INTO login_attempts (user_id, time) VALUES ('$user_id', '$now')");
					return false;
				}
			}else{
				$_SESSION['loginError'] = 'Wrong password or non-existing account';
				$this->error = "Wrong password or non-existing account";
				return false;
			}
		}else{
			$_SESSION['loginError'] = 'Unable to process your request';
			$this->error = "Unable to process your request";
			return false;
		}
	}
	
	/*
		Called when creating an account, all verification
		is carried out prior to calling this method
	 */
	public function register($username,$email,$password,$salt){
		if($stmt = $this->mysqli->prepare("
		INSERT INTO `users` (`username`, `email`, `password`, `salt`, `ip_address`)
		VALUES (?,
		?,
		?,
		?,
		?)")){
			$stmt->bind_param('sssss',$username,$email,$password,$salt,$_SERVER['SERVER_ADDR']);
			$stmt->execute();
			return true;
			}else{
			return false;
		}
	}
	
	/*
		Was an attempt to resolve issue with logging
		out users, this has since been resolved
		however function remains here.
		** This may be adapted later to introduce a
		** 'keep me logged in' feature
	 */
	public function setLoginCookie(){
		$day = time() + 86400;
		$token = base64_encode(openssl_random_pseudo_bytes(16));
		if($stmt = $this->mysqli->prepare("
		INSERT INTO login_tokens
		(user_id, token)
		VALUES (?,?)")){
			$stmt->bind_param('is',$this->user_id,$token);
			$stmt->execute();
			$stmt->close();
			setcookie('login_token', base64_encode($this->user_id.':'.hash('sha512',$_SESSION['REMOTE_ADDR'].$token)), $day);
		}
	}
	/*
		Follows on from previous function,
		simply authenticated the login cookie
	 */
	private function checkLoginCookie(){
		if(isset($_COOKIE['login_token'])){
			$items = explode(":",base64_decode($_COOKIE['login_token']));
			if($stmt = $this->mysqli->prepare("
			SELECT 
			user_id,
			token,
			date 
			FROM login_tokens 
			WHERE user_id = ?
			LIMIT 1")){
				$stmt->bind_param('i',$items[0]);
				$stmt->execute();
				$stmt->store_result();
				$stmt->bind_result($user_id,$hash,$date);
				if($stmt->num_rows === 1){
					$stmt->fetch();
					if(hash('sha512',$_SESSION['REMOTE_ADDR'].$token)==$items[1]){
						$stmt->close();
						// Do stuff
						return true;
						}else{
						return false;
					}
					}else{
					return false;
				}
				}else{
				return false;
			}
			}else{
			return false;
		}
	}
    
    /*
    Process and validate request to grant user a badge
    */
    public function requestBadge($badge_name, $user_id)
    {
        if ($stmt = $this->mysqli->prepare("
			SELECT users.reputation,
				   user_badges.accumulated,
				   badges.name,
				   badges.stackable
			FROM users
			RIGHT JOIN user_badges ON (user_badges.user_id = users.id)
			LEFT JOIN badges ON (badges.id = user_badges.id_badge)
			WHERE users.id = ?
			  AND badges.name = ? LIMIT 1"))
        {
            $stmt->bind_param('is', $user_id, $badge_name);
            $stmt->execute();
            $stmt->bind_result($reputation, $accumulated, $badgeName, $isStackable);
            $stmt->fetch();
			// If user already has badge and badge is stackable OR if user does not have badge
            if (($accumulated >= 0 && $isStackable == true) || ($accumulated == 0 && $isStackable == false))
            {
                // User has earnt the badge
                $notify_text          = "You've earnt the <a href='http://techberry.org/account/achievements/'>" . $badgeName . "</a> badge";
                $stmt->close();
				$_SESSION['newBadge'] = $notify_text;
                if ($accumulated == 0)
                {
                    if ($stmt = $this->mysqli->prepare("
						INSERT INTO user_badges (id_badge,user_id)
						VALUES(?,
							   ?)"))
                    {
                        $stmt->bind_param('ii', $badge_id, $user_id);
                        $stmt->execute();
                        $stmt->close();
                    }
                }
                else
                {
                    // Already has badge but is stackable
                    if ($stmt = $this->mysqli->prepare("
						UPDATE user_badges
						SET accumulated = accumulated + 1
						WHERE user_id = ?
						  AND id_badge = ?"))
                    {
                        $stmt->bind_param('ii', $user_id, $badge_id);
                        $stmt->execute();
                        $stmt->close();
                    }
                }
                // Add the notification
                $this->addNotification($user_id, 'earnt_new_badge', $badge_id);
                return true;
            }
            else
            {
                // User already has this badge and it can't be stacked
				$this->error = "This badge cannot be stacked";
                return false;
            }
            
        }
    }
    public function addNotification($user_id, $title, $source_id)
    {
        if ($stmt = $this->mysqli->prepare("
			INSERT INTO user_notifications (user_id,template_id,source_id)
				VALUES
				(
					?,
					(
						SELECT id FROM
							notification_templates
							WHERE title = ?
					),
					?
				
				)"))
        {
            $stmt->bind_param('isi', $user_id, $title, $source_id);
            $stmt->execute();
            $stmt->close();
            return true;
        }
        else
        {
			die('sdfdsf');
			$this->error = "Failed to prepare query";
            return false;
        }
    }
    public function removeNotification($notification_id)
    {
		if($notification_id == 0)
		{
			// Removing all notifications
			if ($stmt = $this->mysqli->prepare("
				DELETE FROM user_notifications
				WHERE user_id = ?"))
			{
				$stmt->bind_param('i', $_SESSION['user_id']);
				$stmt->execute();
				$stmt->close();
				return 's';
			}
			else
			{
				// Mysql error
				return 'e';
			}					
		}
		else
		{
			if ($stmt = $this->mysqli->prepare("
				SELECT user_id FROM user_notifications WHERE id = ?"))
			{
				$stmt->bind_param('i', $notification_id);
				$stmt->execute();
				$stmt->bind_result($user_id);
				$stmt->fetch();
				$stmt->close();
				if ($user_id == $_SESSION['user_id'])
				{
					if ($stmt = $this->mysqli->prepare("
						DELETE FROM user_notifications
						WHERE id = ?"))
					{
						$stmt->bind_param('i', $notification_id);
						$stmt->execute();
						$stmt->close();
						return 's';
					}
					else
					{
						// Mysql error
						return 'e';
					}
				}
				else
				{
					// Wrong user id
					return 'wu';
				}
			}
			else
			{
				// Mysql error
				return 'e';
			}
		}
    }
    
    public function wallPost($username_to, $wallpost)
    {
        if ($stmt = $this->mysqli->prepare("
			INSERT INTO user_wallPosts
				(user,from_user,post)
				VALUE
					(
						(SELECT id FROM users WHERE username = ?),
						?,
						?
					)"))
        {
            $stmt->bind_param('sis', $username_to, $_SESSION['user_id'], $wallpost);
            $stmt->execute();
            $stmt->close();
            return true;
        }
        else
        {
			$this->error = "Failed to prepare query";
            return false;
        }
    }
	
    /*
		This method updates the user last_active time
		so can identify only users
	 */
    public function updateRecentActivity($isPolling = true)
    {
        /*
			Last visited page is not updated on every single
			ajax poll because the url types clash
			also it seems unnessasary to update last visited
			page on every single poll
		 */
        if ($isPolling === true)
        {
            $sql = 'UPDATE users SET last_active = now() WHERE id = ?';
        }
        else
        {
            $referer = $_SERVER['PHP_SELF'];
            $sql     = 'UPDATE users SET last_active = now(), last_page = ? WHERE id = ?';
        }
        if ($stmt = $this->mysqli->prepare($sql))
        {
            if ($isPolling === true)
            {
                $stmt->bind_param('i', $_SESSION['user_id']);
            }
            else
            {
                $stmt->bind_param('si', $referer, $_SESSION['user_id']);
            }
            $stmt->execute();
            $stmt->close();
            return true;
        }
        else
        {
			$this->error = "Failed to prepare query";
            return false;
        }
    }
	
	/*
		This method updates the users points and
		checks for earnt privileges ( if any )
	*/
	public function updateReputation($reputation,$user_id){
		if($stmt = $this->mysqli->prepare("
			UPDATE users
			SET reputation=(reputation+?)
			WHERE id = ?")){
			$stmt->bind_param('ii',$reputation,$user_id);
			$stmt->execute();
			$stmt->close();
			/*
				Users can't lose permissions from losing reputation
				and so if loss in reputation don't go through
				permission unlock checks
			*/
			if($stmt = $this->mysqli->prepare("SELECT reputation, flags FROM users WHERE id = ? LIMIT 1")){
				$stmt->bind_param('i',$user_id);
				$stmt->execute();
				$stmt->bind_result($newReputation,$flags);
				$stmt->fetch();
				$stmt->close();
				if($reputation<0 && $newReputation<0){
					/*
						If the user has lost reputation and
						if new reputation is below 0
						suspend user for a small period of time
						and add a flag to their account
						** The length of suspension is based on
						** the magnitude of the new reputation
					*/
					$numberOfDays = abs($newReputation)*$flags;
					$suspensionDate = date('Y-m-d', strtotime(' +'.$numberOfDays.' day'));
					if($stmt = $this->mysqli->prepare("
						UPDATE users SET flags=flags+1 AND suspendedUntil=?
						WHERE id = ?")){
						$stmt->bind_param('si',$suspensionDate,$user_id);
						$stmt->execute();
						$stmt->close();
						return true;
					}else{
						return false;
					}
				}
				/*
					Check if user has earnt any new privileges/permissions
					If new reputation is greater than required 
					and previous reputation is less then the user
					has exceeded the required reputation points required
				*/
				if($stmt = $this->mysqli->prepare("
					SELECT id FROM permissions
						WHERE ? > required_points
						AND   ? < required_points")){
					$changeInReputation = $newReputation-$reputation;
					$stmt->bind_param('ii',$newReputation,$changeInReputation);
					$stmt->execute();
					$stmt->bind_result($id);
					$newPermissions = array();
					while($stmt->fetch()){
						$newPermissions[] = $id;
					}
					$stmt->close();
					/*
						If the user has new permissions available
						then update the user_permissions table
					*/
					if(!empty($newPermissions)){
						$SQLValues = '';
						$i = 0;
						foreach($newPermissions as $np){
							if($i == count($newPermissions) - 1){
								// Last iteration
								$SQLValues .= '('.$user_id.','.$np.')';
							}else{
								$SQLValues .= '('.$user_id.','.$np.'),';
							}
							$i++;
						}
						$sql = 'INSERT INTO user_permissions (user_id,action_id) VALUES '.$SQLValues;
						if($stmt = $this->mysqli->prepare($sql)){
							$stmt->execute();
							$stmt->close();
							foreach($newPermissions as $np){
								$this->addNotification($user_id,'new_privilege',$np);
							}
							return true;
						}else{
							$this->debugArray[] = "Failed to add permissions";
							return false;
						}
					}
				}else{
					$this->debugArray[] = "Failed to select new permissions";
					return false;
				}
			}else{
				$this->debugArray[] = "Failed to execute select statement";
				return false;
			}
		}else{
			$this->error = "Failed to prepare query";
			return false;
		}
	}
}