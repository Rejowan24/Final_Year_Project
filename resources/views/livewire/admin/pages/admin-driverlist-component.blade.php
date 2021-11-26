<div>
    @extends('livewire.admin.admin-master-dashboard-component');
    @include('livewire.admin.driverlist_create');
    @include('livewire.admin.driverlist_edit');
    <div>
        <div class="container container-section" style="width:80%;">
            <div class="row">
                <div class="card" style="border:1px solid black; margin-left:4rem;">
                    <h4 class="py-3">Place Booking Table.</h4>
                    <div class="card-body">
                        @if (session()->has('message'))
                            <div class="alert alert-success">{{ session('message') }}</div>
                        @endif
    
                        {{-- @if(Session::has('success'))
                        <script>
                            swal("Approved!","{!! Session::get('success') !!}","success",{
                              button:"ok",
                            });
                          </script>
                        @endif --}}
                        <button type="button" class="btn btn-success btn px-4 m-1"
                        data-bs-toggle="modal" data-bs-target="#addDriverModel">Add</button>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Number</th>
                                    <th scope="col">Information</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($driverlist as $driverlist)
                                    <tr>
                                        <td>{{ $driverlist->id }}</td>
                                        <td><img src="{{ asset('backend/ImageStore').'/'.$driverlist->image }}" alt="" style="width:100px;"></td>
                                        <td>{{ $driverlist->name }}</td>
                                        <td>{{ $driverlist->title }}</td>
                                        <td>{{ $driverlist->number }}</td>
                                        <td>{{ $driverlist->information }}</td>
                                        <td>
                                            <button type="button" class="btn btn-success btn-sm m-1"
                                                data-bs-toggle="modal" data-bs-target="#UpdateDriverModel"
                                                wire:click.prevent="EditDriverList({{ $driverlist->id }})"><i
                                                    class="las la-edit"></i></button>
                                            <button type="button" class="btn btn-danger btn-sm m-1"
                                                wire:click.prevent="DeleteDriverList({{ $driverlist->id }})"><i
                                                    class="lar la-trash-alt"></i></button>
    
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
