<?php
namespace techberry;

require("/home/content/99/11499199/html/class.authentication.php");

use techberry\core\authentication as auth;

class logout extends auth
{
    function __construct()
    {
        parent::__construct('GET');
        if ($this->isTokenValid)
        {
            $_SESSION['actionTimer'] = array(
                'action' => 'Log out',
                'time' => time(),
                'wait' => 10
            );
            // Action timer is not checked for logout
            // As that would be a pain for the user
            if ($stmt = $this->mysqli->prepare("
								UPDATE members
								SET online_status = 'offline'
								WHERE id = ?"))
            {
                $stmt->bind_param('i', $_SESSION['user_id']);
                $stmt->execute(); // Set users online status to off-line
                $stmt->close();
            }
            // Unset all session values
            $_SESSION = array();
            // get session parameters
            $params   = session_get_cookie_params();
            // Delete the actual cookie
            setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
            // Destroy session
            session_destroy();
            header('Location: ./?');
        }
    }
}
$l = new logout();
?>