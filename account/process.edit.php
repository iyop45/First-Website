<?php
namespace techberry;

require("/home/content/99/11499199/html/class.authentication.php");

use techberry\core\authentication as auth;

class edit extends auth
{
    private $occupation;
    private $homepage;
    private $interests;
    
    function __construct()
    {
        parent::__construct('POST');
        $this->occupation    = isset($_POST['occupation']) ? substr($_POST['occupation'],0,50) : null;
        $this->homepage    = isset($_POST['homepage']) ? substr($_POST['homepage'],0,50) : null;
        $this->interests    = isset($_POST['interests']) ? substr($_POST['interests'],0,100) : null;
        
        if ($this->loginCheck())
        {
            // If the user is not logged in
            if ($this->isTokenValid)
            {
                if ($this->checkActionTimer())
                {
                    $_SESSION['actionTimer'] = array(
                        'action' => 'Edit account',
                        'time' => time(),
                        'wait' => 5
                    );
					if($stmt = $this->mysqli->prepare("UPDATE users SET occupation = ?,
																										 homepage = ?,
																										 interests = ?
																						WHERE id = ?")){
						$stmt->bind_param('sssi',$this->occupation,$this->homepage,$this->interests,$_SESSION['user_id']);
						$stmt->execute();
						$stmt->close();
						$this->notify->source()->type('success')->msg("Successfully edited your account details")->process();
						header('Location: http://techberry.org/account/edit');
					}
					else
					{
						$this->notify->source()->type('error')->msg("Unable to prepare query")->process();
						header('Location: http://techberry.org/account/edit');					
					}										
                }
                else
                {
                    // The user must wait before
                    // performing another action
                    $this->notify->timer($this->actionTimeCountDown);
                    header('Location: http://techberry.org/account/edit');
                }
            }
            else
            {
                // Token is not set or is invalid
                $this->notify->source()->type('error')->msg("Invalid request")->process();
                header('Location: http://techberry.org/');
            }
        }
        else
        {
            // User already logged in
            $this->notify->source()->type('error')->msg("You're not logged in")->process();
            header('Location: http://techberry.org/');
        }
    }
}
$e = new edit();
?>
?>