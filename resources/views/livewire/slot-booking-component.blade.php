<div>
    <div id="booking" class="section">
        <div class="section-center">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-7 col-md-offset-1 offset-md-3">
                        <div class="booking-form">
                            @if(Session::has('success'))
                            <script>
                              swal("{!! Session::get('success') !!}",{
                                button:"ok",
                              });
                            </script>
                            @endif
                            <form wire:submit.prevent="submit">
                                <div class="form-group">
                                    <h1 class="p-2 text-white">Booking Slot</h1>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <span class="form-label">Name</span>
                                            <input class="form-control" type="text" placeholder="Enter your name"
                                                wire:model.defer="name">
                                            @error('name')
                                                <span style="color:red;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <span class="form-label">Email</span>
                                            <input class="form-control" type="email"
                                                placeholder="Enter your email address" wire:model.defer="email">
                                            @error('email')
                                                <span style="color:red;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row displayfields d-none">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <span class="form-label">ID</span>
                                            <input class="form-control" type="text" placeholder="Enter your username"
                                                wire:model.defer="stu_id">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <span class="form-label">Dept.</span>
                                            <input class="form-control" type="text"
                                                placeholder="Enter your dept." wire:model.defer="dept">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <span class="form-label">Current Address</span>
                                            <input class="form-control" type="text"
                                                placeholder="Enter your current address" wire:model.defer="address">
                                            @error('address')
                                                <span style="color:red;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <span class="form-label">Start Date</span>
                                            <input class="form-control date" type="date" wire:model.defer="start_date">
                                            @error('start_date')
                                                <span style="color:red;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <span class="form-label">End Date</span>
                                            <input class="form-control date" type="date" wire:model.defer="end_date">
                                            @error('end_date')
                                                <span style="color:red;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <span class="form-label">Description(reason).</span>
                                            <input class="form-control" type="text" wire:model.defer="description"
                                                placeholder="Please write some description">
                                            @error('description')
                                                <span style="color:red;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-check" style="text-align: left;">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label text-white" for="flexRadioDefault1">
                                              Student(DIU)
                                            </label>
                                          </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check" style="text-align: left;">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                            <label class="form-check-label text-white" for="flexRadioDefault2">
                                              Another
                                            </label>
                                          </div>
                                    </div>
                                </div>

                                <div class="form-btn mt-4">
                                    <div class="d-flex justify-content-around">
                                        <button class="submit-btn" type="submit">Book Now</button>
                                        <button class="submit-btn"  style="background:#4FBC63"><a class="btn" href="{{route('slot.list')}}">Check</a></button>
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
