@extends ('backend.master')
@section ('content')



<div class="container">
    <h2> Shipment list details </h2>
    <br>
   <a class="btn btn-success" href="{{route('shipment.sendera')}}"> create</a>
 <br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Sender_name</th>
      <th scope="col">Receiver_name</th>
      <th scope="col">From</th>
      <th scope="col"> To</th>
      <th scope="col"> Date</th>
      <th scope="col"> Payment</th>
      <th scope="col"> Booking_ID</th>


      <th scope="col">Status</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>

    @foreach($shipments as $key=>$item)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$item->Sender_name}}</td>
      <td>{{$item->Receiver_name}}</td>
      <td>{{$item->From}}</td>
      <td>{{$item->To}}</td>
      <td>{{$item->Date}}</td>
      <td>{{$item->Payment}}</td>
      <td>{{$item->Booking_ID}}</td>
      <td>{{$item->status}}</td>


      <td>
        <a class="btn btn-success" href="">Edit</a>
        <a class="btn btn-warning" href="">Update</a>
        <a class="btn btn-danger" href="">Delete</a>
      </td>
    </tr>

    @endforeach





  </tbody>
</table>

{{-- {{$shipment->links()}} --}}

</div>

@endsection
