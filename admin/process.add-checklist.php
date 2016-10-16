<?php
namespace techberry;

require("/home/content/99/11499199/html/class.authentication.php");

use techberry\core\authentication as auth;

class checkList extends auth
{
    private $task;
    
    function __construct()
    {
        parent::__construct('POST');
        $this->task = isset($_POST['task']) ? $_POST['task'] : null;
        
        if ($this->loginCheck())
        {
            if ($this->isTokenValid)
            {
                if ($this->checkActionTimer())
                {
					if($_SESSION['group_id'] >= 6)
					{
						if($stmt = $this->mysqli->prepare("INSERT INTO admin_checklist (task) VALUES (?)"))
						{
							$stmt->bind_param('s',$this->task);
							$stmt->execute();
							echo '<li><span>'.htmlentities($this->task).'</span><img id="'.$this->mysqli->insert_id.'" class="delete-button" width="10px" src="http://techberry.org/admin/images/close.svg" /></li>';					
							$stmt->close();
						}
						else
						{
							echo '<script type="text/javascript">					
										Messenger().post({
											message: "Failed to prepare query",
											type: "error",
											hideAfter: 10,
											hideOnNavigate: true,
											showCloseButton: true
										});
									</script>';
						}					
					}
					else
					{
						echo '<script type="text/javascript">					
									Messenger().post({
										message: "Insufficient privileges",
										type: "error",
										hideAfter: 10,
										hideOnNavigate: true,
										showCloseButton: true
									});
								</script>';
					}
                }
            }
            else
            {
				echo '<script type="text/javascript">					
							Messenger().post({
								message: "Invalid token",
								type: "error",
								hideAfter: 10,
								hideOnNavigate: true,
								showCloseButton: true
							});
						</script>';
            }
        }
        else
        {
			echo '<script type="text/javascript">					
						Messenger().post({
							message: "Must be logged in",
							type: "error",
							hideAfter: 10,
							hideOnNavigate: true,
							showCloseButton: true
						});
					</script>';
        }
    }
}
$c = new checkList();
?>