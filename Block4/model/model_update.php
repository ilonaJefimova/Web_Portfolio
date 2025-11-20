<?php foreach ($items as $n): ?>
    <div class="modal fade" id="updateModal<?= $n->id ?>" aria-labelledby="updateModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form class="modal-content shadow" method="POST" action="../controller/update_news.php">

                <div class="modal-header bg-dark text-white">
                    <h5 class="modal-title" id="updateModalLabel">Update News</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">

                    <input type="hidden" name="id" value="<?= $n->id ?>">

                    <label class="mt-2">Title</label>
                    <input type="text" class="form-control" name="title" value="<?= $n->title ?>">

                    <label class="mt-2">Description</label>
                    <input type="text" class="form-control" name="description" value="<?= $n->description ?>">

                    <label class="mt-2">Link</label>
                    <input type="text" class="form-control" name="link" value="<?= $n->link ?>">

                    <label class="mt-2">Image (current)</label><br>
                    <img src="../image/<?= $n->image ?>" class="rounded mb-2" style="height:80px;">

                    <input type="hidden" name="image" value="<?= $n->image ?>">

                </div>

                <div class="modal-footer bg-dark">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>

            </form>
        </div>
    </div>
<?php endforeach; ?>