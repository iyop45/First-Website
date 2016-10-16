<?php
namespace techberry;

require("/home/content/99/11499199/html/class.authentication.php");

use techberry\core\authentication as auth;

class follow extends auth
{
    private $username;
    
    function __construct()
    {
        parent::__construct('POST');
        $this->username   = isset($_POST['username']) ? $_POST['username'] : null;
        $this->isUnfollow   = isset($_POST['iuf']) ? $_POST['iuf'] : null;
        $redirect              = $this->validateRedirect(base64_decode($this->referer));
        
		$ul = $this->userLookups();
        if ($this->loginCheck())
        {
            // If the user is not already logged in
            if ($this->isTokenValid)
            {
                if ($this->checkActionTimer())
                {
                    $_SESSION['actionTimer'] = array(
                        'action' => 'Followed/UnFollowed another user',
                        'time' => time(),
                        'wait' => 5
                    );
                    if ($ul->userExists($this->username))
                    {
                        if ($_SESSION['username'] == $this->username)
                        {
							die(json_encode(array(
								'type' => 'error',
								'message' => "Can't follow yourself"
							)));
                        }
                        else
                        {
							$f = $this->follow();
                            if ($this->isUnfollow)
                            {
                                if($f->unFollow($this->username))
								{
									die(json_encode(array(
										'type' => 'success',
										'message' => "You're no longer following this user"
									)));								
								}
								else
								{
									die(json_encode(array(
										'type' => 'error',
										'message' => "Unable to UnFollow user"
									)));
								}
                            }
                            else
                            {
                                if ($f->isFollowing($this->username))
                                {
									die(json_encode(array(
										'type' => 'error',
										'message' => "You're already following this user"
									)));
                                }
                                else
                                {
                                    if ($f->followCount() > 20)
                                    {
										die(json_encode(array(
											'type' => 'error',
											'message' => "You're currently following too many people"
										)));
                                    }
                                    else
                                    {
                                        if ($f->follow($this->username))
                                        {
											die(json_encode(array(
												'type' => 'success',
												'message' => "You're now following this user"
											)));
                                        }
                                        else
                                        {
											die(json_encode(array(
												'type' => 'error',
												'message' => "Unable to follow user"
											)));
                                        }
                                    }
                                }
                            }
                        }
                    }
                    else
                    {
                        // User does not exist
						die(json_encode(array(
							'type' => 'error',
							'message' => "User does not exist"
						)));
                    }
                }
                else
                {
                    // The user must wait before
                    // performing another action
					die(json_encode(array(
						'type' => 'error',
						'message' => "Slow down"
					)));
                }
            }
            else
            {
                // Token is not set or is invalid
				die(json_encode(array(
					'type' => 'error',
					'message' => "Invalid token"
				)));
            }
        }
        else
        {
            // User not logged in
			die(json_encode(array(
				'type' => 'error',
				'message' => "You're not logged in"
			)));
        }
    }
}
$f = new follow();
?>