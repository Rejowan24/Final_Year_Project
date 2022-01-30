<div>
    <div class="left main-sidebar">
        <div class="sidebar-inner leftscroll">
            <div id="sidebar-menu">

                <ul>

                    <li class="submenu">
                        <a href="index.html">
                            <i class="bi bi-house-fill"></i>
                            <span> Home </span>
                        </a>
                    </li>

                    <li class="submenu">
                        <a href="{{ route('admin.dashboard') }}">
                            <i class="las la-th-large"></i>
                            <span> Dashboard </span>
                        </a>
                    </li>

                    {{-- <li class="submenu">
                        <a href="{{url('admin/bookitems')}}">
                            <i class="las la-book"></i>
                            <span> BookItems </span>
                        </a>
                    </li> --}}

                    <li class="submenu">
                        <a href="#" id="Library">
                            <i class="las la-book"></i>
                            <span> Library </span>
                        </a>
                            <ul  id="BooksItems" style="display: none">
                                <li><a href="{{url('admin/bookitems')}}">BookItems</a></li>
                            </ul>
                    </li>

                    <li class="submenu">
                        <a href="#" id="Transport">
                            <i class="las la-bus"></i>
                            <span> Transport </span>
                        </a>
                            <ul  id="Schedule" style="display: none">
                                {{-- <li><a href="">Schedule</a></li> --}}
                                <li><a href="{{route('admin.driverlist')}}">DriverList</a></li>
                            </ul>
                    </li>

                    <li class="submenu">
                        <a href="#" id="Foods">
                            <i class="las la-utensils"></i>
                            <span> Food & Cookaries </span>
                        </a>
                            <ul  id="Foodplace" style="display: none">
                                <li><a href="{{route('admin.foodcourt')}}">Food Court</a></li>
                                <li><a href="{{route('admin.greengarden')}}">Green Garden</a></li>
                            </ul>
                    </li>

                    <li class="submenu">
                        <a href="#" id="Booking">
                            <i class="las la-book"></i>
                            <span> Booking </span>
                        </a>
                            <ul  id="Booklist" style="display: none">
                                <li><a href="{{url('admin/bookinglist')}}">BookingList</a></li>
                            </ul>
                    </li>

                    <li class="submenu">
                        <a href="#" id="Lab">
                            <i class="las la-flask"></i>
                            <span> Innovation Lab </span>
                        </a>
                            <ul  id="Labvisit" style="display: none">
                                <li><a href="{{route('admin.innovationlab')}}">Visiting Permission</a></li>
                            </ul>
                    </li>

                    <div class="clearfix"></div>
                </ul>
            </div>

            <div class="clearfix"></div>

        </div>

    </div>

    <div class="overflow-hidden main-container-box top-navbar">
        <div class="container container-box">
            <nav class="navbar navbar-expand-lg navbar-light bg-light p-4 shadow rounded sub-menu">
                <div class="btn-area">
                    <button class="btn btn-light bg-white" id="changebtn"><i class="las la-bars la-1x"></i></button>
                </div>
                <div class="message px-5 d-flex">
                    <a href=""><i class="lar la-bell"></i></a>
                    <a href=""><i class="las la-envelope"></i></a>
                </div>
            </nav>
            <h1 class="mb-5 mt-4">Dashboard</h1>
            <div class="container py-3" style="border: 2px solid #dfe6e9; width:96%; margin-left:-6px;">
                <section class="counts">
                    <div class="container">
              
                      <div class="row">
              
                        <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up">
                          <div class="count-box">
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Register User</p>
                          </div>
                        </div>
              
                        <div class="col-lg-3 col-md-6 text-center offset-lg-1" data-aos="fade-up" data-aos-delay="200">
                          <div class="count-box">
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Users</p>
                          </div>
                        </div>
              
                        <div class="col-lg-3 col-md-6 text-center offset-lg-1" data-aos="fade-up" data-aos-delay="400">
                          <div class="count-box">
                            <i class="bi bi-live-support" style="color: #46d1ff;"></i>
                            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Visitors</p>
                          </div>
                        </div>
              
                        {{-- <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="600">
                          <div class="count-box">
                            <i class="bi bi-users-alt-5" style="color: #ffb459;"></i>
                            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Hard Workers</p>
                          </div>
                        </div> --}}
              
                      </div>
              
                    </div>
                  </section>
                  
            </div>
        </div>
    </div>
    <div class="container" style="height: 65rem;">
        <div class="container message-container bg-info" style="border:1px solid red;">
            <div class="row" style=" position: absolute; left:5rem;top:-75rem;right:0rem;">
                <div class="col-sm-4 offset-sm-9">
                    <div class="card  admin-message-body">
                        <div class="card-header message-header">
                            <button class="btn btn-info" id="chatbox-hidden"><i class="lar la-lg la-comment-dots"></i></button>
                        </div>
                        <div class="card-body text-body" id="chatbox-body" wire:ignore.self>
                        @foreach ($receiver as $message)
                            <div class="card bg-light p-2">
                                <p>{{$message->message}}</p>
                            </div>
                        @endforeach               
                        </div>
                        <div class="card-footer card-foot" style="background:seagreen; padding-top:20px;" id="chatbox-footer" wire:ignore.self>
                            <form class="form-inline">
                                <div class="form-group d-flex chatbox">
                                    <input type="text" class="form-control-plaintext" wire:model.defer="sender">
                                    <button type="submit" class="btn btn-primary mb-2"  wire:click.prevent="addmessage"><i class="las la-paper-plane"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


</div>
