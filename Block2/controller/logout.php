<?php
    session_start ();
    error_reporting (0);//Turn Off PHP Error Reporting
    $_SESSION=array ();
    setcookie ('cart_items_cookie','',time ()-2592000,'/');
    session_destroy ();
    header ("Location: ../view/Sushi.php");
?>
