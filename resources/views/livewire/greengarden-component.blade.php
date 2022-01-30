<div>
    <div class="container-fluid" style="margin-top: 7rem;">
        <div class="row">
            <div class="col">
                <div class="card" style="height:30rem;">
                    <img class="card-img" src="{{asset('frontend/img/green-garden/background.jpg')}}" style="width: 100%; height:100%;" alt="Card image">
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="container">
            <div class="section-title">
                <h2 style="color: black; margin-bottom:-10px; margin-top:1rem;">Food Services.</h2>
                </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="services-item">
                        <div class="icon">
                            <img src="{{asset('frontend/img/green-garden/breakfast.jpg')}}" alt="..." class="img-thumbnail">
                        </div>
                        <h3>Breakfast</h3>
                        {{-- <p>There are many types of breakfast available here.</p> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="services-item">
                        <div class="icon">
                            <img src="{{asset('frontend/img/green-garden/lunch.jpg')}}" alt="..." class="img-thumbnail">
                        </div>
                        <h3>Lunch</h3>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> --}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="services-item">
                        <div class="icon">
                            <img src="{{asset('frontend/img/green-garden/dinner.jpg')}}" alt="..." class="img-thumbnail">
                        </div>
                        <h3>Dinner</h3>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p> --}}
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                  <h1 class="card-title text-center card-heading">Green Garden.</h1>
                  <p class="card-text">We can offer many types of food. we also offer for booking this place as many occasion like barbeque party or birthday party etc. Any students can book this place for an specific time and done their events. For booking this every person must have register for login. With fullfilled their information they will able to book this place for their work.</p>
                </div>
            </div>
    </div>
    </section>
    <section class="popular-dishes-area padding-top-110">
        <div class="container food-heading">
            <div class="row">
                <div class="col text-center">
                    <h1>Available Food.</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <!-- main-content -->
            <div class="tab-content" id="nav-tabContent-1">

                <!-- all items -->
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home">
                    <div class="row">
                        @foreach ($greengarden as $food)
                     <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="single-dishes">
                                <div class="dish-img">
                               {{-- <img src="{{asset('frontend/img/menu-item/pd1.png')}}" style="width: inherit;" alt=""> --}}
                                    <img src="{{ asset('backend/ImageStore').'/'.$food->image }}"  alt="">
                                </div>
                                <div class="dish-content">
                                    <h6><a href="single-dish.html">{{$food->name}}</a></h6>
                                    <p class="food-des">{{$food->short_description}}</p>
                                    <span class="price">Price: {{$food->price}} taka.</span>
                                </div>
                            </div>
                        </div>   
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container" style="margin-top: -25px;">
        <div class="row">
            <div class="col">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item bg-primary">{{ $greengarden->links('layouts.pagination') }}</li>
                    </ul>

                    <div class="container side-btn">
                        <a href="{{route('table.reserve')}}" class="btn btn-primary">Reserve Table Now</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>

    <section class="padding-top-110" style="margin-bottom: -8rem;">
        <div class="container map">
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <div id="map-container-google-2" class="z-depth-1-half map-container">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7297.0013633668395!2d90.32121212504586!3d23.871858238118435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c23c3b19103b%3A0x39ccd31fc92a5fd6!2sGreen%20Garden%20Restaurant!5e0!3m2!1sen!2sbd!4v1632498100431!5m2!1sen!2sbd"
                            width="1350" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section> 
</div>
