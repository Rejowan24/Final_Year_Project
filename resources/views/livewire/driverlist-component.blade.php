<div>
    <div class="container" style="margin-top: 10rem;">
      <h1 class="text-center mb-5">Driver List</h1>
      <div class="row">
        @foreach ($driverlist as $driver)
        <div class="col-sm-6">
          <div class="card bg-light border-primary" style="width: 35rem;">
            <div class="card-body d-flex py-4">
              <div class="img" style="margin-right: 4rem;">
                <img src="{{asset('backend/ImageStore').'/'.$driver->image}}" alt="" style="width: 10rem;">
              </div>
              <div class="info px-2">
                <h4 class="card-title">{{$driver->name}}</h4>
                <p class="card-text">{{$driver->title}}<br>
                Cell: +880{{$driver->number}} <br>
                    {{$driver->information}}    </p>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>

    </div>
</div>
