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
           <button class="btn btn-light bg-white"  id="changebtn"><i class="las la-bars la-1x"></i></button>
         </div>
         <div class="message px-5 d-flex">
          <a href=""><i class="lar la-bell"></i></a>
           <a href=""><i class="las la-envelope"></i></a>
         </div>
       </nav>
 
     </div>
   
 
   </div> 
    <div class="container" style="height: 140rem;">
 
    </div>
 
 </div>
 