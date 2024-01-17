@extends ('backend.master')
@section('title','Riders')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between">
            <h2>  Delivery Man </h2>
            
        </div>

        <table class="table responsive">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Duty Time</th>
                    <th scope="col">Approve</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($riders as $key => $row)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $row->name }}</td>
                        <td> 
                            {{ $row->email }}
                        </td>
                        
                        <td> 
                            @if ($row->phone)
                                
                            {{ $row->phone }}
                            @else
                            <p>xxxxxxxxxxx</p>
                            @endif
                        </td>
                        <td>
                           {{$row->duty_time}} 
                        </td>
                        <td> 
                            @if ($row->is_approved == true)
                                <span class="badge text-white bg-info">Approved</span>
                                @else
                                <form action="{{route('rider.approve',$row->id)}}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <small><button type="submit" class="btn btn-info btn-sm">Approve Now</button></small>
                                </form>
                            @endif
                        </td>


                        <td>

                            

                            <form 
                            class="d-inline"
                            action="{{route('rider.remove',$row->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                            </form>
                           
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

        {{ $riders->links() }}

    </div>
@endsection
