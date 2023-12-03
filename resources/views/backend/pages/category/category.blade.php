@extends ('backend.master')
@section('title','Categories')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between">
            <h2> Categories </h2>
            <div >
              <a class="btn btn-success" href="{{ route('category.agree') }}"> <i class="fa-solid fa-plus"></i> Create</a>
            </div>
        </div>

        <table class="table responsive">
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
                @foreach ($category as $key => $item)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $item->Name }}</td>
                        <td> 
                            @if ($item->Image)
                            <img 
                            class="rounded"
                            src="{{ $item->Image}}" alt="ct" width="50" height="50">
                            @else
                            <p>Empty</p>
                            @endif
                        </td>
                        <td>
                            @if ($item->Description)
                            {{ $item->Description }}
                            @else 
                            <p>Empty</p>
                            @endif
                        </td>
                        <td>{{ $item->status }}</td>


                        <td>

                            <a class="btn btn-primary btn-sm" href="{{'/admin/category-edit/'.$item->id}}"><i class="fa-solid fa-pen-to-square"></i></a>

                            <form 
                            class="d-inline"
                            action="{{url('admin/category-remove/'.$item->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                            </form>
                           
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

        {{ $category->links() }}

    </div>
@endsection
