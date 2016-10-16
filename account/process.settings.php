<?php
namespace techberry;

require("/home/content/99/11499199/html/class.authentication.php");

use techberry\core\authentication as auth;

class settings extends auth
{
    private $disabledAPIAccess;
    private $subscribedToNewsletter;
    private $emailNotifications;
    private $showLockedButtons;
    
    function __construct()
    {
        parent::__construct('POST');
        $this->disabledAPIAccess    = isset($_POST['settings_api']) ? 1 : 0;
        $this->subscribedToNewsletter    = isset($_POST['settings_newsletter']) ? 1 : 0;
        $this->emailNotifications    = isset($_POST['settings_emails']) ? 1 : 0;
        $this->showLockedButtons    = isset($_POST['settings_lockedButtons']) ? 1 : 0;
        
        if ($this->loginCheck())
        {
            // If the user is not logged in
            if ($this->isTokenValid)
            {
                if ($this->checkActionTimer())
                {
                    $_SESSION['actionTimer'] = array(
                        'action' => 'Changed settings',
                        'time' => time(),
                        'wait' => 5
                    );
					if($stmt = $this->mysqli->prepare("UPDATE users SET settings_disableAPIAccess=?,
																										  settings_subscribedToNewsletter=?,
																										  settings_emailNotifications=?,
																										  settings_showLockedButtons=?
																			WHERE id=?")){
						$stmt->bind_param('iiiii',$this->disabledAPIAccess,$this->subscribedToNewsletter,$this->emailNotifications,$this->showLockedButtons,$_SESSION['user_id']);
						$stmt->execute();
						$stmt->close();
						// or else the show buttons setting would have to be checked on every page ( class.contents.php )
						// hence this value is simply checked as a session var
						$_SESSION['settings_showLockedButtons'] = $this->showLockedButtons;
						$this->notify->source()->type('success')->msg("Successfully updated your settings")->process();
						header('Location: http://techberry.org/account/settings/');								
					}
					else
					{
						$this->notify->source()->type('error')->msg("Unable to change your settings")->process();
						header('Location: http://techberry.org/account/settings/');				
					}
                }
                else
                {
                    // The user must wait before
                    // performing another action
                    $this->notify->timer($this->actionTimeCountDown);
                    header('Location: http://techberry.org/account/settings/');
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
$s = new settings();
?>