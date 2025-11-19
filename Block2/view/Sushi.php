<?php
error_reporting (0);
include ("../model/header.php");
include ("../model/API.php");

// Retrieve sushi items
$itemtxt = getAllSushi ();
$items = json_decode ($itemtxt);
?>

<h1 class="text-center mb-4">Sushi Menu</h1>

<div class="row g-4">
<?php foreach ($items as $sushi): ?>
    <div class="col-md-3">
        <div class="card shadow-sm h-100">

            <img src="../image/<?= $sushi->image ?>" class="card-img-wrapper" alt="<?= $sushi->name ?>">


            <div class="card-body">
                <h5 class="card-title"><?= $sushi->name ?></h5>
                <p class="card-text"><?= substr ($sushi->description, 0, 100) ?>...</p>
                <p class="text-danger fw-bold">£<?= $sushi->price ?></p>
            </div>

            <div class="card-footer bg-white border-0 text-center">
                <a href="../controller/add_item.php?id=<?= $sushi->id ?>" 
                   class="btn btn-success w-100">Add to Cart</a>
            </div>

        </div>
    </div>
<?php endforeach; ?>
</div>

<?php include ("../model/footer.php"); ?>
