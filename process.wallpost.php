<?php
namespace techberry;

require("/home/content/99/11499199/html/class.authentication.php");

use techberry\core\authentication as auth;

class wallpost extends auth
{
    private $wallpost;
    private $username_to;
    
    function __construct()
    {
        parent::__construct('POST');
        $this->wallpost    = isset($_POST['wallpost']) ? $_POST['wallpost'] : null;
        $this->username_to = isset($_POST['username_to']) ? $_POST['username_to'] : null;
        $redirect          = $this->validateRedirect(base64_decode($this->referer));
        
        if ($this->loginCheck())
        {
            // If the user is not logged in
            if ($this->isTokenValid)
            {
                if ($this->checkActionTimer())
                {
                    $_SESSION['actionTimer'] = array(
                        'action' => 'Wall post',
                        'time' => time(),
                        'wait' => 5
                    );
					$ul = $this->userLookups();
                    if ($ul->userExists($this->username_to))
                    {
                        if (!$ul->is_bot($this->username_to))
                        {
                            if (strlen($this->wallpost) >= 300)
                            {
                                $this->notify->source()->type('error')->msg("Your message is too long")->process();
								$_SESSION['failedWallPostContent'] =  $this->wallpost;
                                header('Location: http://techberry.org/user/' . $this->username_to . '/');
                            }
                            else if (strlen($this->wallpost) <= 10)
                            {
                                $this->notify->source()->type('error')->msg("Your message is too short")->process();
								$_SESSION['failedWallPostContent'] =  $this->wallpost;
                                header('Location: http://techberry.org/user/' . $this->username_to . '/');
                            }
                            else
                            {
								$ua = $this->userActions();
                                if ($ua->wallPost($this->username_to, $this->wallpost))
                                {
                                    $this->notify->source()->type('success')->msg("Successful post")->process();
                                    header('Location: http://techberry.org/user/' . $this->username_to . '/');
                                }
                                else
                                {
                                    $this->notify->source()->type('error')->msg("Error submitting post")->process();
                                    header('Location: http://techberry.org/user/' . $this->username_to . '/');
                                }
                            }
                        }
                        else
                        {
                            // Can't post on bots walls
                            $this->notify->source()->type('error')->msg("Unable to post on this wall")->process();
                            header('Location: ' . $redirect);
                        }
                    }
                    else
                    {
                        // User does not exist
                        $this->notify->source()->type('error')->msg("User does not exist")->process();
                        header('Location: ' . $redirect);
                    }
                }
                else
                {
                    // The user must wait before
                    // performing another action
                    $this->notify->timer($this->actionTimeCountDown);
                    header('Location: ' . $redirect);
                }
            }
            else
            {
                // Token is not set or is invalid
                $this->notify->source()->type('error')->msg("Invalid request")->process();
                header('Location: ' . $redirect);
            }
        }
        else
        {
            // User already logged in
            $this->notify->source()->type('error')->msg("You're not logged in")->process();
            header('Location: ' . $redirect);
        }
    }
}
$m = new wallpost();
?>