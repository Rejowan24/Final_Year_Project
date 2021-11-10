<div>
    <div id="booking-fields" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-7 col-md-offset-1 offset-md-3">
                        <div class="booking-form">
                            {{-- @if (Session::has('success'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                            @endif --}}
                            {{-- @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif --}}

                            {{-- @if(Session::has('success'))
                            <script>
                              swal("Great Job!","{!! Session::get('success') !!}","success",{
                                button:"ok",
                              });
                            </script>
                            @endif --}}
                            <form wire:submit.prevent="submit">
                                <div class="form-group">
                                    <h1 class="p-2 text-white">Booking Fields</h1>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <span class="form-label">Username</span>
                                            <input class="form-control" type="text" placeholder="Enter your username" wire:model="name">
                                            @error('name')
                                                <span style="color:red;">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <span class="form-label">Email</span>
                                            <input class="form-control" type="email" placeholder="Enter your email address" wire:model="email">
                                            @error('email')
                                            <span style="color:red;">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            <div class="row">
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <span class="form-label">Current Address</span>
                                            <input class="form-control" type="text" placeholder="Enter your current address" wire:model="address">
                                            @error('address')
                                            <span style="color:red;">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <span class="form-label">Select Fields name</span>
                                            <select class="form-control"  wire:model="fields_name">
                                                <option value="" selected >Choose Fields</option>
                                                <option value="Cricket & Football">Cricket & Football</option>
                                                <option value="Basket ball">Basket ball</option>
                                                <option value="Golf">Golf</option>
                                                <option value="Bonomaya">Bonomaya</option>
                                                <option value="Anisul Haq Study Center">Anisul Haq Study Center</option>
                                                <option value="Auditorium">Auditorium</option>
                                              </select>
                                            @error('fields_name')
                                            <span style="color:red;">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <span class="form-label">Booking Date</span>
                                            <input class="form-control" type="date" wire:model="booking_date">
                                            @error('booking_date')
                                            <span style="color:red;">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <span class="form-label">Booking days</span>
                                            <input class="form-control" type="text" wire:model="booking_days">
                                            @error('booking_days')
                                            <span style="color:red;">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <span class="form-label">Time</span>
                                            <input class="form-control" type="time" wire:model="booking_time">
                                            @error('booking_time')
                                            <span style="color:red;">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <span class="form-label">Book For.</span>
                                            <input class="form-control" type="text" placeholder="Please write some description" wire:model="description">
                                            @error('description')
                                            <span style="color:red;">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-btn">
                                    <div class="d-flex justify-content-around">
                                        <button class="submit-btn" type="submit" >Book Now</button>
                                        {{-- <button class="submit-btn" type="submit" style="background:#4FBC63">Check</button> --}}
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
