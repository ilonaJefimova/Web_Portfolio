<?php
    include ("../model/API.php");
    error_reporting (0);

    $id = isset ($_GET['id']) ? $_GET ['id'] : "";
    if (empty ($id)) 
    {
        header ("Location: ../view/Sushi.php");
        exit ();
    }

    // Read existing cart from cookie
    $saved_cart_items = [];
    if (isset ($_COOKIE['cart_items_cookie'])) 
    {
        $saved_cart_items = json_decode (stripslashes ($_COOKIE ['cart_items_cookie']), true);
        if (!is_array ($saved_cart_items)) $saved_cart_items = [];
    }

    // Add item or increment quantity
    if (isset ($saved_cart_items [$id])) 
    {
        $saved_cart_items [$id] += 1; // integer
    } 
    else 
    {
        $saved_cart_items [$id] = 1; // first time
    }

    // Save back to cookie
    setcookie ("cart_items_cookie", json_encode ($saved_cart_items), time () + (86400 * 30), '/');
    $_COOKIE ['cart_items_cookie'] = json_encode ($saved_cart_items);

    // Redirect back to Sushi page
    header ("Location: ../view/Sushi.php", true, 303);
    exit ();
?>
