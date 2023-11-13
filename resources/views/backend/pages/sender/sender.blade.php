@extends ('backend.master')
@section ('content')



<div class="container">
    <h2> Sender Customer </h2>
    <br>
   <a class="btn btn-success" href="{{route('sender.submit')}}"> create</a>
 <br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Contact</th>
      <th scope="col"> Address</th>
      <th scope="col"> Action</th>
    </tr>
  </thead>
  <tbody>
   @foreach($sender as $key=>$item)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$item->Name}}</td>
      <td>{{$item->Email}}</td>
      <td>{{$item->Password}}</td>
      <td>{{$item->Contact}}</td>
      <td>{{$item->Address}}</td>

      <td>
        <a class="btn btn-success" href="">Edit</a>
        <a class="btn btn-warning" href="">Update</a>
        <a class="btn btn-danger" href="">Delete</a>
      </td>
    </tr>

    @endforeach

  </tbody>
</table>

{{$sender->links()}}

</div>

@endsection
