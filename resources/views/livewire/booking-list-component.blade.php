<div>


    <h1 style="margin-top: 10rem;">this is component file</h1>
 
 

</div>

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        DataTable Example
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
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
                @foreach ($info as $item)
                    <tr>
                        <td>{{$item}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>