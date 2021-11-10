<div>
    <div class="container " style="margin-top: 10rem; margin-bottom:3rem;">
        <div class="row">
            <div class="col-md-8 offset-2 ">
             <div class="card">
               <h4 class="text-center p-4">Add Books</h4>
                 <div class="card-body">
                   <div style="margin-left: 7.6rem;">
                     <a href="{{route('admin.dashboard')}}" class="btn btn-info my-3">All Books</a>
                   </div>
                   @if (Session::has('message'))
                   <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                   @endif
                     <form wire:submit.prevent="addProduct" id="upload-images"  enctype="multipart/form-data">
                         <div class="form-group row">
                           <label for="product_name" class="col-sm-2 col-form-label">Product Name</label>
                           <div class="col-sm-10">
                             <input type="text" class="form-control" id="product_name" placeholder="product name" wire:model="name" wire:keyup="generateslug">
                           </div>
                         </div>
                         <div class="form-group row">
                             <label for="product_slug" class="col-sm-2 col-form-label">Product Slug</label>
                             <div class="col-sm-10">
                               <input type="text" class="form-control" id="product_slug" placeholder="product slug" wire:model="slug">
                             </div>

                             <div class="form-group row" style="margin-top: 1rem;">
                                <label for="short_description" class="col-sm-2 col-form-label">Short Description</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="short_description" placeholder="short description" wire:model="short_description">
                                </div>
                              </div>
                           </div>

                           <div class="form-group row">
                            <label for="product_image" class="col-sm-2 col-form-label">Product Image</label>
                            <div class="col-sm-10">
                              <input type="file" class="form-control-file" id="product_image"  wire:model="image">
                              @if ($image)
                                  <img src="{{$image->temporaryUrl()}}" width="120"/>
                              @endif
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="category_slug" class="col-sm-2 col-form-label">Product Category</label>
                            <div class="col-sm-10">
                                <select class="form-select" aria-label="Default select example"  wire:model="category_id">
                                    <option selected >Categories</option>
                                      @foreach ($categories as $category)
                                      <option value="{{$category->id}}">{{$category->name}}</option>
                                      @endforeach
                                  </select>
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
 