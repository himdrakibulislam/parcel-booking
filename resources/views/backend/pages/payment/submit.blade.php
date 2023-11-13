@extends ('backend.master')
@section ('content')


<div class="container">
  <h2>Payment</h2>
<form action="{{route('payment.store')}}" method="POST">
  @csrf
  <div class="form-group">
    <label for="">Receiver name</label>
    <input type="name" name="receiver_name" class="form-control" id=""  placeholder="Enter Receiver name">
  </div>
  <div class="form-group">
    <label for="">Receiver Contact number</label>
    <input type="int" name="receiver_contact_number" class="form-control" id=""  placeholder="Enter Receiver Contact number">
  </div>
  <div class="form-group">
    <label for="">Receiver address</label>
    <input type="text" name="receiver_address" class="form-control" id=""  placeholder="Enter Receiver address">
  </div>
 <div class="form-group">
    <label for="">Shipment receive date</label>
    <input type="date" name="shipment_receive_date" class="form-control" id=""  placeholder="Enter Shipment receive date">
  </div>
  <div class="form-group">
    <label for="">Shipment receive time</label>
    <input type="time" name="shipment_receive_time" class="form-control" id=""  placeholder="Enter Shipment receive time">
  </div>
  <div class="form-group">
    <label for="">Shipment weight</label>
    <input type="double" name="shipment_weight" class="form-control" id=""  placeholder="Enter Shipment weight">
  </div>
  <div class="form-group">
    <label for="">Total Price</label>
    <input type="int" name="shipment_price" class="form-control" id=""  placeholder="Enter Total Price">
  </div>
  






<br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection