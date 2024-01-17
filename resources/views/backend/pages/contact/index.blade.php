@extends ('backend.master')
@section('title','Contact')

@section('content')
    <div class="container">
      
            <h2> Contacts </h2>
        @if ($contacts->count() > 0)
        <table class="table responsive">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Decsription</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $key => $row)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->email }}</td>
                        <td>{{ $row->phone }}</td>
                        <td> 
                            {{ $row->description }}
                        </td>
                        

                        <td>

                            <form 
                            class="d-inline"
                            action="{{route('contact.remove',$row->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                            </form>
                           
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

        {{ $contacts->links() }}
        @else
        <h3 class="text-center ">No contact</h3>
        @endif
    </div>
@endsection
