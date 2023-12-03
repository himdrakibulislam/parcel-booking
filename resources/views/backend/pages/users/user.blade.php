@extends ('backend.master')
@section('content')
    <div class="container">
        <table class="table responsive">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">User</th>


                    <th scope="col">Contact</th>
                    <th scope="col"> Address</th>
                    <th scope="col"> Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $key => $item)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>
                            <div class="d-flex">
                                <div class="mr-2">
                                    @if ($item->profile)
                                    <img 
                                    class="img-profile rounded-circle"
                                    src="{{ asset($item->profile) }}" width="30" height="30">
                                        @else
                                        <i class="fa-solid fa-user mr-2"></i>
                                    @endif
                                </div>
                                <div>
                                    <h6>
                                        {{ $item->name }}
                                    </h6>
                                    <p>{{ $item->email }}</p>
                                </div>
                            </div>
                        </td>

                        <td>{{ $item->contact }}</td>
                        <td><small>{{ $item->address }}</small></td>


                        <td>
                            {{-- <a class="btn btn-success btn-sm" href="#"><i class="fa-solid fa-pen-to-square"></i></a> --}}

                            <form 
                            class="d-inline"
                            action="{{route('remove.user',$item->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

        {{$users->links()}}
    </div>
@endsection
