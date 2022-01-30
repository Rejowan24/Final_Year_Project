<div>
    @include('livewire.admin.fields_edit');
    @include('livewire.admin.fields_create');
    @extends('livewire.admin.admin-master-dashboard-component');


    <div class="container container-section">
        <div class="main-row">
            <div class="card bg-light custom-cards">
                <h4 class="py-3">Booking Table.</h4>
                <div class="card-body">
                    @if (session()->has('message'))
                        <div class="alert alert-success">{{ session('message') }}</div>
                    @endif

                    @if (Session::has('success'))
                        <script>
                            swal("Approved!", "{!! Session::get('success') !!}", "success", {
                                button: "ok",
                            });
                        </script>
                    @endif
                    {{-- <button type="button" class="btn btn-success btn-sm m-1" data-bs-toggle="modal"
                        data-bs-target="#addBookingModel">Add</button> --}}
                    <table class="table table-bordered table-ellipsis" style="border: 2px solid black;">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
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
                                    <td class="tdrow">{{ $bookitem->email }}</td>
                                    <td>{{ $bookitem->phone }}</td>
                                    <td class="tdrow">{{ $bookitem->fields_name }}</td>
                                    <td>{{ $bookitem->start_date }}</td>
                                    <td>{{ $bookitem->end_date }}</td>
                                    <td>{{ $bookitem->created_at->diffForHumans() }}</td>
                                    <td class="tdrow">{{ $bookitem->description }}</td>
                                    <td>
                                        @if ($bookitem->is_approved == 'approved')
                                            <span class="bg-primary p-1 text-white">Approved</span>
                                        @elseif ($bookitem->is_approved == 'cancled')
                                            <span class="bg-danger p-1 text-white">Cancled</span>
                                        @else
                                            <span class="bg-danger p-1 text-white">Pending</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($bookitem->is_approved == 'approved')
                                            <span class="bg-primary p-1 text-white">Approved</span>
                                        @elseif ($bookitem->is_approved == 'cancled')
                                            <span class="bg-danger p-1 text-white">Cancled</span>
                                        @else
                                            <span class="bg-danger p-1 text-white">Pending</span>
                                        @endif
                                    </td>

                                    <td>
                                        <div class="btn-group-vertical">
                                            <button type="button" class="btn btn-primary btn-sm"
                                                data-bs-toggle="modal" data-bs-target="#updateBookingModel"
                                                wire:click.prevent="edit({{ $bookitem->id }})">Edit</button>
                                            <button type="button" class="btn btn-danger btn-sm"
                                                wire:click.prevent="delete({{ $bookitem->id }})">Delete</button>

                                            @if ($bookitem->is_approved == false)

                                                <button class="btn btn-primary btn-sm" wire:ignore.self
                                                    wire:click.prevent="approved({{ $bookitem->id }})">
                                                    <span>Approved</span>
                                                </button>
                                            @else
                                                <button class="btn btn-secondary btn-sm disabled">
                                                    <span>Approved</span>
                                                </button>

                                            @endif

                                            @if ($bookitem->is_approved == false)

                                                <button class="btn btn-danger btn-sm"
                                                    wire:click.prevent="cancled({{ $bookitem->id }})">
                                                    <span>Cancled</span>
                                                </button>
                                            @else
                                                <button class="btn btn-secondary btn-sm disabled">
                                                    <span>Cancled</span>
                                                </button>

                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- <div class="container" style="margin-left: -26px;">
                            <div class="row">
                                <div class="col">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item">{{ $booking->links('layouts.pagination') }}</li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
