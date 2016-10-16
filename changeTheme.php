<?php
namespace techberry;

require("class.authentication.php");

use techberry\core\authentication as auth;

class theme extends auth
{
    function __construct()
    {
        $redirect = $this->validateRedirect($_SERVER['HTTP_REFERER']);
        if (isset($_GET['v']))
        {
            $themes = array(
                'red',
                'green',
                'blue',
                'yellow',
                'purple'
            );
            if (in_array($_GET['v'], $themes))
            {
                setcookie("theme", $_GET['v'], time() + (10 * 365 * 24 * 60 * 60));
                header('Location: ' . $redirect);
            }
            else
            {
                header('Location: ' . $redirect);
            }
        }
        else
        {
            header('Location: ' . $redirect);
        }
    }
}
$t = new theme();
?>