@extends ('backend.master')
@section ('content')

{{-- web.booking.store --}}

<div class="container mt-4">
    <h2> Booking List </h2>
    <br>
   <a class="btn btn-success" href="{{route('web.booking.store')}}"> create</a>
 <br>
<table class="table">
  <thead>
    <tr>
      <th scope="col"> ID</th>
      <th scope="col"> sender_name</th>
      <th scope="col"> sender_email</th>
      <th scope="col">sender_contact</th>
      <th scope="col">sender_address</th>

      <th scope="col"> receiver_name</th>
      <th scope="col"> receiver_email</th>
      <th scope="col"> receiver_contact</th>
      <th scope="col"> receiver_address</th>

      <th scope="col"> quantity</th>
      <th scope="col"> description</th>
      <th scope="col"> date</th>
      <th scope="col"> Category_type</th>
      <th scope="col"> weight_range</th>
      <th scope="col"> price</th>


      <th scope="col"> Action</th>
    </tr>
  </thead>
  <tbody>
   @foreach($booking as $key=>$item)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$item->sender_name}}</td>
      <td>{{$item->sender_email}}</td>
      <td>{{$item->sender_contact}}</td>
      <td>{{$item->sender_address}}</td>

      <td>{{$item->receiver_name}}</td>
      <td>{{$item->receiver_email}}</td>
      <td>{{$item->receiver_contact}}</td>
      <td>{{$item->receiver_address}}</td>

      <td>{{$item->quantity}}</td>
      <td>{{$item->description}}</td>
      <td>{{$item->date}}</td>
      <td>{{$item->Category_type}}</td>
      <td>{{$item->weight_range}}</td>
      <td>{{$item->price}}</td>

      <td>
        <a class="btn btn-success" href="">View</a>
        <a class="btn btn-warning" href="">Edit</a>
        <a class="btn btn-danger" href="">Delete</a>
      </td>
    </tr>

    @endforeach

  </tbody>
</table>

{{$booking->links()}}

</div>

@endsection
