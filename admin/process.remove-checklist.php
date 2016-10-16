<?php
namespace techberry;

require("/home/content/99/11499199/html/class.authentication.php");

use techberry\core\authentication as auth;

class removeCheckList extends auth
{
    private $id;
    
    function __construct()
    {
        parent::__construct('POST');
        $this->id = isset($_POST['id']) ? $_POST['id'] : null;
        
        if ($this->loginCheck())
        {
            if ($this->isTokenValid)
            {
                if ($this->checkActionTimer())
                {
					if($_SESSION['group_id'] >= 6)
					{
						if($stmt = $this->mysqli->prepare("DELETE FROM admin_checklist WHERE id = ?"))
						{
							$stmt->bind_param('i',$this->id);
							$stmt->execute();
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
$rC = new removeCheckList();
?>