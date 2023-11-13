@extends ('backend.master')
@section ('content')


<div class="container">
  <h2>Shipment list details</h2>
<form action="{{route('shipment.store')}}" method="POST">
  @csrf
  <div class="form-group">
    <label for="">Sender_name</label>
    <input type="text" name="Sender_name" class="form-control" id=""  placeholder="Enter Sender_name">
  </div>
  <div class="form-group">
    <label for="">Receiver_name</label>
    <input type="text" name="Receiver_name" class="form-control" id=""  placeholder="Enter Receiver_name">
  </div>
  <div class="form-group">
    <label for="">From</label>
    <input type="text" name="From" class="form-control" id=""  placeholder="Enter From">
  </div>
  <div class="form-group">
    <label for=""> To</label>
    <input type="text" name="To" class="form-control" id=""  placeholder="Enter To">
  </div>
  <div class="form-group">
    <label for="">Date</label>
    <input type="date" name="Date" class="form-control" id=""  placeholder="Enter Date">
  </div>
  <div class="form-group">
    <label for="">Payment</label>
    <input type="int" name="Payment" class="form-control" id=""  placeholder="Enter Payment">
  </div>
  <div class="form-group">
    <label for="">Booking_ID</label>
    <input type="id" name="Booking_ID" class="form-control" id=""  placeholder="Booking_ID">
  </div>


<br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>




@endsection
