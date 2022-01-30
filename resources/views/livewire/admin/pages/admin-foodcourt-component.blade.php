<div>
    @extends('livewire.admin.admin-master-dashboard-component');
    @include('livewire.admin.foodcourt_create');
    @include('livewire.admin.foodcourt_edit');
    @include('livewire.admin.tablereserve');
    <div>
        <div class="container container-section" style="width:80%;">
            <div class="row">
                <div class="card" style="border:1px solid black; margin-left:4rem;">
                    <h4 class="py-3 text-center">Foodcourt.</h4>
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
                        data-bs-toggle="modal" data-bs-target="#addfoodcourt">Add</button>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Short Description</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                 @foreach ($foodcourt as $foods)
                                    <tr>
                                        <td>{{ $foods->id }}</td>
                                        <td><img src="{{ asset('backend/ImageStore').'/'.$foods->image }}" alt="" style="width:100px;"></td>
                                        <td>{{ $foods->name }}</td>
                                        <td>{{ $foods->price }}</td>
                                        <td>{{ $foods->short_description }}</td>
                                        <td>
                                            <button type="button" class="btn btn-success btn-sm m-1"
                                            data-bs-toggle="modal" data-bs-target="#editfoodcourt"
                                            wire:click.prevent="Editfood({{ $foods->id }})">Edit</button>

                                            <button class="btn btn-sm btn-danger" wire:click.prevent="Deletefood({{$foods->id}})">Delete</button>    
                                        </td>
                                    </tr>
                                @endforeach 
                            </tbody>
                        </table>
                        <div class="container-fluid" style="margin-left: -26px;">
                            <div class="row">
                                <div class="col">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item">{{ $foodcourt->links('layouts.pagination') }}</li>
                                        </ul>
                                    </nav>
                                </div>
            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container container-section"  style="width:80%;">
            <div class="row">
                <div class="card" style="border:1px solid black; margin-left:4rem;">
                    <h4 class="py-3 text-center">Reserve Table.</h4>
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
                        {{-- <button type="button" class="btn btn-success btn px-4 m-1"
                        data-bs-toggle="modal" data-bs-target="#addfoodcourt">Add</button> --}}
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    {{-- <th scope="col">ID</th> --}}
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">From Time</th>
                                    <th scope="col">To Time</th>
                                    <th scope="col">Person</th>
                                    <th scope="col">Place Name</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                 @foreach ($tables  as $table)
                                    <tr>
                                        {{-- <td>{{ $table->id }}</td> --}}
                                        {{-- <td><img src="{{ asset('backend/ImageStore').'/'.$foods->image }}" alt="" style="width:100px;"></td> --}}
                                        <td>{{ $table->name }}</td>
                                        <td class="tdrow">{{ $table->email }}</td>
                                        <td class="tdrow">{{ $table->address }}</td>
                                        <td class="tdrow">{{ $table->phone }}</td>
                                        <td>{{ $table->date }}</td>
                                        <td>{{ $table->fromtime }}</td>
                                        <td>{{ $table->totime }}</td>
                                        <td>{{ $table->person }}</td>
                                        <td>{{ $table->place_name }}</td>
                                        <td class="tdrow">{{ $table->description }}</td>
                                        <td>
                                            <button type="button" class="btn btn-success btn-sm m-1"
                                            data-bs-toggle="modal" data-bs-target="#reservetable"
                                            wire:click.prevent="Edittable({{ $table->id }})">Edit</button>
    
                                            <button class="btn btn-sm btn-danger" wire:click.prevent="Deletereserve({{$table->id}})">Delete</button>    
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
