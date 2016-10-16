<?php
namespace techberry;

require("/home/content/99/11499199/html/class.authentication.php");

use techberry\core\authentication as auth;

class changePassword extends auth
{
    private $oldPassword;
    private $newPassword;
    private $verifyNewPassword;
    
    function __construct()
    {
        parent::__construct('POST');
        $this->oldPassword    = isset($_POST['oldPassword']) ? $_POST['oldPassword'] : null;
        $this->newPassword    = isset($_POST['newPassword']) ? $_POST['newPassword'] : null;
        $this->verifyNewPassword    = isset($_POST['verifyPassword']) ? $_POST['verifyPassword'] : null;
        
        if ($this->loginCheck())
        {
            // If the user is not logged in
            if ($this->isTokenValid)
            {
                if ($this->checkActionTimer())
                {
                    $_SESSION['actionTimer'] = array(
                        'action' => 'Changed password',
                        'time' => time(),
                        'wait' => 5
                    );
					if($stmt = $this->mysqli->prepare("SELECT salt, password FROM users WHERE id = ? LIMIT 1")){
						$stmt->bind_param('i',$_SESSION['user_id']);
						$stmt->execute();
						$stmt->bind_result($db_salt,$db_password);
						$stmt->fetch();
						$stmt->close();
						$this->oldPassword = hash('sha512', $this->oldPassword);
						$this->oldPassword = hash('sha512', $this->oldPassword.$db_salt);
						
						if($db_password == $this->oldPassword)
						{
							if(strlen($this->newPassword) >= 8 && strlen($this->newPassword) <= 40)
							{
								$this->newPassword = hash('sha512', $this->newPassword);
								$this->newPassword = hash('sha512', $this->newPassword.$db_salt);
								if($stmt = $this->mysqli->prepare("UPDATE users SET password = ? WHERE id = ?"))
								{
									$stmt->bind_param('ss',$this->newPassword,$_SESSION['user_id']);
									$stmt->execute();
									$stmt->close();
									$this->notify->source()->type('success')->msg("Your password has been changed")->process();
									header('Location: http://techberry.org/account/password');
								}
								else
								{
									$this->notify->source()->type('error')->msg("An error has occurred")->process();
									header('Location: http://techberry.org/account/password');										
								}
							}
							else
							{
								$this->notify->source()->type('error')->msg("Invalid password")->process();
								header('Location: http://techberry.org/account/password');										
							}
						}
						else
						{
							$this->notify->source()->type('error')->msg("Old password is incorrect")->process();
							header('Location: http://techberry.org/account/password');			
						}
					}
					else
					{
						$this->notify->source()->type('error')->msg("An error has occurred")->process();
						header('Location: http://techberry.org/account/password');
					}
                }
                else
                {
                    // The user must wait before
                    // performing another action
                    $this->notify->timer($this->actionTimeCountDown);
                    header('Location: http://techberry.org/account/password');
                }
            }
            else
            {
                // Token is not set or is invalid
                $this->notify->source()->type('error')->msg("Invalid request")->process();
                header('Location: http://techberry.org/');
            }
        }
        else
        {
            // User already logged in
            $this->notify->source()->type('error')->msg("You're not logged in")->process();
            header('Location: http://techberry.org/');
        }
    }
}
$cP = new changePassword();
?>