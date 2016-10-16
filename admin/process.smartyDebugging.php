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
        parent::__construct('GET');
        $this->username = isset($_GET['username']) ? $_GET['username'] : null;
        $this->reputation = isset($_GET['reputation']) ? $_GET['reputation'] : null;
        
        if ($this->loginCheck())
        {
            if ($this->isTokenValid)
            {
                if ($this->checkActionTimer())
                {
					if($_SESSION['group_id'] >= 6)
					{
						if(isset($_SESSION['smartyDebugMode']))
						{
							if($_SESSION['smartyDebugMode'] == 0)
							{
								$_SESSION['smartyDebugMode'] = 1;
								$this->notify->source()->type('success')->msg("Enabled smarty debugger")->process();
							}
							else
							{
								$_SESSION['smartyDebugMode'] = 0;
								$this->notify->source()->type('success')->msg("Disabled smarty debugger")->process();
							}
						}
						else
						{
							$_SESSION['smartyDebugMode'] = 1;
							$this->notify->source()->type('success')->msg("Enabled smarty debugger")->process();
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
		header('Location: http://techberry.org/admin/bugs');
    }
}
$sR = new sendReputation();
?>