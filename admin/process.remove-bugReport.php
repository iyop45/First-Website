<?php
namespace techberry;

require("/home/content/99/11499199/html/class.authentication.php");

use techberry\core\authentication as auth;

class removeBugReport extends auth
{
    private $id;
    
    function __construct()
    {
        parent::__construct('GET');
        $this->id = isset($_GET['id']) ? $_GET['id'] : null;
        
        if ($this->loginCheck())
        {
            if ($this->isTokenValid)
            {
                if ($this->checkActionTimer())
                {
					if($_SESSION['group_id'] >= 6)
					{
						if($stmt = $this->mysqli->prepare("SELECT fileName FROM admin_bugReports WHERE id = ? LIMIT 1"))
						{
							$stmt->bind_param('i',$this->id);
							$stmt->execute();
							$stmt->bind_result($fileName);
							$stmt->fetch();
							$stmt->close();
							if($fileName){
								unlink('/home/content/99/11499199/html/images/bugs/'.$fileName.'.png');
							}
							if($stmt = $this->mysqli->prepare("DELETE FROM  admin_bugReports WHERE id = ?"))
							{
								$stmt->bind_param('i',$this->id);
								$stmt->execute();
								$stmt->close();
								$this->notify->source()->type('success')->msg("Removed bug")->process();
								header('Location: http://www.techberry.org/admin/bugs');
							}
							else
							{
								$this->notify->source()->type('error')->msg("Unable to delete bug entry")->process();
								header('Location: http://www.techberry.org/admin/bugs');
							}
						}
						else
						{
							$this->notify->source()->type('error')->msg("Unable to select image name associated with bug")->process();
							header('Location: http://www.techberry.org/admin/bugs');
						}
					}
					else
					{
						$this->notify->source()->type('error')->msg("Only administrators or higher can perform this action")->process();
						header('Location: http://www.techberry.org/admin/bugs');
					}
                }
				else
				{
					$this->notify->timer($this->actionTimeCountDown);
					header('Location: http://www.techberry.org/admin/bugs');			
				}
            }
            else
            {
				$this->notify->source()->type('error')->msg("Invalid token")->process();
				header('Location: http://www.techberry.org/admin/bugs');
            }
        }
        else
        {
			$this->notify->source()->type('error')->msg("Must be logged in")->process();
			header('Location: http://www.techberry.org/admin/bugs');
        }
    }
}
$rBR = new removeBugReport();
?>