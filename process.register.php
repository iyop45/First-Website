<?php
namespace techberry;

require("/home/content/99/11499199/html/class.authentication.php");

use techberry\core\authentication as auth;

class register extends auth
{
    private $email;
    private $username;
    private $password;
    private $verifyPassword;
    
    private $salt;
    
    function __construct()
    {
        parent::__construct('POST');
        $this->email              = isset($_POST['email']) ? $_POST['email'] : null;
        $this->username        = isset($_POST['username']) ? $_POST['username'] : null;
        $this->password        = isset($_POST['p']) ? $_POST['p'] : null;
        $this->verifyPassword = isset($_POST['vpassword']) ? $_POST['vpassword'] : null;
        if ($this->isTokenValid === true)
        {
            if ($this->checkActionTimer())
            {
                $_SESSION['actionTimer'] = array(
                    'action' => 'Created an account',
                    'time' => time(),
                    'wait' => 5
                );
                if (\captcha::solved())
                {
                    if (($this->password == $this->verifyPassword) && $this->password != null)
                    {
                        if (strlen($this->password) >= 8 && strlen($this->password) <= 40)
                        {
                            // First hash
                            $this->password = hash('sha512', $this->password);
                            $this->salt     = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true));
                            // Second hash with salt
                            $this->password = hash('sha512', $this->password . $this->salt);
                            if (preg_match('/^[A-Za-z][A-Za-z0-9]*(?:[A-Za-z0-9]+)*$/', $this->username) || strlen($this->username) < 2 || strlen($this->username) > 10)
                            {
                                if (filter_var($this->email, FILTER_VALIDATE_EMAIL) && strlen($this->email) < 50)
                                {
                                    if ($this->usernameAvailable($this->username))
                                    {
                                        if ($this->emailAvailable($this->email))
                                        {
											$ua = $this->userActions();
                                            if ($ua->register($this->username, $this->email, $this->password, $this->salt))
                                            {
                                                // Success
                                                $this->notify->source()->type('success')->msg("You can now log into your new account")->process();
                                                header('Location: http://techberry.org/login');
                                            }
                                            else
                                            {
                                                // Error executing query
                                                $this->notify->source()->type('error')->msg("Unable to create account, please try again later")->process();
                                                header('Location: http://techberry.org/register');
                                            }
                                        }
                                        else
                                        {
                                            // Email is in use
                                            $this->notify->source()->type('error')->msg("Email address already in use")->process();
                                            header('Location: http://techberry.org/register');
                                        }
                                    }
                                    else
                                    {
                                        // Username is taken
                                        $this->notify->source()->type('error')->msg("Username is taken")->process();
                                        header('Location: http://techberry.org/register');
                                    }
                                }
                                else
                                {
                                    // Invalid email address
                                    $this->notify->source()->type('error')->msg("Invalid username")->process();
                                    header('Location: http://techberry.org/register');
                                }
                            }
                            else
                            {
                                // Username is invalid
                                $this->notify->source()->type('error')->msg("Invalid username")->process();
                                header('Location: http://techberry.org/register');
                            }
                        }
                        else
                        {
                            // Invalid password
                            $this->notify->source()->type('error')->msg("Invalid password")->process();
                            header('Location: http://techberry.org/register');
                        }
                    }
                    else
                    {
                        // Passwords don't match
                        $this->notify->source()->type('error')->msg("Passwords do not match")->process();
                        header('Location: http://techberry.org/register');
                    }
                }
                else
                {
                    // Incorrect captcha
                    $this->notify->source()->type('error')->msg("Captcha solution was incorrect")->process();
                    header('Location: http://techberry.org/register');
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
            // Unable to validate token
            $this->notify->source()->type('error')->msg("Unable to validate your request")->process();
            header('Location: http://techberry.org/register');
        }
    }
}
$r = new register();
?>