<?php
    error_reporting (0);
    include ("../model/header.php"); 
?>

<div class="container py-5" style="max-width: 70%;">
<?php
    include ("../model/API.php");

    $id = $_GET ["cid"];
    $itemtxt = getAvengers ($id);
    $item = json_decode ($itemtxt);

    echo '<div class="col-12">';
    echo '  <div class="card shadow-lg style="border-radius: 1rem;">';
    echo '    <div class="card-header bg-primary text-white text-center py-3 rounded-top">';
    echo '      <h2 class="mb-0 fw-bold">'.$item -> name.'</h2>';
    echo '    </div>';
    echo '    <div class="card-body p-4">';
    echo '      <div class="text-center mb-4">';
    echo '        <img src="../image/'.$item -> image.'" class="main-avenger-img img-fluid rounded shadow-sm" alt="'.$item -> name.'">';
    echo '      </div>';
    echo '      <p class="text-muted small">Avenger ID: '.$item -> id.'</p>';
    echo '      <p class="lead lh-lg">'.$item -> description.'</p>';
    
    $link = $item -> link;
    echo '      <hr class="border-secondary my-4"><h5 class="fw-bold text-primary mb-3">More Images:</h5><div class="d-flex flex-wrap gap-3 justify-content-center">';
    
    $itemimg = getAllImg ($id);
    $itemi = json_decode ($itemimg);
    for ($i = 0; $i < sizeof ($itemi); $i++) 
    {
        echo '<img src="../image/'.$itemi [$i] -> image.'" class="extra-img rounded shadow-sm" style="width: 140px; height: 140px; object-fit: cover;" alt="Extra image">';
    }
    echo '</div>';

    echo '<hr class="border-secondary my-4"><h5 class="fw-bold text-primary mb-3">Articles:</h5>';
    $itemArt = getArticles ($id);
    $itemA = json_decode ($itemArt);
    if ($itemA && sizeof ($itemA) > 0) 
    {
        foreach ($itemA as $article) 
        {
            echo '<p><a href="../controller/displayrec.php?aid='.$article -> AID.'&type=articles" class="article-link">'.$article -> heading.'</a></p>';
        }
    } 
    else 
    {
        echo '<p class="text-muted">No related articles available.</p>';
    }

    echo '    </div>';
    echo '    <div class="card-footer text-center bg-transparent border-0 pb-4">';
    echo '      <a href="'.$link.'" target="_blank" class="btn btn-primary px-4">Learn more about '.$item -> name.'</a>';
    echo '    </div>';
    echo '  </div>';
    echo '</div>';
?>
</div>

<?php include ("../model/footer.php"); ?>
