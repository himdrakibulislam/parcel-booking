@extends ('backend.master')
@section('title', 'Booking')
@section('content')
    <div class="container mt-4">
        <div class="border rounded p-2 row mt-4">
            
                <div class="col-md-6">
                    @if ($booking->status != 'draft')
                    <form action="{{ route('update.booking', $booking->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" class="form-control" id="">
                                <option value="pending"
                                @if ($booking->status == 'pending')
                                    @selected(true)
                                @endif
                                >Pending</option>
                                <option value="processing"
                                @if ($booking->status == 'processing')
                                @selected(true)
                                @endif
                                >Processing</option>
                                <option 
                                @if ($booking->status == 'delivered')
                                @selected(true)
                                 @endif
                                value="delivered">Delivered</option>
                            </select>
                        </div>
                        <button class="btn btn-secondary btn-sm w-25" type="submit">Submit</button>
                    </form>
                    @else 
                    <span class="badge bg-warning">Draft</span>
                    @endif
                </div>
                <div class="col-md-6">
                    @if (!$booking->is_confirm)
                    <form action="{{route('confirm.booking',$booking->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <label for="">To confirm the parcel click below button </label>
                        <br>
                        <button type="submit" class="btn btn-success btn-sm w-50">
                            Confirm
                        </button>
                        </form>
                        @else
                        
                        <span class="badge bg-success text-white">Confirmed</span>
                    @endif
                </div>
            
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
                <h4>To,</h4>
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
                            <th>#ID</th>
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
            <form action="{{ route('delete.booking', $booking->id) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger btn-sm ">
                    <i class="fa-solid fa-trash"></i> Delete
                </button>
            </form>
        </div>
    </div>
@endsection
