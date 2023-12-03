@extends ('backend.master')
@section('title', 'Weight')
@section('content')
    <div class="container">

        
        <div class="d-flex justify-content-between">
          <h2> Weight </h2>
          <div >
            <a class="btn btn-success" href="{{ route('weight.agreed') }}"> <i class="fa-solid fa-plus"></i> Create</a>
          </div>
      </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Weight_range</th>
                    <th scope="col">Price</th>
                
                    <th scope="col">Action</th>


                </tr>
            </thead>
            <tbody>
                @foreach ($weight as $key => $item)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $item->Weight_range }}</td>
                        <td> {!!env('CURRENCY')!!}  {{  $item->Price }}</td>
                       


                        <td>
                          <a class="btn btn-primary btn-sm" href="{{route('weight.edit',$item->id)}}"><i class="fa-solid fa-pen-to-square"></i></a>

                          <form 
                          class="d-inline"
                          action="{{route('weight.remove',$item->id)}}" method="post">
                          @csrf
                          @method('delete')
                          <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                          </form>
                         
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

        {{ $weight->links() }}

    </div>

@endsection
