@extends ('backend.master')
@section('title','Edit Category')
@section ('content')
<div class="container">
  <h2>Edit Category</h2>

  @if($errors->any())

  @foreach($errors->all() as $err)
  <p class="alert alert-danger">{{$err}}</p>
  @endforeach

  @endif
<form action="{{route('category.update',$category->id)}}" method="POST">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label for="">Name <span class="text-danger">*</span></label>
    <input type="name" 
    value="{{$category->Name}}"
    name="Name" class="form-control" id=""  placeholder="Enter Name">
  </div>

  <div class="form-group">
    <label for="">Image</label>
    <input type="url"
    value="{{$category->Image}}"
    name="Image" class="form-control" id=""  placeholder="Enter Image">
  </div>
  <div class="form-group">
    <label for="">Description</label>
    <input type="text" 
    name="Description" 
    value="{{$category->Description}}"
    class="form-control" id=""  placeholder="Enter Description">
  </div>
  <button type="submit" class="btn btn-primary float-right w-25">Update</button>
</form>
</div>

@endsection
