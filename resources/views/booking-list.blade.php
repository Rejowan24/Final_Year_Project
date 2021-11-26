



<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Address</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($date_compare as $item)
      <tr>
        <th>{{$item->id}}</th>
        <td>{{$item->name}}</td>
     
        <td>{{$item->address}}</td>
      </tr>
    @endforeach
    </tbody>
  </table>