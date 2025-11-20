<?php 
    session_start ();
    error_reporting (0); //Turn Off PHP Error Reporting

    $pageTitle = "Edinburgh News"; // default title

    if (basename ($_SERVER ['PHP_SELF']) == "admin.php") 
    {
        $pageTitle = "News - Admin";
    } 
    elseif (basename ($_SERVER ['PHP_SELF']) == "index.php") 
    {
        $pageTitle = "Edinburgh News";
    } 

    $isAdmin = (isset ($_SESSION ["username"]) && $_SESSION ["username"] === "SuperSecretA");
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Local styles -->
  <link rel="stylesheet" href="../css/index.css?v=2.0">
  <link rel="stylesheet" href="../css/Login.css">

  <title><?=htmlspecialchars ($pageTitle)?></title>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../js/Login.js"></script>
  <script src="../js/news.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>

<header class="header position-relative mb-4">
  <?php if ($isAdmin): ?>
    <img src="../image/News_Admin.jpg" alt="Admin">
    <div class="overlay">
      <h2>News - Admin</h2>
      <h4>Dashboard</h4>
    </div>
  <?php else: ?>
    <img src="../image/edinburgh.jpg" alt="Edinburgh">
    <div class="overlay">
      <h2>XML News</h2>
    </div>
  <?php endif; ?>

</header>