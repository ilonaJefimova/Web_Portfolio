<?php
  $isAdmin = (isset ($_SESSION ["username"]) && $_SESSION ["username"] === "SuperSecretA");
?>
<?php if ($isAdmin): ?>
  <div class="container my-4">
    <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">
        <h3 class="fw-bold mb-2 mb-md-0">News Management</h3>
        <div class="action-buttons d-flex">
          <button class="btn btn-gradient-outline" data-bs-toggle="modal" data-bs-target="#createModal">
            <i class="bi bi-plus-circle"></i> Add News
          </button>

          <a class="btn btn-danger logout-btn" href="../controller/logout.php">
            <i class="bi bi-box-arrow-right"></i> Logout
          </a>
</div>
    
    </div>
<?php else: ?>
  <div class="container action-buttons mb-4">
    <a href="../../index.php" class="btn btn-gradient">Return to Home Page</a>
    <button onclick="openModal('loginModal')" class="btn btn-gradient-outline">Login</button>
    <!-- <a href="https://someserver.com/~place/portfolio/Block4/controller/news" class="rss-btn"> -->
    <a href="http://localhost/portfolio/Block4/controller/news.php" class="rss-btn">
      <img src="../image/rss.png" alt="RSS Feed">
    </a>
  </div>
<?php endif; ?>