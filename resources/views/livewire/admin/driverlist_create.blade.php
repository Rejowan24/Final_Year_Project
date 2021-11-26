
  <!-- Modal -->
  <div wire:ignore.self class="modal fade" id="addDriverModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Driver</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" wire:model.defer="name">
                </div>
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" name="title" class="form-control"  wire:model.defer="title">
              </div>
              <div class="form-group">
                  <label for="number">Number</label>
                  <input type="text" name="number" class="form-control"  wire:model.defer="number">
              </div>
              <div class="form-group">
                  <label for="image">Image</label>
                  <input type="file" name="image" class="form-control"  wire:model.defer="image">
                  @if ($image)
                  <img src="{{$image->temporaryUrl()}}" width="120"/>
                  @endif
              </div>
              <div class="form-group">
                <label for="information">Information</label>
                <input type="text" name="information" class="form-control"  wire:model.defer="information">
              </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" wire:click.prevent="AddDriver()">Add Driver</button>
        </div>
      </div>
    </div>
  </div>