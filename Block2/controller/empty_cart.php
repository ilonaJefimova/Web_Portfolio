<?php
    error_reporting (0);//Turn Off PHP Error Reporting
    setcookie ('cart_items_cookie','',time ()-2592000,'/');
    unset ($_COOKIE ['cart_items_cookie']);
    header ("Location: ../view/Sushi.php");
?>
