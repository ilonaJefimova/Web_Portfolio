<?php
    session_start ();
    error_reporting (0);
    include ('../model/header.php');

    if (!isset ($_SESSION["username"]) || $_SESSION["username"] !== "SuperSecretA") 
    {
        echo "<script>
                Swal.fire({
                    icon: 'error',
                    title: 'Access Denied',
                    text: 'Only admin can view this page.'
                }).then(() => window.location='../view/Sushi.php');
            </script>";
        exit;
    }
?>

<div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="fw-bold">Sushi Management</h2>

    <?php
        include ("../model/API.php");
        $items = json_decode (getAllSushi ());
    ?>

    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createModal">Add Sushi</button>
</div>

<div class="card shadow p-3">
    <table class="table table-hover align-middle">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Description</th>
                <th>£ Price</th>
                <th width="150">Actions</th>
            </tr>
        </thead>

        <tbody>
        <?php foreach ($items as $i): ?>
            <tr>
                <td><?= $i->id ?></td>
                <td><img src="../image/<?= $i->image ?>" class="rounded" style="height:60px;"></td>
                <td class="fw-bold"><?= $i->name ?></td>
                <td><?= $i->description ?></td>
                <td>£<?= number_format ($i->price,2) ?></td>
                <td>
                    <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#updateModal<?= $i->id ?>">Edit</button>
                    <a href="../controller/deleterec.php?id=<?= $i->id ?>" class="btn btn-sm btn-danger" onclick="return confirm('Delete this sushi?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Update -->
<?php foreach ($items as $i): ?>
<div class="modal fade" id="updateModal<?= $i->id ?>">
    <div class="modal-dialog">
        <form class="modal-content shadow rounded-3" method="POST" action="../controller/updaterec.php" enctype="multipart/form-data">
            <div class="modal-header bg-dark text-white rounded-top">
                <h5 class="modal-title">Update Sushi</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body bg-light">
                <input type="hidden" name="id" value="<?= $i->id ?>">
                <label class="mt-3">Name</label>
                <input type="text" class="form-control" name="name" value="<?= $i->name ?>">
                <label class="mt-3">Description</label>
                <input type="text" class="form-control" name="description" value="<?= $i->description ?>">
                <label class="mt-3">Price</label>
                <input type="number" step="0.01" class="form-control" name="price" value="<?= $i->price ?>">
                <label class="mt-3">Current Image</label>
                <input type="hidden" name="current_image" value="<?= $i->image ?>">
                    <img src="../image/<?= $i->image ?>" class="img-fluid rounded mb-2" style="height:80px;">
                <label class="mt-3">Upload New Image (optional)</label>
                <input type="file" class="form-control" name="image">
            </div>
            <div class="modal-footer bg-dark rounded-bottom">
                <button class="btn btn-primary">Save Changes</button>
            </div>
        </form>
    </div>
</div>
<?php endforeach; ?>

<!-- Create -->
<div class="modal fade" id="createModal">
    <div class="modal-dialog">
        <form class="modal-content shadow rounded-3" method="POST" action="../controller/createrec.php" enctype="multipart/form-data">
            <div class="modal-header bg-dark text-white rounded-top">
                <h5 class="modal-title">Create New Sushi</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body bg-light">
                <label class="mt-3">Name</label>
                <input type="text" class="form-control" name="name">
                <label class="mt-3">Description</label>
                <input type="text" class="form-control" name="description">
                <label class="mt-3">Price</label>
                <input type="number" step="0.01" class="form-control" name="price">
                <label class="mt-3">Image (optional)</label>
                <input type="file" class="form-control" name="image">
            </div>
            <div class="modal-footer bg-dark rounded-bottom">
                <button class="btn btn-success">Create</button>
            </div>
        </form>
    </div>
</div>

<?php include ('../model/footer.php');?>
