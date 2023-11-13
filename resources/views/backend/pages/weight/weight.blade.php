@extends ('backend.master')
@section ('content')



<div class="container">
    <h2> Weight </h2>
    <br>
   <a class="btn btn-success" href="{{ route('weight.agreed') }}"> create</a>
 <br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Weight_range</th>
      <th scope="col">Price</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>


    </tr>
</thead>
<tbody>
 @foreach($weight as $key=>$item)
  <tr>
    <th scope="row">{{$key+1}}</th>
    <td>{{$item->Weight_range}}</td>
    <td>{{$item->Price}}</td>
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

{{$weight->links()}}

</div>

@endsection
