<?php
  error_reporting (0);
  include ("../model/header.php"); 
?>

<main class="container my-5">
  <div class="row g-4">
    <?php
      include ("../model/API.php");
      $itemtxt = getAllAvengers ();
      $item = json_decode ($itemtxt);

      foreach ($item as $hero) 
      {
        echo '
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="card h-100 avenger-card">
            <img src="../image/' . $hero -> image . '" alt="' . $hero -> name . '" class="card-img-top avenger-img">
            <div class="card-body">
              <h5 class="card-title">' . $hero -> name . '</h5>
              <p class="card-text">' . substr ($hero -> description, 0, 100) . '...</p>
            </div>
            <div class="card-footer bg-transparent border-0">
              <a href="../controller/displayrec.php?cid=' . $hero -> id . '&type=individual" class="btn btn-primary btn-sm w-100">
                Read More →
              </a>
            </div>
          </div>
        </div>';
      }
    ?>
  </div>
</main>

<?php include ("../model/footer.php"); ?>
