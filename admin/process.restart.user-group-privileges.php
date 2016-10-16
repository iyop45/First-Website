<?php
namespace techberry;

require("/home/content/99/11499199/html/class.authentication.php");

use techberry\core\authentication as auth;

class resetUserGroupPrivileges extends auth
{
    function __construct()
    {
        parent::__construct('GET');
        
        if ($this->loginCheck())
        {
            if ($this->isTokenValid)
            {
                if ($this->checkActionTimer())
                {
					if($_SESSION['group_id'] >= 7)
					{
						$p = $this->permissions();
						if($p->restartUserGroupPrivileges())
						{
							$this->notify->source()->type('success')->msg("Base privileges for group have been reset")->process();
						}
						else
						{
							$this->notify->source()->type('error')->msg("Unable to complete this action")->process();
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
		header('Location: http://techberry.org/admin/maintenance');
    }
}
$rUGP = new resetUserGroupPrivileges();
?>