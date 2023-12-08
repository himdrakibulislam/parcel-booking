@extends ('backend.master')
@section('content')
    <div class="container">
        <h4 class="text-uppercase">Dashboard</h4>
        <div class="row">
            <div class="col-md-6">
                <div class="shadow rounded  p-4 ">
                    <h2><b>Total Revenue </b></h2>
                    <div class="d-flex my-2">
                        <h1 class="text-success mx-4"><i class="fa-solid fa-cart-shopping"></i></h1>
                        <h1 class="mx-2">
                           {!!env('CURRENCY')!!} {{$totalrevenue}}
                        </h1>
                    </div>
                </div>
            </div>
            <div class="col-md-6  my-2">
                <div class="shadow rounded  p-4">
                    <h2><b>Customers </b></h2>
                    <div class="d-flex my-2">
                        <h1 class="text-info mx-4"><i class="fa-solid fa-users"></i></h1>
                        <h1 class="mx-2">
                           {{$customers}}
                        </h1>
                    </div>
                </div>
            </div>
            <div class="col-md-12 my-2">
                <div class="shadow rounded  p-4">
                    <h2><b>Total Booking </b></h2>
                    <div class="d-flex my-2">
                        <h1 class=" mx-4">
                            <i class="fa-solid fa-truck"></i>
                        </h1>
                        <h1 class="mx-2">
                           {{$totalbooking}}
                        </h1>
                    </div>
                </div>
            </div>
        </div>

        <h3 class="my-4"><b>Latest Bookings</b></h3>

        <table class="table responsive">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Sender </th>
                    <th scope="col">Receiver</th>
                    <th scope="col">Total</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($latestbookings as $key => $row)
                    <tr>
                        <th scope="row">{{ $key + 1 }}</th>
                        <td>{{ $row->sender_name }}</td>
                        <td>{{ $row->receiver_name }}</td>
                        <td> 
                            {{ $row->price }}
                        </td>
                        <td> 
                            <span class="badge bg-success text-white">{{ $row->status }}</span>
                        </td>
                        

                        <td>

                            <a href="{{url('/admin/booking/'.$row->id)}}">View</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
