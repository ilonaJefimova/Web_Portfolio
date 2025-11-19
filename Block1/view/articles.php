<?php
// Include header
include ("../model/header.php");
?>

<div class="container py-5" style="max-width: 70%;">

    <!-- Articles -->
    <div class="row">
        <?php
        include ("../model/API.php");

        $id = $_GET ["aid"];
        $itemtxt = getArticle ($id); // get articles for selected Avenger
        $article = json_decode ($itemtxt);

        if ($article) 
        {
            echo '<div class="col-12">';
            echo '  <div class="card shadow-lg" style="border-radius: 1rem;">';
            echo '    <div class="card-header bg-primary text-white text-center py-3 rounded-top">';
            echo '      <h3 class="mb-0 fw-bold">' . $article -> heading . '</h3>';
            echo '    </div>';
            echo '    <div class="card-body p-4">';

            // Image (if available)
            if (!empty ($article -> IID)) 
            {
                echo '<div class="text-center mb-3">';
                echo '<img src="../image/' . $article -> image . '" alt="Article Image" class="img-fluid rounded shadow-sm" style="max-width: 50%;">';
                echo '</div>';
            } 
            else 
            {
                echo '<p class="text-muted fst-italic">No image available</p>';
            }

            echo '<p class="text-muted small mb-1">Article ID: ' . $article -> AID . '</p>';
            echo '<p class="lead lh-lg">' . $article -> article . '</p>';
            echo '    </div>';

            echo '    <div class="card-footer text-end bg-transparent border-0">';
            echo '      <small class="text-muted">by ' . $article -> reporter_name . '</small>';
            echo '    </div>';

            echo '  </div>'; // card
            echo '</div>'; // col
        }
        else 
        {
            echo '<div class="col-12"><div class="alert alert-secondary text-center">No articles available for this Avenger.</div></div>';
        }
        ?>
    </div><!-- row -->

</div><!-- container -->

<?php
include ("../model/footer.php");
?>
