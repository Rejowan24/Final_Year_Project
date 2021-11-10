<div>
  <!-- ======= Books Show Section ======= -->
  <div class="container-fluid">
      <section>
          <div class="container map">
              <div class="row">
                  <div class="col d-flex justify-content-center">
                      <div id="map-container-google-2" class="z-depth-1-half map-container">
                          <iframe
                              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7296.960122769635!2d90.32063742504587!3d23.8725899381169!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c23e9a9dbe81%3A0x62af421e71601a5f!2sLibrary%2C%20Daffodil%20International%20Univarsity!5e0!3m2!1sen!2sbd!4v1632460156914!5m2!1sen!2sbd"
                              width="1300" height="480" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                      </div>
                  </div>
              </div>
          </div>
      </section>


      <div class="container-fluid" style="margin-top: -7rem;">
          <h1 class="display-8 mb-4 p-4 bg-color text-center">All Books.</h1>
          <div class="row mb-5">
              <div class="col-md-4 col-sm-4">
                <select class="form-select" aria-label="Default select example" onchange="location = this.value;">
                  <option selected >{{$category_slug}}</option>
                     @foreach ($categories as $category)
                     <option value="{{route('book.category',['category_slug'=>$category->slug])}}">{{$category->name}}</option>
                     @endforeach
                 </select>
              </div>

              <div class="col-md-4 col-sm-6 offset-sm-2 offset-md-4">
                  <form class="d-flex">
                      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                          wire:model="searchTerm">
                      <button class="btn btn-outline-success" type="submit">Search</button>
                  </form>
              </div>

          </div>


          <div class="row">
              @foreach ($products as $product)
                  <div class="col-md-3">
                      <div class="Books">
                          <div class="Books-img">
                              <img src="{{ asset('frontend/img/Books/products') }}/{{ $product->image }}"
                                  alt="{{ $product->name }}">
                          </div>
                          <div class="Books-content">
                              <div class="row">
                                  <div class="col-md-10 col-sm-6 mx-2 p-3">
                                      <h2 class="Books-title"><a href="#">{{ $product->name }}</a></h2>
                                      <div class="Books-more">
                                          <p class="">{{ $product->short_description }}</p>
                                      </div>
                                      <button class="btn books-btn btn-sm">Book Now</button>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              @endforeach
          </div>


          <div class="container-fluid" style="margin-left: -26px;">
              <div class="row">
                  <div class="col">
                      <nav aria-label="Page navigation example">
                          <ul class="pagination">
                              <li class="page-item">{{ $products->links('layouts.pagination') }}</li>
                          </ul>
                      </nav>
                  </div>

              </div>
          </div>


      </div>
      <!-- End Books show Section -->
  </div>
