@extends ('backend.master')
@section ('content')


<div class="container">
  <h2>Weight Table</h2>
<form action="{{ route('weight.store') }}" method="POST">
  @csrf
  <div class="form-group">
    <label for="">Weight_range</label>
    <input type="text" name="Weight_range" class="form-control" id=""  placeholder="Enter Weight_range">
  </div>
  <div class="form-group">
    <label for="">Price</label>
    <input type="text" name="Price" class="form-control" id=""  placeholder="Price">
  </div>







<br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection
