<?php
namespace techberry;

require("/home/content/99/11499199/html/class.authentication.php");

use techberry\core\authentication as auth;

class sendReputation extends auth
{
    private $username;
    private $reputation;
    
    function __construct()
    {
        parent::__construct('POST');
        $this->username = isset($_POST['username']) ? $_POST['username'] : null;
        $this->reputation = isset($_POST['reputation']) ? $_POST['reputation'] : null;
        
        if ($this->loginCheck())
        {
            if ($this->isTokenValid)
            {
                if ($this->checkActionTimer())
                {
					if($_SESSION['group_id'] >= 6)
					{
						$ua = $this->userActions();
						if($stmt = $this->mysqli->prepare("SELECT id FROM users WHERE username = ? LIMIT 1")){
							$stmt->bind_param('s',$this->username);
							$stmt->execute();
							$stmt->store_result();
							$stmt->bind_result($id);
							$stmt->fetch();
							$stmt->close();
							if($ua->updateReputation($this->reputation,$id)){
								$this->notify->source()->type('success')->msg("Updated users reputation")->process();
							}else{
								$this->notify->source()->type('error')->msg("Unable to update users reputation")->process();
							}
						}
						else
						{
							$this->notify->source()->type('error')->msg("Failed to execute query")->process();
						}
					}
					else
					{
						header('Location: http://techberry.org/');
						$this->notify->source()->type('error')->msg("Only administrators or higher can perform this action")->process();
					}
                }
				else
				{
					$this->notify->timer($this->actionTimeCountDown);
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
		header('Location: http://techberry.org/admin/users');
    }
}
$sR = new sendReputation();
?>