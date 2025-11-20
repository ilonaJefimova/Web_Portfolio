<?php
    session_start ();
    error_reporting (0);//Turn Off PHP Error Reporting
    $_SESSION = array ();
    if (ini_get("session.use_cookies")) 
    {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }
    session_destroy ();
    header ("Location: ../view/index.php");
?>
