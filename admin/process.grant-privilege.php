<?php
namespace techberry;

require("/home/content/99/11499199/html/class.authentication.php");

use techberry\core\authentication as auth;

class grantPrivilege extends auth
{
    private $privilege;
    
    function __construct()
    {
        parent::__construct('POST');
        $this->username = isset($_POST['username']) ? $_POST['username'] : null;
        $this->privilege = isset($_POST['privilege']) ? $_POST['privilege'] : null;
        
        if ($this->loginCheck())
        {
            if ($this->isTokenValid)
            {
                if ($this->checkActionTimer())
                {
					if($_SESSION['group_id'] >= 7)
					{
						$ua = $this->userActions();
					}
					else
					{
						header('Location: http://techberry.org/');
						$this->notify->source()->type('error')->msg("Only administrators or higher can perform this action")->process();
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
$gP = new grantPrivilege();
?>