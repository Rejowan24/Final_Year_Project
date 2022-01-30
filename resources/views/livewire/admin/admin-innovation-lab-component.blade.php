<div>
    @extends('livewire.admin.admin-master-dashboard-component');
    @include('livewire.admin.Innovationlab_edit');
    <div class="container container-section">
        <div class="main-row">
            <div class="card bg-light custom-cards">
                <h4 class="py-3">Permission Table.</h4>
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
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Address</th>
                                <th scope="col">Date</th>
                                <th scope="col">Time</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($permissiondata as $data)
                                <tr>
                                    <td>{{ $data->name }}</td>
                                    <td class="tdrow">{{ $data->email }}</td>
                                    <td>{{ $data->phone }}</td>
                                    <td class="tdrow">{{ $data->address }}</td>
                                    <td>{{ $data->date }}</td>
                                    <td>{{ $data->time }}</td>
                                    <td class="tdrow">{{ $data->description }}</td>
                                    <td>
                                        <div class="btn-group-vertical">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#editlabpermission" wire:click.prevent="editpermission({{$data->id}})">Edit</button>
                                            <button type="button" class="btn btn-danger" wire:click.prevent="deletepermission({{$data->id}})">Delete</button>
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
