@extends ('backend.master')
@section('title','Locations')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between">
            <h2> Locations </h2>
            <div >
              <a class="btn btn-success" href="{{ route('location.add') }}"> <i class="fa-solid fa-plus"></i> Add</a>
            </div>
        </div>

        <table class="table responsive">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Decsription</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($location as $key => $row)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $row->name }}</td>
                        <td> 
                            {{ $row->description }}
                        </td>
                        

                        <td>

                            <a class="btn btn-primary btn-sm" href="{{route('location.edit',$row->id)}}"><i class="fa-solid fa-pen-to-square"></i></a>

                            <form 
                            class="d-inline"
                            action="{{route('location.remove',$row->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                            </form>
                           
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

        {{ $location->links() }}

    </div>
@endsection
