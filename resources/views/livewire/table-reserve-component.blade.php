<div>
    <div class="container mb-4 p-4" style="border: 1px solid grey; margin-top:10rem;">
        <div class="row">
            <div class="col-sm-8 mx-auto">
                <h2 class="mb-4 text-center">Make Reservation</h2>
                <form>
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                    <div class="row my-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <span class="form-label">Name</span>
                                <input class="form-control" type="text" placeholder="Enter your name" wire:model="name">
                                @error('name')
                                <span style="color:red;">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <span class="form-label">Email</span>
                                <input class="form-control" type="email" placeholder="Enter your email" wire:model="email">
                                @error('email')
                                <span style="color:red;">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <span class="form-label">Address</span>
                                <input class="form-control" type="text" placeholder="Enter your address" wire:model="address">
                                @error('address')
                                <span style="color:red;">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <span class="form-label">Phone</span>
                                <input class="form-control" type="text" placeholder="Enter phone number" wire:model="phone">
                                @error('phone')
                                <span style="color:red;">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <span class="form-label">Date</span>
                                <input class="form-control" type="date" wire:model="date">
                                @error('date')
                                <span style="color:red;">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <span class="form-label">Time(From)</span>
                                <input class="form-control" type="time"  wire:model="fromtime">
                                @error('fromtime')
                                <span style="color:red;">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <span class="form-label">Time(To)</span>
                                <input class="form-control" type="time"  wire:model="totime">
                                @error('person')
                                <span style="color:red;">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <span class="form-label">People</span>
                                <input class="form-control" type="text" wire:model="person">
                                @error('person')
                                <span style="color:red;">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <span class="form-label">Select Place</span>
                                <select class="form-control"  wire:model="place_name">
                                    <option value="" selected >Choose Place</option>
                                    <option value="Food Court">Food Court</option>
                                    <option value="Green Garden">Green Garden</option>
                                  </select>
                                @error('place_name')
                                <span style="color:red;">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-12">
                            <div class="form-group">
                                <span class="form-label">Reserve For.</span>
                                <input class="form-control" type="text" placeholder="Please write some description" wire:model="description">
                                @error('description')
                                <span style="color:red;">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-btn">
                        <div class="d-flex justify-content-around">                                      
                            <button class="btn btn-primary" type="submit" style="margin-left:-37rem; margin-top:5px;" wire:click.prevent="submit()" >Reserve Table</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
