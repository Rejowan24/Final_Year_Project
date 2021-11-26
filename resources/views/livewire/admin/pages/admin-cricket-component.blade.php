<div>
    @include('livewire.admin.fields_edit');
    @include('livewire.admin.fields_create');
    @extends('livewire.admin.admin-master-dashboard-component');


        <div class="container container-section">
            <div class="row">
                <div class="card">
                    <h4 class="py-3">Place Booking Table.</h4>
                    <div class="card-body">
                        @if (session()->has('message'))
                            <div class="alert alert-success">{{ session('message') }}</div>
                        @endif

                        @if(Session::has('success'))
                        <script>
                            swal("Approved!","{!! Session::get('success') !!}","success",{
                              button:"ok",
                            });
                          </script>
                        @endif
                        <button type="button" class="btn btn-success btn-sm m-1"
                        data-bs-toggle="modal" data-bs-target="#addBookingModel">Add</button>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Fields Name</th>
                                    <th scope="col">Start Date</th>
                                    <th scope="col">End Date</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Is_Approve</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($booking as $bookitem)
                                    <tr>
                                        <td>{{ $bookitem->id }}</td>
                                        <td>{{ $bookitem->name }}</td>
                                        <td>{{ $bookitem->email }}</td>
                                        <td>{{ $bookitem->address }}</td>
                                        <td>{{ $bookitem->fields_name }}</td>
                                        <td>{{ $bookitem->start_date }}</td>
                                        <td>{{ $bookitem->end_date }}</td>
                                        <td>{{ $bookitem->created_at->diffForHumans() }}</td>
                                        <td>{{ $bookitem->description }}</td>
                                        <td>
                                            @if ($bookitem->is_approved == true)
                                                <span class="bg-primary p-1 text-white">Approved</span>
                                            @else
                                                <span class="bg-danger p-1 text-white">Pending</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($bookitem->is_approved == true)
                                                <span class="bg-primary p-1 text-white">Booked</span>
                                            @else
                                                <span class="bg-danger p-1 text-white">Pending</span>
                                            @endif
                                        </td>

                                        <td>
                                            <button type="button" class="btn btn-success btn-sm m-1"
                                                data-bs-toggle="modal" data-bs-target="#updateBookingModel"
                                                wire:click.prevent="edit({{ $bookitem->id }})"><i
                                                    class="las la-edit"></i></button>
                                            <button type="button" class="btn btn-danger btn-sm m-1"
                                                wire:click.prevent="delete({{ $bookitem->id }})"><i
                                                    class="lar la-trash-alt"></i></button>

                                            @if ($bookitem->is_approved == false)

                                                    <a class="btn btn-primary btn-sm" wire:click.prevent="approved({{ $bookitem->id }})">
                                                        <span>Approved</span>
                                                    </a>
                                            @else
                                                    <a href="#" class="btn btn-secondary btn-sm disabled">
                                                        <span>Approved</span>
                                                    </a>

                                            @endif
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
