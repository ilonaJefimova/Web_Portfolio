<?php 
    session_start ();
    error_reporting (0); //Turn Off PHP Error Reporting

    $pageTitle = "Sushi Menu"; // default title

    if (basename ($_SERVER ['PHP_SELF']) == "order_process.php") 
    {
        $pageTitle = "Payment";
    } 
    elseif (basename ($_SERVER ['PHP_SELF']) == "Sushi.php") 
    {
        $pageTitle = "Sushi Menu";
    } 
    elseif (basename ($_SERVER ['PHP_SELF']) == "viewCart.php") 
    {
        $pageTitle = "Cart";
    } 
    elseif (basename ($_SERVER ['PHP_SELF']) == "Change.php") 
    {
        $pageTitle = "Dashboard";
    }

    $isAdmin = (isset ($_SESSION ["username"]) && $_SESSION ["username"] === "SuperSecretA");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=htmlspecialchars($pageTitle)?></title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/login.css">

    <!-- JS -->
    <script src="../js/login.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="../view/Sushi.php">
            <img src="../image/Sushi.jpg" alt="Logo" style="height:40px; width:auto; border-radius:6px; margin-right:10px;">Sushi Shop</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="btn btn-outline-secondary ms-2" href="viewCart.php"> <img src="../image/cart.png" alt="Cart"> Cart</a>
                </li>

                <?php if ($isAdmin): ?>
                    <li class="nav-item">
                        <a class="btn btn-warning ms-2" href="../view/Change.php">Dashboard</a>
                    </li>
                <?php endif; ?>
                <?php if (isset ($_SESSION ["username"])): ?>
                    <li class="nav-item">
                        <span class="nav-link">Hello, <?= $_SESSION ["username"] ?></span>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-danger ms-2" href="../controller/logout.php">Logout</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <button onclick="openModal('loginModal')" class="btn btn-outline-light ms-2">Login</button>
                    </li>
                    <li class="nav-item">
                        <button onclick="openModal('registerModal')" class="btn btn-primary ms-2">Register</button>
                    </li>
                    <li class="nav-item">
                        <a href="../../index.php" class="btn btn-outline-primary ms-2">&larr; Back to Home</a>
                    </li>
                <?php endif; ?>

            </ul>
        </div>
    </div>
</nav>

<!-- LOGIN FROM -->
<div id="loginModal" class="modal-custom">
    <div class="modal-content-custom">
        <span class="close" onclick="closeModal('loginModal')">&times;</span>
            <div class="modal-avatar">
                <img src="../image/img_avatar2.png" alt="Avatar">
            </div>
        <h3 class="text-center mb-3">Login</h3>

        <form action="../controller/loginrec.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
    </div>
</div>

<!-- REGISTER FORM-->
<div id="registerModal" class="modal-custom">
    <div class="modal-content-custom">
        <span class="close" onclick="closeModal('registerModal')">&times;</span>
        <h3 class="text-center mb-3">Register</h3>

        <form action="../controller/register.php" method="POST">
            <input type="text" name="Name" placeholder="Name" required>
            <input type="text" name="Surname" placeholder="Surname" required>
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <input type="password" id="confirm_password" name="confirm_password"
                   placeholder="Confirm Password" onkeyup="checkPasswordMatch()" required>
            <span id="message"></span>
            <button type="submit" class="btn btn-success w-100">Register</button>
        </form>
    </div>
</div>

<div class="container my-4">
