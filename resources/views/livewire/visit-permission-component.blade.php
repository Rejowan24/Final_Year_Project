<div>

    <div class="container-fluid" style="margin-top: 7rem;">
        <div class="row">
            <div class="col">
                <div class="card" style="height:30rem;">
                    <img class="card-img" src="{{asset('frontend/img/page/innovation-1.jpg')}}" style="width: 100%; height:100%;" alt="Card image">
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <h2 class="text-center">Innovation Lab</h2>
                <p> Innovation Lab is the most state-of-the-art research and development lab in Bangladesh. It is a place where students can explore anything independently. They can research and create innovative things according to their own wish. All of these they can do in the innovation lab because the innovation lab can afford all the needs behind this work. This is fully ready for our students where they can explore and experiment with their products as well as find solutions for their own ideas. </p>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 5rem;">
        <div class="row">
            <div class="col-sm-8 offset-md-2">
                <div class="card" style="background: #95a5a6;">
                    <div class="card-body">
                            {{-- @if(Session::has('success'))
                                <script>
                                swal("Submitted!","{!! Session::get('success') !!}","success",{
                                    button:"ok",
                                });
                                </script>
                            @endif  --}}

                            @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form>
                            <div class="form-group">
                                <h1 class="p-2 text-white text-center">Lab Visiting Permission</h1>
                            </div>
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
                                        <span class="form-label">Phone</span>
                                        <input class="form-control" type="text" placeholder="Enter your phone number" wire:model="phone">
                                        @error('phone')
                                        <span style="color:red;">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <span class="form-label">Address</span>
                                        <input class="form-control" type="text" placeholder="Enter your phone number" wire:model="address">
                                        @error('address')
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
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <span class="form-label">Time</span>
                                        <input class="form-control" type="time" wire:model="time">
                                        @error('time')
                                        <span style="color:red;">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Visiting For.</label>
                                        <textarea class="form-control"  rows="3" placeholder="Enter the reason for visiting innovation lab....." wire:model="description"></textarea>
                                      </div>
                                </div>
                            </div>
                            <div class="form-btn">
                                <div class="d-flex justify-content-around">                                      
                                    <button class="btn btn-primary" type="submit" style="margin-left: -3rem;" wire:click.prevent="apply" >Submit</button>
                                    <button class="btn btn-success">
                                        Check Date
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
