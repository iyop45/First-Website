<?php
namespace techberry;

require("/home/content/99/11499199/html/class.authentication.php");

use techberry\core\authentication as auth;

class resetStatistics extends auth
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
							DELETE FROM stats_Day;
							ALTER TABLE stats_Day  AUTO_INCREMENT = 1;
							DELETE FROM stats_IPs;
							ALTER TABLE stats_IPs  AUTO_INCREMENT = 1;
							DELETE FROM stats_Keyword;
							ALTER TABLE stats_Keyword  AUTO_INCREMENT = 1;
							DELETE FROM stats_Language;
							ALTER TABLE stats_Language  AUTO_INCREMENT = 1;
							DELETE FROM stats_Page;
							ALTER TABLE stats_Page  AUTO_INCREMENT = 1;	
							DELETE FROM stats_Referer;
							ALTER TABLE stats_Referer  AUTO_INCREMENT = 1;
							")){
							$this->notify->source()->type('success')->msg("Statistics have been reset")->process();
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
$rS = new resetStatistics();
?>