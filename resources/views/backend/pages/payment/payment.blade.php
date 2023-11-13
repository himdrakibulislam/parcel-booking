@extends ('backend.master')
@section ('content')



<div class="container">
    <h2> Payment </h2>
    <br>
   <a class="btn btn-success" href="{{route('payment.submit')}}"> create</a>
 <br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col"> Receiver name</th>
      <th scope="col">Receiver Contact number</th>
      <th scope="col">Receiver address</th>
      <th scope="col"> Shipment receive date</th>
      <th scope="col"> Shipment receive time</th>
      <th scope="col"> Shipment weight</th>
      <th scope="col">Total Price</th>
    </tr>
  </thead>
  <tbody>
   @foreach($payment as $key=>$item)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$item->receiver_name}}</td>
      <td>{{$item->receiver_contact_number}}</td>
      <td>{{$item->receiver_address}}</td>
      <td>{{$item->shipment_receive_date}}</td>
      <td>{{$item->shipment_receive_time}}</td>
      <td>{{$item->shipment_weight}}</td>
      <td>{{$item->shipment_price}}</td>

      <td>
        <a class="btn btn-success" href="">View</a>
        <a class="btn btn-warning" href="">Edit</a>
        <a class="btn btn-danger" href="">Delete</a>
      </td>
    </tr>
    
    @endforeach

  </tbody>
</table>

{{$payment->links()}}

</div>

@endsection
    