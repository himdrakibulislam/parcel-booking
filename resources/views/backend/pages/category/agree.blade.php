@extends ('backend.master')
@section('title','Create Category')
@section ('content')
<div class="container">
  <h2>Create Category</h2>

  @if($errors->any())

  @foreach($errors->all() as $err)
  <p class="alert alert-danger">{{$err}}</p>
  @endforeach

  @endif
<form action="{{route('category.store')}}" method="POST">
  @csrf
  <div class="form-group">
    <label for="">Name <span class="text-danger">*</span></label>
    <input type="name" name="Name" class="form-control" id=""  placeholder="Enter Name">
  </div>

  <div class="form-group">
    <label for="">Image</label>
    <input type="url" name="Image" class="form-control" id=""  placeholder="Enter Image">
  </div>
  <div class="form-group">
    <label for="">Description</label>
    <input type="text" name="Description" class="form-control" id=""  placeholder="Enter Description">
  </div>
  <button type="submit" class="btn btn-primary float-right w-25"><i class="fa-solid fa-plus"></i> Create</button>
</form>
</div>

@endsection
