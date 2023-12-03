@extends ('backend.master')
@section('title', 'Booking List')
@section('content')

    {{-- web.booking.store --}}

    <div class="container mt-4">
        <h2> Booking List </h2>
        <br>

        <br>
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th scope="col"> #BOOKING ID</th>
                    <th scope="col"> USER</th>
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
                            {{$item->user->name}}

                        </td>
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
                            <a class="btn btn-success btn-sm" href="{{route('get.booking',$item->id)}}">
                              View
                            </a>
                            {{-- <a class=" " href="">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <a class=" btn-sm" href="">
                                <i class="fa-solid fa-trash"></i>
                            </a> --}}
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

        {{ $booking->links() }}

    </div>

@endsection
