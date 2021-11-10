<div>
   <div class="container " style="margin-top: 10rem; margin-bottom:3rem;">
       <div class="row">
           <div class="col-md-8 offset-2 ">
            <div class="card">
              <h4 class="text-center p-4">Add Category</h4>
                <div class="card-body">
                  <div style="margin-left: 7.6rem;">
                    <a href="{{route('admin.dashboard')}}" class="btn btn-info my-3">All Category</a>
                  </div>
                  @if (Session::has('message'))
                  <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                  @endif
                    <form wire:submit.prevent="storeCategory">
                        <div class="form-group row">
                          <label for="category_name" class="col-sm-2 col-form-label">Category Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="category_name" placeholder="Category name" wire:model="name" wire:keyup="generateslug">
                          </div>
                        </div>
                        <div class="form-group row">
                            <label for="category_slug" class="col-sm-2 col-form-label">Slug Name</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" id="category_slug" placeholder="Slug name" wire:model="slug">
                            </div>
                          </div>
                            <button type="submit" class="btn btn-primary" style="margin-left: 7.7rem; margin-top:1rem;">Submit</button>
                          </div>
                      </form>
                </div>
              </div>
           </div>
       </div>
   </div>
</div>
