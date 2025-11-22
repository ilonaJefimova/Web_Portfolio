<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form class="modal-content shadow ounded-3" method="POST" action="../controller/insert_news.php">
      <div class="modal-header bg-dark text-white  rounded-top">
        <h5 class="modal-title" id="createModalLabel">Create News</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body bg-light">
        <label class="mt-2 d-block">Title</label>
        <input type="text" class="form-control" name="title" required>

        <label class="mt-2 d-block">Description</label>
        <input type="text" class="form-control" name="description" required>

        <label class="mt-2 d-block">Link</label>
        <input type="text" class="form-control" name="link" required>

        <label class="mt-2 d-block">Image (optional)</label>
        <input type="file" class="form-control" name="image">
      </div>

      <div class="modal-footer bg-dark rounded-bottom">
        <button type="submit" class="btn btn-success">Create</button>
      </div>
    </form>
  </div>
</div>
