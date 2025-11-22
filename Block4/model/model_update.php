<?php foreach ($items as $n): ?>
    <div class="modal fade" id="updateModal<?= $n->id ?>" aria-labelledby="updateModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form class="modal-content shadow ounded-3" method="POST" action="../controller/update_news.php">

                <div class="modal-header bg-dark text-white rounded-top">
                    <h5 class="modal-title" id="updateModalLabel">Update News</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body bg-light">

                    <input type="hidden" name="id" value="<?= $n->id ?>">

                    <label class="mt-2 d-block">Title</label>
                    <input type="text" class="form-control" name="title" value="<?= $n->title ?>">

                    <label class="mt-2 d-block">Description</label>
                    <input type="text" class="form-control" name="description" value="<?= $n->description ?>">

                    <label class="mt-2 d-block">Link</label>
                    <input type="text" class="form-control" name="link" value="<?= $n->link ?>">

                    <label class="mt-2 d-block">Current Image</label>
                    <input type="hidden" name="current_image" value="<?= $n->image ?>">
                    <img src="../image/<?= $n->image ?>" class="img-fluid rounded mb-2" style="height:80px;">

                    <label class="mt-2 d-block">Upload New Image (optional)</label>
                    <input type="file" class="form-control" name="image">

                </div>

                <div class="modal-footer bg-dark rounded-bottom">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>

            </form>
        </div>
    </div>
<?php endforeach; ?>