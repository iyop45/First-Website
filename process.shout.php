<?php
namespace techberry;

require("/home/content/99/11499199/html/class.authentication.php");

use techberry\core\authentication as auth;

class shout extends auth
{
    private $message;
    
    function __construct()
    {
        parent::__construct('POST');
        $this->message = isset($_POST['message']) ? $_POST['message'] : null;
        
        if ($this->loginCheck())
        {
            if ($this->isTokenValid)
            {
                if ($this->checkActionTimer())
                {
                    if (strlen($this->message) >= 600)
                    {
                        die(json_encode(array(
                            'type' => 'error',
                            'message' => "Message too long"
                        )));
                    }
                    if (strlen($this->message) <= 5)
                    {
                        die(json_encode(array(
                            'type' => 'error',
                            'message' => "Message too short"
                        )));
                    }
                    $_SESSION['actionTimer'] = array(
                        'action' => 'Shout',
                        'time' => time(),
                        'wait' => 2
                    );
					$s = $this->shouts($this->mysqli);
                    if (($html = $s->sendShout($this->message)))
                    {
                        die(json_encode(array(
                            'type' => 'success',
                            'message' => "Shout has been sent",
                            'content' => $html
                        )));
                    }
                    else
                    {
                        die(json_encode(array(
                            'type' => 'error',
                            'message' => "An error occurred"
                        )));
                    }
                }
                else
                {
                    // The user must wait before
                    // performing another action
                    $time = empty($this->actionTimeCountDown) ? 'NaN' : $this->actionTimeCountDown;
                    die(json_encode(array(
                        'type' => 'error',
                        'message' => "You must wait " . $time . " seconds"
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
            // User is not logged in
            die(json_encode(array(
                'type' => 'error',
                'message' => "Must be logged in"
            )));
        }
    }
}
$s = new shout();
?>