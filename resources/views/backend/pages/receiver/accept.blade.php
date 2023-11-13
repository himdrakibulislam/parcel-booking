@extends ('backend.master')
@section ('content')


<div class="container">
  <h2>Receiver details</h2>
  <form action="{{route('receiver.store')}}" method="POST">
    @csrf
  <div class="form-group">
    <label for="">Name</label>
    <input type="name" name="name" class="form-control" id=""  placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="">Email</label>
    <input type="email" name="email" class="form-control" id=""  placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="">Contact</label>
    <input type="tel" name="contact" class="form-control" id=""  placeholder="Enter contact">
  </div>
  <div class="form-group">
    <label for="">Country</label>
    <input type="text" name="Country" class="form-control" id=""  placeholder="Enter country">
  </div>

  <div class="form-group">
    <label for="">Address</label>
    <input type="text" name="address" class="form-control" id=""  placeholder="Enter address">
  </div>

  <div class="form-group">
    <label for="">City/State</label>
    <input type="text" name="City_State" class="form-control" id=""  placeholder="Enter City/State">
  </div>




<br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>




@endsection