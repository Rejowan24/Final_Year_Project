<div>


    <h1 style="margin-top: 10rem;"></h1>
 
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-lg-2">
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Booking List
                    </div>
                    <div class="card-body">
                        {{-- <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Date</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>From Date</td>
                                    <td>To Date</td>
                                </tr>
                                @foreach ($checklist as $lists)
                                    <tr>
                                        <td>{{date('d/m/Y', strtotime($lists->start_date))}}</td>
                                        <td>{{date('d/m/Y', strtotime($lists->end_date))}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table> --}}

                        <table class="table table-bordered">
                            <thead>
                              <tr>
                                <th scope="col">Name</th>
                                <th scope="col">From Date</th>
                                <th scope="col">To Date</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($checklist as $lists)
                                    <tr>
                                        <td>{{$lists->name}}</td>
                                        <td>{{date('d/m/Y', strtotime($lists->start_date))}}</td>
                                        <td>{{date('d/m/Y', strtotime($lists->end_date))}}</td>
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

