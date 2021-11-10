<div>
    <div class="container" style="margin-top: 10rem; border-radius:25px;">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Slot Booking List
                    </div>
                    <div class="card-body bg-light">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($slotlist as $list)
                                    <tr>
                                        <td>{{ $list->name }}</td>
                                        <td>{{ $list->email }}</td>
                                        <td>{{ $list->address }}</td>
                                        <td>{{ $list->start_date }} {{ $list->end_date }}</td>
                                        <td>{{ $list->description }}</td>
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
