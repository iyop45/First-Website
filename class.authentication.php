<?php
namespace techberry\core;

define("CAPTCHA_INVERSE", 0); // black background
define("CAPTCHA_NEW_URLS", 0); // no auto-disabling/hiding for the demo

require("class.databaseController.php");
require("class.captcha.php");
// For statistics
//@include_once('/home/content/99/11499199/html/statistics/stats-include.php');

use techberry\core\databaseController as db;

class authentication extends db
{
    public $notify;
    
    public $token;
    public $isTokenValid;
    public $actionTimeCountDown;
    
    public $isSensitiveAction; // Disabled for muted ( and banned ) users
    public $disabledUserGroups; // User groups not able to perform action ( may not be specified )
    public $isAbleToCompleteAction;
	
	public function permissions(){
		require self::ROOTPATH.'class.permissions.php';
		return new \techberry\core\permissions($this->mysqli);
	}
    
    function __construct($formToken = null)
    {
        parent::__construct();
        $this->startSession();
        $this->setToken();
        require self::ROOTPATH . 'class.notify.php';
        $this->notify = new \techberry\core\notify();		
        /*
        If the optional formToken parameter is passed
        then the page is requesting authenticated
        processing, with the specified csrf token
        */
        if ($formToken != null)
        {
            // Authenticating a form (Secure by default)
            if ($this->isSensitiveAction)
            {
                if (isset($_SESSION['group_name']))
                {
                    if (is_array($this->disabledUserGroups))
                    {
                        // The disabled user groups are specified
                        if (in_array($_SESSION['group_name'], $this->disabledUserGroups))
                        {
                            $this->isAbleToCompleteAction = 0;
                        }
                        else
                        {
                            $this->isAbleToCompleteAction = 1;
                        }
                    }
                    else
                    {
                        if ($_SESSION['group_name'] == 'banned' || $_SESSION['group_name'] == 'muted')
                        {
                            // Muted accounts can't perform sensitive actions
                            $this->isAbleToCompleteAction = 0;
                        }
                        else
                        {
                            $this->isAbleToCompleteAction = 1;
                        }
                    }
                }
                else
                {
                    // Unable to verify users rights
                    $this->isAbleToCompleteAction = 0;
                }
            }
            switch ($formToken)
            {
                case 'GET':
                    $token = isset($_GET['token']) ? $_GET['token'] : null;
                    if ($this->checkToken($token))
                    {
                        $this->isTokenValid = true;
                    }
                    else
                    {
                        $this->isTokenValid = false;
                    }
                    break;
                case 'POST':
                    $token = isset($_POST['token']) ? $_POST['token'] : null;
                    if ($this->checkToken($token))
                    {
                        $this->isTokenValid = true;
                    }
                    else
                    {
                        $this->isTokenValid = false;
                    }
                    break;
                default:
                    $this->isTokenValid = false;
            }
        }
    }
    
    // May be removed
    public function eventLog($platform, $eventName, $eventValue)
    {
        $_SESSION['user_id'] ? $user_id = $_SESSION['user_id'] : $user_id = 0;
        $data = json_encode(array(
            'user_id' => $user_id,
            'platform' => $platform,
            'eventName' => $eventName,
            'eventValue' => $eventValue,
            'time' => time(),
            'ip' => $_SERVER['REMOTE_ADDR']
        ));
        file_put_contents('/var/chroot/home/content/99/11499199/html/pendingEvents.log', $data . PHP_EOL, FILE_APPEND);
    }
	
	/*
		Check if the user is logged in
	 */
	public function loginCheck(){
		// Check if all session variables are set
		if(isset($_SESSION['user_id'], $_SESSION['username'], $_SESSION['login_string'])){
			$user_id = $_SESSION['user_id'];
			$login_string = $_SESSION['login_string'];
			$username = $_SESSION['username'];
			$ip_address = $_SERVER['REMOTE_ADDR']; // Get the IP address of the user. 
			$user_browser = $_SERVER['HTTP_USER_AGENT']; // Get the user-agent string of the user.
			
			if($stmt = $this->mysqli->prepare("
			SELECT password
			FROM users
			WHERE id = ? LIMIT 1")){
				$stmt->bind_param('i', $user_id); // Bind "$user_id" to parameter.
				$stmt->execute(); // Execute the prepared query.
				$stmt->store_result();
				
				if($stmt->num_rows == 1){ // If the user exists
					$stmt->bind_result($password); // get variables from result.
					$stmt->fetch();
					$login_check = hash('sha512', $password.$ip_address.$user_browser);
					if($login_check == $login_string){
						// Logged In!!!!
						return true;
						}else{
						// Not logged in
						$this->notify->source()->type('log')->msg('You have been logged out')->process();
						return false;
					}
					}else{
					// Not logged in
					$this->notify->source()->type('log')->msg('You have been logged out')->process();
					return false;
				}
				}else{
				// Not logged in
				$this->notify->source()->type('log')->msg('You have been logged out')->process();
				return false;
			}
			}else{
			// Not logged in
			return false;
		}
	}
	
	/*
		Check if there has been too many login
		attempts to this account, if so don't
		process proceeding login requests
	 */
	public function checkBrute()
	{
		// Get timestamps of current time
		$now = time();
		// All login attempts are counted from the past 2 hours. 
		$valid_attempts = $now - (2 * 60 * 60); 
		if($stmt = $this->mysqli->prepare("
		SELECT time
		FROM login_attempts
		WHERE user_id = ?
		AND time > '$valid_attempts'")){
			$stmt->bind_param('i', $this->user_id); 
			// Execute the prepared query.
			$stmt->execute();
			$stmt->store_result();
			// If there has been more than 5 failed logins
			if($stmt->num_rows > 5)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
	}
	
	public function isSuspended($email){
		if($stmt = $this->mysqli->prepare("
		SELECT 
			u.suspendedUntil,
			CASE WHEN (current_timestamp < u.suspendedUntil) 
				THEN 1
				ELSE 0
			END as hasPassed
			FROM users AS u
			WHERE u.email = ?
			")){
			$stmt->bind_param('s',$email);
			$stmt->execute();
			$stmt->bind_result($suspendedUntil,$isSuspended);
			$stmt->fetch();
			$stmt->close();
			if($isSuspended == 1){
				$this->notify->source()->type('error')->msg('This account has been suspended until '.$suspendedUntil)->process();
				return $suspendedUntil;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}

	public function isBanned($email){
		if($stmt = $this->mysqli->prepare("
			SELECT ub.reason
			FROM user_banned as ub
			INNER JOIN ban_reason AS br ON (br.id = ub.reason)
			INNER JOIN users AS u ON(u.id = bu.user_id)
			WHERE u.email = ? LIMIT 1")){
			$stmt->bind_param('s',$email);
			$stmt->execute();
			$stmt->store_result();
			$stmt->bind_result($reason);
			$stmt->fetch();
			if($stmt->num_rows()==1){
				$stmt->close();
				return true;
			}else{
				$stmt->close();
				return false;
			}
		}else{
			return false;
		}
	}
    
    public function startSession()
    {
        $session_name = 'sec_session_id'; // Set a custom session name
        $secure       = false; // Set to true if using https.
        $httponly     = true; // This stops javascript being able to access the session id. 
        ini_set('session.use_only_cookies', 1); // Forces sessions to only use cookies. 
        $cookieParams = session_get_cookie_params(); // Gets current cookies params.
        session_set_cookie_params($cookieParams["lifetime"], $cookieParams["path"], $cookieParams["domain"], $secure, $httponly);
        session_name($session_name); // Sets the session name to the one set above.
        session_start(); // Start the php session
        session_regenerate_id(); // regenerated the session, delete the old one.
        // By default had parameter true
    }
    
    public function setToken()
    {
        if (!isset($_SESSION['token']))
        {
            //$this->token = md5(uniqid(rand()));
            //$this->token = hash('sha512', uniqid(rand()));
            $this->token            = hash('ripemd160', uniqid(rand()));
            //$this->token = base64_encode(openssl_random_pseudo_bytes(16));
            $_SESSION['token']      = $this->token;
            $_SESSION['token_time'] = time();
        }
        else
        {
            $this->token = $_SESSION['token'];
        }
        $this->token = $_SESSION['token'];
    }
    
    public function checkCaptcha()
    {
        return (captcha::solved() ? true : false);
    }
    
    public function validateRedirect($d, $encrypted = false)
    {
        /*
        If URL is not from a valid domain
        It will return a safe alternative
        for redirect
        */
        if ($encrypted == true)
        {
            $d = base64_decode($d);
        }
        $components = parse_url($d);
        $validHosts = array(
            'www.techberry.org',
            'http://www.techberry.org',
            'techberry.org'
        );
        if (in_array($components['host'], $validHosts))
        {
            return $d;
        }
        else
        {
            return 'http://techberry.org/';
        }
    }
    
    private function fieldNames($n)
    {
        if ($this->verify_type($n, 'int', 1, 5))
        {
            $fieldNames = array(
                substr(md5(uniqid(rand(), TRUE)), 0, 10)
            );
            for ($i = 0; $i < ($n - 1); $i++)
            {
                $fieldNames[] = array(
                    substr(md5(uniqid(rand(), TRUE)), 0, 10)
                );
            }
            return $fieldNames;
        }
        else
        {
            return substr(md5(uniqid(rand(), TRUE)), 0, 10);
        }
    }
    
    private function generateRandomString($length = 10)
    {
        $characters   = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
        for ($i = 0; $i < $length; $i++)
        {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $randomString . time();
    }
    
    public function xss($string)
    {
        return stripslashes(htmlspecialchars($string, ENT_QUOTES, 'UTF-8'));
    }
    
    public function checkToken($token)
    {
        return ($token == $_SESSION['token'] ? true : false);
    }
    
    public function isImage($img)
    {
        if (!getimagesize($img))
        {
            return false;
        }
        else
        {
            return true;
        }
    }
    
    /*
    Check if the user is banned or not
    if they're cease script execution
    with die() straight away
    */
    private function checkIPBan()
    {
        if ($stmt = static::$mysqli->prepare("SELECT ban_reason.reason FROM ban_ip 
										INNER JOIN ban_reason
											ON (ban_reason.id = ban_ip.reason)
										WHERE ban_ip.ip = ? LIMIT 1"))
        {
            $stmt->bind_param('s', $_SERVER["REMOTE_ADDR"]);
            $stmt->execute();
            $stmt->store_result();
            $stmt->bind_result($reason);
            $stmt->fetch();
            if ($stmt->num_rows() == 1)
            {
                die('Your ip has been blocked for "' . $reason . '"');
            }
            $stmt->close();
        }
        else
        {
            die('Unable to connect your client');
        }
    }
    
    public function checkActionTimer()
    {
        // If time of last action is set use it
        // Else use a time 9000ms ago, which is
        // always valid for check
        $time         = isset($_SESSION['actionTimer']['time']) ? $_SESSION['actionTimer']['time'] : (time() - 9000);
        $action       = isset($_SESSION['actionTimer']['action']) ? $_SESSION['actionTimer']['action'] : 'Unknown';
        $wait         = isset($_SESSION['actionTimer']['wait']) ? $_SESSION['actionTimer']['wait'] : 0;
        $time_elapsed = time() - $time;
        if ($time_elapsed <= $wait)
        {
            // User must wait x seconds before
            // performing another action.
            $this->actionTimeCountDown = $wait - $time_elapsed;
            return false;
        }
        else
        {
            return true;
        }
    }
	
	public function usernameAvailable($username){
		if($stmt = $this->mysqli->prepare("SELECT 1 FROM users WHERE username = ?")){
			$stmt->bind_param('s', $username);
			$stmt->store_result();
			$stmt->execute();
			$stmt->fetch();
			if($stmt->num_rows == 0){
				$stmt->close();
				return true;
			}else{
				$stmt->close();
				return false;
			}
		}
	}
	
	public function emailAvailable($email){
		if($stmt = $this->mysqli->prepare("SELECT 1 FROM users WHERE email = ?")){
			$stmt->bind_param('s', $email);
			$stmt->store_result();
			$stmt->execute();
			$stmt->fetch();
			if($stmt->num_rows == 0){
				$stmt->close();
				return true;
			}else{
				$stmt->close();
				return false;
			}
		}
	}
}
?>