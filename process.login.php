<?php
namespace techberry;

require("/home/content/99/11499199/html/class.authentication.php");

use techberry\core\authentication as auth;

class login extends auth
{
    private $email;
    private $password;
    
    private $referer;
    
    function __construct()
    {
        parent::__construct('POST');
        $this->email    = isset($_POST['email']) ? $_POST['email'] : null;
        $this->password = isset($_POST['p']) ? $_POST['p'] : null;
        $this->referer  = isset($_POST['continue']) ? $_POST['continue'] : null;
        
        $redirect = $this->validateRedirect(base64_decode($this->referer));
        if (!$this->loginCheck())
        {
            // If the user is not already logged in
            if ($this->isTokenValid)
            {
                if ($this->checkActionTimer())
                {
                    $_SESSION['actionTimer'] = array(
                        'action' => 'Log in attempt',
                        'time' => time(),
                        'wait' => 10
                    );
                    if (!$this->isSuspended($this->email))
                    {
                        if (!$this->isBanned($this->email))
                        {
                            if (!$this->checkBrute())
                            {
                                // Call the login method
								$u = $this->userActions($this->mysqli);
                                if (!$u->login($this->email, $this->password))
                                {
                                    $error = empty($u->error) ? array(
                                        "Unknown error"
                                    ) : $u->error;
									$this->notify->source()->type('error')->msg($error)->process();
                                }
                                header('Location: ' . $redirect);
                            }
                            else
                            {
                                // The account is locked
                                $_SESSION['loginError'] = 'This account has been locked';
                                header('Location: ' . $redirect);
                            }
                        }
                        else
                        {
                            // The account is banned
                            $_SESSION['loginError'] = 'This account has been banned';
                            header('Location: ' . $redirect);
                        }
                    }
                    else
                    {
                        // The account has been suspended
                        $_SESSION['loginError'] = 'This account has been suspended';
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
                $this->notify->source()->type('error')->msg("Unable to validate request")->process();
                header('Location: ' . $redirect);
            }
        }
        else
        {
            // User already logged in
            $this->notify->source()->type('error')->msg("Already logged in")->process();
            header('Location: ' . $redirect);
        }
    }
}
$l = new login();
?>