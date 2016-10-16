<?php
namespace techberry;

require("/home/content/99/11499199/html/class.authentication.php");

use techberry\core\authentication as auth;

class resetWallPosts extends auth
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
						if($stmt = $this->mysqli->multi_query("
							DELETE FROM user_wallPosts;
							ALTER TABLE user_wallPosts AUTO_INCREMENT = 1")){
							$this->notify->source()->type('success')->msg("All wall posts has been removed")->process();
						}
						else
						{
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
		header('Location: http://techberry.org/admin/maintenance');
    }
}
$rWP = new resetWallPosts();
?>