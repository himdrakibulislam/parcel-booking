@extends('rider.master')
@section('title','Booking for rider')
@section('style')
    
@endsection
@section('content')
<div class="content">
    <h3>Rider Booking</h3>
    @if (Auth::guard('rider')->user()->is_approved != true)
     <h4 class="text-center text-uppercase">please, Waiting for approval</h4>
        @else
    @if ($booking->count() > 0)
    <table class="table table-responsive">
        <thead>
            <tr>
                <th scope="col"> #BOOKING ID</th>
      
                <th scope="col"> FROM</th>
                <th scope="col">To</th>
                <th scope="col">Total</th>
                <th scope="col">Status</th>

                <th scope="col"> ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($booking as $key => $item)
                <tr>
                    <th scope="row">{{ $item->booking_id }}</th>
                   
                    <td>
                        {{ $item->sender_name }}
                        <br>
                        {{ $item->sender_email }}
                        <br>
                        {{ $item->sender_contact }}
                        <br>
                        {{ $item->sender_location }}
                        <br>
                        {{ $item->sender_address }}
                    </td>


                    <td>
                        {{ $item->receiver_name }}
                        <br>
                        {{ $item->receiver_email }}
                        <br>
                        {{ $item->receiver_contact }}
                        <br>
                        {{ $item->receiver_location }}

                        <br>
                        {{ $item->receiver_address }}
                    </td>
                    <td>
                      {!! env('CURRENCY') !!}  {{ $item->price }}
                        
                    </td>
                    <td>
                        @if ($item->is_confirm)
                            <span class="badge bg-success text-white">Confirmed</span>
                            @else
                            <span class="badge bg-secondary text-white">Pending</span>
                        @endif
                    </td>
                 




                    <td>
                        <a class="btn btn-success btn-sm" href="{{url('rider/booking/'.$item->id)}}">
                          View
                        </a>
                       
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    {{ $booking->links() }}
    @else
    <h3 class="text-center text-uppercase">No Booking </h3>
    @endif
    @endif
</div>
@endsection