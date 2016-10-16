<?php
namespace techberry;

require("/home/content/99/11499199/html/class.authentication.php");

use techberry\core\authentication as auth;

class message extends auth
{
    private $message;
    private $username_to;
    
    function __construct()
    {
        parent::__construct('POST');
        $this->message     = isset($_POST['message']) ? $_POST['message'] : null;
        $this->username_to = isset($_POST['username_to']) ? $_POST['username_to'] : null;
        
        if ($this->loginCheck())
        {
            // If the user is not already logged in
            if ($this->isTokenValid)
            {
                if ($this->checkActionTimer())
                {
                    $_SESSION['actionTimer'] = array(
                        'action' => 'Message',
                        'time' => time(),
                        'wait' => 1
                    );
					$ul = $this->userLookups();
                    if ($ul->userExists($this->username_to))
                    {
						if($ul->is_bot($this->username_to))
						{
							$data = array(
								'type' => 'error',
								'message' => "Can't send a message to a bot"
							);	
						}
						else
						{
							if ($_SESSION['username'] == $this->username_to)
							{
								// Can't send a message to yourself
								$data = array(
									'type' => 'error',
									'message' => "Can't send a message to yourself"
								);
							}
							else
							{
								if (strlen($this->message) >= 300)
								{
									$data = array(
										'type' => 'error',
										'message' => 'Your message is too long'
									);
								}
								else if (strlen($this->message) <= 1)
								{
									$data = array(
										'type' => 'error',
										'message' => 'Your message is too short'
									);
								}
								else
								{
									$m = $this->messages();
									if (($html = $m->sendMessage($this->username_to, $this->message)))
									{
										if (($user_id = $ul->userID($this->username_to)))
										{
											if (!$ul->isOnline($user_id))
											{
												$ua = $this->userActions();
												$ua->addNotification($user_id, 'new_message', $_SESSION['user_id']);
											}
										}
										$data = array(
											'type' => 'success',
											'message' => 'Message has been sent',
											'content' => $html
										);
									}
									else
									{
										$data = array(
											'type' => 'error',
											'message' => 'Error sending message'
										);
									}
								}
							}
						}
                    }
                    else
                    {
                        // User does not exist
                        $data = array(
                            'type' => 'error',
                            'message' => 'User does not exist'
                        );
                    }
                }
                else
                {
                    // The user must wait before
                    // performing another action
                    $time = isset($this->actionTimeCountDown) ? 'NaN' : $this->actionTimeCountDown;
                    $data = array(
                        'type' => 'error',
                        'message' => "You must wait " . $time . " seconds"
                    );
                }
            }
            else
            {
                // Token is not set or is invalid
                $data = array(
                    'type' => 'error',
                    'message' => 'Invalid request'
                );
            }
        }
        else
        {
            // User already logged in
            $data = array(
                'type' => 'error',
                'message' => "You're not logged in"
            );
        }
        echo json_encode($data);
    }
}
$m = new message();
?>