<div>
    @include('livewire.admin.edit');
    @extends('livewire.admin.admin-master-dashboard-component');


        <div class="container container-section">
            <div class="row">
                <div class="card">
                    <h4 class="py-3">Place Booking Table.</h4>
                    <div class="card-body">
                        @if (session()->has('message'))
                            <div class="alert alert-success">{{ session('message') }}</div>
                        @endif
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Fields Name</th>
                                    <th scope="col">Booking Date</th>
                                    <th scope="col">Booking Days</th>
                                    <th scope="col">Booking Time</th>
                                    <th scope="col">Description</th>
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
                                        <td>{{ $bookitem->booking_date }}</td>
                                        <td>{{ $bookitem->booking_days }}</td>
                                        <td>{{ $bookitem->created_at->diffForHumans() }}</td>
                                        <td>{{ $bookitem->description }}</td>

                                        <td>
                                            <button type="button" class="btn btn-success btn-sm m-1"
                                                data-bs-toggle="modal" data-bs-target="#updateBookingModel"
                                                wire:click.prevent="edit({{ $bookitem->id }})"><i
                                                    class="las la-edit"></i></button>
                                            <button type="button" class="btn btn-danger btn-sm m-1"
                                                wire:click.prevent="delete({{ $bookitem->id }})"><i
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
