<?php
error_reporting (0);
$cart = isset ($_COOKIE ['cart_items_cookie']) ? json_decode (stripslashes ($_COOKIE ['cart_items_cookie']), true) : [];

$id = $_POST ['id'];
$action = $_POST ['action'];

if (isset ($cart [$id])) 
{
    if ($action == 'increase') 
    {
        $cart [$id]++;
    } elseif ($action == 'decrease') 
    {
        $cart [$id]--;
        if ($cart [$id] <= 0) unset ($cart [$id]);
    } elseif ($action == 'delete') 
    {
        unset ($cart [$id]);
    }
}

// Update cookie
setcookie ('cart_items_cookie', json_encode ($cart), time () + 3600*24, '/');

// Redirect back to cart page
header ("Location: ../view/viewCart.php");
exit;
?>
