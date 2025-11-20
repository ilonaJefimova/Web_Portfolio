<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form class="modal-content shadow" method="POST" action="../controller/insert_news.php">
      <div class="modal-header bg-dark text-white">
        <h5 class="modal-title" id="createModalLabel">Create News</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <label class="mt-2">Title</label>
        <input type="text" class="form-control" name="title" required>

        <label class="mt-2">Description</label>
        <input type="text" class="form-control" name="description" required>

        <label class="mt-2">Link</label>
        <input type="text" class="form-control" name="link" required>

        <input type="hidden" name="image" value="coming_soon.png">
      </div>

      <div class="modal-footer bg-dark">
        <button type="submit" class="btn btn-success">Create</button>
      </div>
    </form>
  </div>
</div>
