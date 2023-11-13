@extends ('backend.master')
@section ('content')



<div class="container">
    <h2> Receiver Customer </h2>
    <br>
   <a class="btn btn-success" href="{{route('receiver.accept')}}"> create</a>
 <br>
 <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact number</th>
      <th scope="col">Country</th>
      <th scope="col"> Address</th>
      <th scope="col"> City</th>





    </tr>
  </thead>
  <tbody>
   @foreach($receiver as $key=>$item)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->contact}}</td>
      <td>{{$item->country}}</td>
      <td>{{$item->address}}</td>
      <td>{{$item->city}}</td>
      






      <td>
        <a class="btn btn-success" href="">Edit</a>
        <a class="btn btn-warning" href="">Update</a>
        <a class="btn btn-danger" href="">Delete</a>
      </td>
    </tr>
    
    @endforeach

  </tbody>
</table>

{{$receiver->links()}}

</div>

@endsection