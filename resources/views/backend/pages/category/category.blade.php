@extends ('backend.master')
@section ('content')



<div class="container">
    <h2> Category </h2>
    <br>
   <a class="btn btn-success" href="{{route('category.agree')}}"> create</a>
 <br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Description</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>



    </tr>
  </thead>
  <tbody>
   @foreach($category as $key=>$item)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$item->Name}}</td>
      <td>{{$item->Image}}</td>
      <td>{{$item->Description}}</td>
      <td>{{$item->status}}</td>


      <td>
        <a class="btn btn-success" href="">view</a>
        <a class="btn btn-warning" href="">Update</a>
        <a class="btn btn-danger" href="">Delete</a>
      </td>
    </tr>

    @endforeach

  </tbody>
</table>

{{$category->links()}}

</div>

@endsection
