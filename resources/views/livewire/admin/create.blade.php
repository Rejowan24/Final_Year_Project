
  <!-- Modal -->
  <div wire:ignore.self class="modal fade" id="addBookingModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Booking</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form>
                <input type="hidden" name="id" wire:model.defer="ids">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" wire:model.defer="name">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" class="form-control"  wire:model.defer="email">
              </div>
              <div class="form-group">
                  <label for="address">Address</label>
                  <input type="text" name="address" class="form-control"  wire:model.defer="address">
              </div>
              <div class="form-group">
                  <label for="fieldsname">Fields Name</label>
                  <input type="text" name="fieldsname" class="form-control"  wire:model.defer="fields_name">
              </div>
              <div class="form-group">
                  <label for="fieldsdate">Booking Date</label>
                  <input type="date" name="fieldsdate" class="form-control"  wire:model.defer="booking_date">
              </div>
              <div class="form-group">
                  <label for="fieldsdays">Booking Days</label>
                  <input type="text" name="fieldsdays" class="form-control"  wire:model.defer="booking_days">
              </div>
              <div class="form-group">
                  <label for="fieldstime">Booking Time</label>
                  <input type="time" name="fieldstime" class="form-control"  wire:model.defer="booking_time">
              </div>
              <div class="form-group">
                  <label for="description">Description</label>
                  <input type="text" name="description" class="form-control"  wire:model.defer="description">
              </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" wire:click.prevent="store()">Add Booking</button>
        </div>
      </div>
    </div>
  </div>