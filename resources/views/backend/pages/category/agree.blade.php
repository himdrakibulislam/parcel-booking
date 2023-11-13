@extends ('backend.master')
@section ('content')


<div class="container">
  <h2>Category details</h2>
<form action="{{route('category.store')}}" method="POST">
  @csrf
  <div class="form-group">
    <label for="">Name</label>
    <input type="name" name="Name" class="form-control" id=""  placeholder="Enter Name">
  </div>

  <div class="form-group">
    <label for="">Image</label>
    <input type="name" name="Image" class="form-control" id=""  placeholder="Enter Image">
  </div>
  <div class="form-group">
    <label for="">Description</label>
    <input type="text" name="Description" class="form-control" id=""  placeholder="Enter Description">
  </div>

  








<br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection
