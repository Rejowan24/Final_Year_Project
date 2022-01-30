
  <!-- Modal -->
  <div wire:ignore.self class="modal fade" id="reservetable" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Food(Reserve Table)</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form enctype="multipart/form-data">
                <input type="hidden" name="id" wire:model="tableid">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" wire:model.defer="reservename">
                </div>
                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="email" name="name" class="form-control" wire:model.defer="email">
                </div>
                <div class="form-group">
                    <label for="name">Address</label>
                    <input type="text" name="name" class="form-control" wire:model.defer="address">
                </div>
                <div class="form-group">
                    <label for="name">Phone</label>
                    <input type="text" name="name" class="form-control" wire:model.defer="phone">
                </div>
                <div class="form-group">
                    <label for="name">Date</label>
                    <input type="date" name="name" class="form-control" wire:model.defer="date">
                </div>
                <div class="form-group">
                    <label for="name">From Time</label>
                    <input type="time" name="name" class="form-control" wire:model.defer="fromtime">
                </div>
                <div class="form-group">
                    <label for="name">To Time</label>
                    <input type="time" name="name" class="form-control" wire:model.defer="totime">
                </div>
                <div class="form-group">
                    <label for="name">Person</label>
                    <input type="text" name="name" class="form-control" wire:model.defer="person">
                </div>
                <div class="form-group">
                    <label for="name">Place Name</label>
                    <input type="text" name="name" class="form-control" wire:model.defer="placename">
                </div>
              <div class="form-group">
                  <label for="short_description">Description</label>
                  <input type="text" name="short_description" class="form-control"  wire:model.defer="description">
              </div>
              {{-- <div class="form-group">
                  <label for="image">Image</label>
                  <input type="file" name="image" class="form-control"  wire:model.defer="image">
                  @if ($image)
                  <img src="{{$image->temporaryUrl()}}" width="120"/>
                  @endif
              </div> --}}
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" wire:click.prevent="updatereservation">Update Reservation</button>
        </div>
      </div>
    </div>
  </div>