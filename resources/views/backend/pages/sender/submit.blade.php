@extends ('backend.master')
@section ('content')


<div class="container">
  <h2>Sender details</h2>
<form action="{{route('sender.store')}}" method="POST">
  @csrf
  <div class="form-group">
    <label for="">Name</label>
    <input type="text" name="Name" class="form-control" id=""  placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="">Email</label>
    <input type="email" name="Email" class="form-control" id=""  placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="">Password</label>
    <input type="password" name="Password" class="form-control" id=""  placeholder="Enter Password">
  </div>
  <div class="form-group">
    <label for="">Contact</label>
    <input type="number" name="Contact" class="form-control" id=""  placeholder="Enter contact">
  </div>
  <div class="form-group">
    <label for="">Address</label>
    <input type="text" name="Address" class="form-control" id=""  placeholder="Enter address">
  </div>
<br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>





@endsection
