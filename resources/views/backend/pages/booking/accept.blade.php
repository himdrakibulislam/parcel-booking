@extends ('backend.master')
@section ('content')


<div class="container">
  <h2>Booking List</h2>
<form action="" method="POST">
  @csrf
  <div class="form-group">
    <label for="">Category_name</label>
    <input type="name" name="Category_name" class="form-control" id=""  placeholder="Enter Category_name">
  </div>
  <div class="form-group">
    <label for="">Courier_weight</label>
    <input type="int" name="Courier_weight" class="form-control" id=""  placeholder="Enter Courier_weight">
  </div>
  <div class="form-group">
    <label for="">Courier_quantity</label>
    <input type="int" name="Courier_quantity" class="form-control" id=""  placeholder="Enter Receiver address">
  </div>
 <div class="form-group">
    <label for="">Courier_description</label>
    <input type="int" name="Courier_description" class="form-control" id=""  placeholder="Enter Courier_descriptione">
  </div>
  <div class="form-group">
    <label for="">From</label>
    <input type="text" name="From" class="form-control" id=""  placeholder="Enter From">
  </div>
  <div class="form-group">
    <label for="">To</label>
    <input type="text" name="To" class="form-control" id=""  placeholder="Enter To">
  </div>
  <div class="form-group">
    <label for=""> Sender_name</label>
    <input type="text" name="Sender_name" class="form-control" id=""  placeholder="Enter Sender_name">
  </div>

  <div class="form-group">
    <label for=""> Receiver_name</label>
    <input type="text" name="Receiver_name" class="form-control" id=""  placeholder="Enter Receiver_name">
  </div>
  <div class="form-group">
    <label for=""> Payment</label>
    <input type="int" name="Payment" class="form-control" id=""  placeholder="Payment">
  </div>








<br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection


