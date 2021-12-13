<div>
    <section class="container-fluid">
        <div class="container map" style="margin-top: -3px">
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <div id="map-container-google-2" class="z-depth-1-half map-container" >
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4338.631508756151!2d90.318353300234!3d23.87757063356373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c3f5fd3a8d09%3A0xa12bd329098be1ff!2sDIU%20Food%20Court!5e0!3m2!1sen!2sbd!4v1632245567046!5m2!1sen!2sbd" width="1300" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                      </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-3" style="background: #dfe6e9;">
        <div class="row">
            <div class="col-sm-4">
                <img src="{{asset('frontend/img/about.jpg')}}" style="width: 100%;" alt="">
            </div>
            <div class="col-sm-4">
                <img src="{{asset('frontend/img/about.jpg')}}" style="width: 100%;" alt="">
            </div>
            <div class="col-sm-4">
                <h3>Food Court</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore neque non nesciunt praesentium similique. Nihil adipisci iusto quia illum minus harum quo, dolorum sunt reprehenderit eligendi debitis veritatis tenetur eum.</p>
                <a href="{{route('table.reserve')}}" class="btn btn-primary" style="border-radius: 25px; margin-top:2rem;">Reserve Table</a>
            </div>
        </div>
    </div>
    <section class="popular-dishes-area padding-top-110">
        <div class="container food-heading">
            <div class="row">
                <div class="col text-center">
                    <h1>Available Foods.</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <!-- main-content -->
            <div class="tab-content" id="nav-tabContent-1">

                <!-- all items -->
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home">
                    <div class="row">
                        @foreach ($foods as $food)
                     <div class="col-xl-3 col-lg-3 col-md-6">
                            <div class="single-dishes">
                                <div class="dish-img">
                               {{-- <img src="{{asset('frontend/img/menu-item/pd1.png')}}" style="width: inherit;" alt=""> --}}
                                    <img src="{{$food->image}}"  alt="">
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
                        <li class="page-item bg-primary">{{ $foods->links('layouts.pagination') }}</li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>


</div>
