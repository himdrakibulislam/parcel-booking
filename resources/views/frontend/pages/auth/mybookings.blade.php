@extends('frontend.master')
@section('title', 'My Bookings')
@section('content')

    <title>My Bookings</title>


    <div class="container">
        @if ($my_bookings->count() > 0)
            @foreach ($my_bookings as $row)
                <div class="border rounded p-2 row my-2">
                    <div class="col-md-12 pb-4">
                    @if ($row->status == 'draft')
                        
                        <a href="{{url('/booking/pay?booking_id='.$row->id)}}" style="text-decoration: underline">Pay</a>
                        <hr>
                        @else
                        <a href="{{route('booking.tracking',$row->id)}}" class="btn btn-info btn-sm rounded" style="text-decoration: underline">Track Now</a>
                        @endif
                    </div>
                    <div class="col-md-6 border-right">
                        <div class="d-flex justify-content-between">
                            <h4>From,</h4>
                            <p>{{$row->date}}</p>
                        </div>
                        <h6><b>{{ $row->sender_name }}</b></h6>
                        <small>{{ $row->sender_email }}</small>
                        <br>
                        <a href="tel:{{ $row->sender_contact }}">{{ $row->sender_contact }}</a>
                        <br>
                        <small><b>Location</b></small>
                        <br>
                        <small>{{ $row->sender_location }}</small>
                        <br>
                        <small><b>Address</b></small>

                        <div>{{ $row->sender_address }}</div>
                    </div>
                    <div class="col-md-6">
                        <h4>To,</h4>
                        <h6><b>{{ $row->receiver_name }}</b></h6>
                        <small>{{ $row->receiver_email }}</small>
                        <br>
                        <a href="tel:{{ $row->receiver_contact }}">{{ $row->sender_contact }}</a>
                        <br>
                        <small><b>Location</b></small>
                        <br>
                        <small>{{ $row->receiver_location }}</small>
                        <br>
                        <small><b>Address</b></small>

                        <div>{{ $row->receiver_address }}</div>
                    </div>

                    <div class="col-md-12 mt-2">
                        <div class="text-center mt-2">
                            <h5 class=" ">Parcel Details</h5>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th><a href="#">{{ $row->booking_id }}</a></th>
                                </tr>
                                @if ($row->category)
                                    <tr>
                                        <th>Category</th>
                                        <th><small>{{ $row->category->Name }}</small></th>

                                    </tr>
                                @endif

                                @if ($row->weight)
                                    <tr>
                                        <th>Weight Range</th>
                                        <th><small>{{ $row->weight->Weight_range }}</small></th>
                                    </tr>
                                @endif


                                <tr>
                                    <th>TOTAL</th>
                                    <th>
                                        <small>
                                            {!! env('CURRENCY') !!}
                                            {{ $row->price }}</small>
                                    </th>
                                </tr>
                                <tr>
                                    <th>VEHICLE</th>
                                    <th>
                                        <small>

                                            {{ $row->vehicle }}</small>
                                    </th>
                                </tr>
                                <tr>
                                    <th>Payment</th>
                                    <th>
                                        <small>
        
                                            {{ $row->payment_type }}</small>
                                    </th>
                                </tr>
                                @if ($row->rider)
                                    <tr>
                                        <th>Rider</th>
                                        <th>
                                            <h5>{{ $row->rider->name }}</h5>

                                            <small>{{ $row->rider->email }}</small>
                                            <br>
                                            <small>{{ $row->rider->phone }}</small>
                                        </th>
                                    </tr>
                                @endif
                            </thead>
                        </table>
                    </div>

                </div>
            @endforeach
        @else
            <div class="text-center my-2">
                <h4>No Bookings</h4>
                <a href="{{ url('/booking') }}">Book Now</a>
            </div>
        @endif

        {{ $my_bookings->links() }}
    </div>
    </body>
@endsection
