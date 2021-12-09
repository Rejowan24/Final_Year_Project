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
                            
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            {{-- @if(Session::has('success'))
                            <script>
                              swal("Submitted!","{!! Session::get('success') !!}","success",{
                                button:"ok",
                              });
                            </script>
                            @endif --}}
                            <form>
                                <input type="hidden" readonly  value="{{Auth::user()->idphp}}">
                                <div class="form-group">
                                    <h1 class="p-2 text-white">Booking Fields</h1>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <span class="form-label">Username</span>
                                            <input class="form-control" type="text" readonly  value="{{Auth::user()->name}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <span class="form-label">Email</span>
                                            <input class="form-control" type="email" readonly value="{{Auth::user()->email}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <span class="form-label">Phone</span>
                                            <input class="form-control" type="text" placeholder="Enter your phone number" wire:model="phone">
                                            @error('phone')
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
                                            <span class="form-label">Start Date</span>
                                            <input class="form-control" type="date" wire:model="start_date">
                                            @error('start_date')
                                            <span style="color:red;">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <span class="form-label">End Date</span>
                                            <input class="form-control" type="date" wire:model="end_date">
                                            @error('end_date')
                                            <span style="color:red;">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row addfields" id="NEfields" wire:ignore>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <span class="form-label">Name(Reserve By)</span>
                                            <input class="form-control" type="text" placeholder="Enter your username" wire:model="rpname">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <span class="form-label">Email(Reserve By)</span>
                                            <input class="form-control" type="email" placeholder="Enter your email address" wire:model="rpemail">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
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
                                        <button class="btn btn-primary" type="submit" style="margin-left: -3rem;" wire:click.prevent="submit()" >Book Now</button>
                                        <button class="btn btn-success">
                                            {{-- @livewire('booking-list-component') --}}
                                            {{-- <a class="btn" href="{{route('show.list')}}" wire:click="check()">click</a> --}}
                                            Booked Date
                                        </button>
                                        <div class="form-group form-check" style="margin-top: 1rem;">
                                            <input type="checkbox" class="form-check-input" id="Checkbox">
                                            <label class="form-check-label text-white" for="Checkbox">Reserve By other.</label>
                                          </div>
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
