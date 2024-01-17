@extends('rider.master')
@section('title','Booking for rider')

@section('content')
<div class="content">
@if ($booking)
<p class="mx-2"><b>Note</b> </p>
   
    <form action="{{route('rider.addnote',$booking->id)}}" method="post">
        @csrf
            <textarea name="note" 
            placeholder="Note" 
             cols="60" rows="20" 
             class="form-control"
             required
             >{{$booking->note}}</textarea>
       <button type="submit" 
       class="btn btn-secondary btn-sm my-2 w-25"
       >Submit</button>
    </form>

<div class="border rounded p-2 row mt-4">

    <div class="col-md-6 border-right">
        <div class="d-flex justify-content-between">
            <h4>From,</h4>
            <p>{{$booking->date}}</p>
        </div>
        <h6><b>{{ $booking->sender_name }}</b></h6>
        <small>{{ $booking->sender_email }}</small>
        <br>
        <a href="tel:{{ $booking->sender_contact }}">{{ $booking->sender_contact }}</a>
        <br>
        <small><b>Location</b></small>
        <br>
        <small>{{ $booking->sender_location }}</small>
        <br>
        <small><b>Address</b></small>

        <div>{{ $booking->sender_address }}</div>
    </div>
    <div class="col-md-6">
        <div class="d-flex justify-content-between">
            <h4>To,</h4>
            <div>
                <span class="badge bg-info">{{$booking->status}}</span>
          
            </div>
        </div>
        <h6><b>{{ $booking->receiver_name }}</b></h6>
        <small>{{ $booking->receiver_email }}</small>
        <br>
        <a href="tel:{{ $booking->receiver_contact }}">{{ $booking->sender_contact }}</a>
        <br>
        <small><b>Location</b></small>
        <br>
        <small>{{ $booking->receiver_location }}</small>
        <br>
        <small><b>Address</b></small>

        <div>{{ $booking->receiver_address }}</div>
    </div>

    <div class="col-md-12 mt-2">
        <div class="text-center mt-2">
            <h5 class=" ">Parcel Details</h5>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>#Tracking ID</th>
                    <th><a href="#">{{ $booking->booking_id }}</a></th>
                </tr>
                @if ($booking->category)
                    <tr>
                        <th>Category</th>
                        <th><small>{{ $booking->category->Name }}</small></th>

                    </tr>
                @endif

                @if ($booking->weight)
                    <tr>
                        <th>Weight Range</th>
                        <th><small>{{ $booking->weight->Weight_range }}</small></th>
                    </tr>
                @endif


                <tr>
                    <th>TOTAL</th>
                    <th>
                        <small>
                            {!! env('CURRENCY') !!}
                            {{ $booking->price }}</small>
                    </th>
                </tr>
                <tr>
                    <th>VEHICLE</th>
                    <th>
                        <small>

                            {{ $booking->vehicle }}</small>
                    </th>
                </tr>
                <tr>
                    <th>Payment</th>
                    <th>
                        <small>

                            {{ $booking->payment_type }}</small>
                    </th>
                </tr>

                <tr>
                    <th>Time Slot</th>
                    <th>
                        <small>

                            {{ $booking->time_slot }}</small>
                    </th>
                </tr>
                <tr>
                    <th>Packaging</th>
                    <th><span class="badge bg-info"> {{ $booking->special_package ? 'SPECIAL' : 'REGULAR' }}</span></th>
                </tr>
                @if ($booking->note)
                <tr>
                    <th>Note</th>
                    <th>{{$booking->note}}</th>
                </tr>
                @endif
                @if ($booking->rider)
                    <tr>
                        <th>Rider</th>
                        <th>
                            <h5>{{ $booking->rider->name }}</h5>

                            <small>{{ $booking->rider->email }}</small>
                            <br>
                            <small>{{ $booking->rider->phone }}</small>
                        </th>
                    </tr>
                @endif
            </thead>
        </table>
    </div>
    
</div>
@endif
</div>
@endsection