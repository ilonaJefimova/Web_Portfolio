<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CMP306 - Dynamic Web Development 2</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
        }
        .hero {
            background: url('https://images.unsplash.com/photo-1498050108023-c5249f4df085') center/cover no-repeat;
            color: white;
            text-align: center;
            padding: 8rem 2rem;
            position: relative;
        }
        .hero::after {
            content: '';
            position: absolute;
            top:0; left:0; width:100%; height:100%;
            background: rgba(0,0,0,0.5);
        }
        .hero-content {
            position: relative;
            z-index: 2;
        }
        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }
        .hero p {
            font-size: 1.25rem;
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }
        footer {
            background: #343a40;
            color: white;
            padding: 2rem 0;
            text-align: center;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
  <div class="container">
    <a class="navbar-brand fw-bold" href="index.php">Portfolio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="block1Dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Block 1</a>
          <ul class="dropdown-menu" aria-labelledby="block1Dropdown">
            <li><a class="dropdown-item" href="Block1/view/avengers.php">Basic Dynamic Website</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="block2Dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Block 2</a>
          <ul class="dropdown-menu" aria-labelledby="block2Dropdown">
            <li><a class="dropdown-item" href="Block2/view/Sushi.php">Selling Site</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="block3Dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Block 3</a>
          <ul class="dropdown-menu" aria-labelledby="block3Dropdown">
            <li><a class="dropdown-item" href="Block3/view/Change.php">IoT Site</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="block4Dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Block 4</a>
          <ul class="dropdown-menu" aria-labelledby="block4Dropdown">
            <li><a class="dropdown-item" href="Block4/view/index.php">XML Elements</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <h1>Portfolio</h1>
        <p>Dynamic Web Development</p>
    </div>
</section>

<!-- Portfolio Section -->
<section class="container py-5">
    <div class="row g-4">
        <div class="col-md-6 col-lg-3">
            <div class="card card-hover h-100">
                <div class="card-body text-center">
                    <i class="fa-solid fa-laptop-code fa-2xl mb-3 text-success"></i>
                    <h5 class="card-title">Block 1</h5>
                    <p class="card-text">Basic Dynamic Website</p>
                    <a href="Block1/view/avengers.php" class="btn btn-success">View Project</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card card-hover h-100">
                <div class="card-body text-center">
                    <i class="fa-solid fa-shop fa-2xl mb-3 text-success"></i>
                    <h5 class="card-title">Block 2</h5>
                    <p class="card-text">Selling Site</p>
                    <a href="Block2/view/Sushi.php" class="btn btn-success">View Project</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card card-hover h-100">
                <div class="card-body text-center">
                    <i class="fa-solid fa-microchip fa-2xl mb-3 text-success"></i>
                    <h5 class="card-title">Block 3</h5>
                    <p class="card-text">IoT Site</p>
                    <a href="Block3/view/Change.php" class="btn btn-success">View Project</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="card card-hover h-100">
                <div class="card-body text-center">
                    <i class="fa-solid fa-code fa-2xl mb-3 text-success"></i>
                    <h5 class="card-title">Block 4</h5>
                    <p class="card-text">XML Elements</p>
                    <a href="Block4/view/index.php" class="btn btn-success">View Project</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer>
    <p>&copy; Portfolio | 2021</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
