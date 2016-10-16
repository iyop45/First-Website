<?php
namespace techberry;

require("/home/content/99/11499199/html/class.authentication.php");

use techberry\core\authentication as auth;

class forceLogin extends auth
{
    private $username;
    
    function __construct()
    {
        parent::__construct('POST');
        $this->username = isset($_POST['username']) ? $_POST['username'] : null;
        
        if ($this->loginCheck())
        {
            if ($this->isTokenValid)
            {
                if ($this->checkActionTimer())
                {
					if($_SESSION['group_id'] >= 7)
					{
						$ua = $this->userActions();
						if($stmt = $this->mysqli->prepare("SELECT email,password FROM users WHERE username = ? LIMIT 1")){
							$stmt->bind_param('s',$this->username);
							$stmt->execute();
							$stmt->store_result();
							$stmt->bind_result($email,$password);
							$stmt->fetch();
							$stmt->close();
							if($ua->login($email,$password,$forceLogin=1)){
								header('Location: http://techberry.org/');
								$this->notify->source()->type('success')->msg("Force login successful")->process();
							}else{
								$this->notify->source()->type('error')->msg("Unable to force login")->process();
							}
						}else{
							$this->notify->source()->type('error')->msg("Failed to execute query")->process();
						}
					}
					else
					{
						header('Location: http://techberry.org/');
						$this->notify->source()->type('error')->msg("Only root users can perform this action")->process();
					}
                }
            }
            else
            {
				$this->notify->source()->type('error')->msg("Invalid token")->process();
            }
        }
        else
        {
			header('Location: http://techberry.org/');
			$this->notify->source()->type('error')->msg("Must be logged in")->process();
        }
		header('Location: http://techberry.org/admin/account');
    }
}
$fL = new forceLogin();
?>