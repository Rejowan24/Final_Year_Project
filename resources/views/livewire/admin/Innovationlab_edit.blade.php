<!-- Modal -->
<div wire:ignore.self class="modal fade" id="editlabpermission" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Lab Permission</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data">
                    <input type="hidden" name="id" wire:model="ids">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" wire:model.defer="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" wire:model.defer="email">
                    </div>
                    <div class="form-group">
                        <label for="phone">phone</label>
                        <input type="text" name="phone" class="form-control" wire:model.defer="phone">
                    </div>
                    <div class="form-group">
                        <label for="name">Address</label>
                        <input type="text" name="name" class="form-control" wire:model.defer="address">
                    </div>
                    <div class="form-group">
                        <label for="address">Date</label>
                        <input type="date" name="address" class="form-control" wire:model.defer="date">
                    </div>
                    <div class="form-group">
                        <label for="time">Time</label>
                        <input type="time" name="time" class="form-control" wire:model.defer="time">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" name="description" class="form-control" wire:model.defer="description">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" wire:click.prevent="updatepermission">Update</button>
            </div>
        </div>
    </div>
</div>
