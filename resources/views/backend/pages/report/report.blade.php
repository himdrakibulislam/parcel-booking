@extends ('backend.master')
@section('title','Reports')
@section('content')
    <div class="container">
        <h2> Reports</h2>
        
        <a class="btn btn-info btn-sm mx-1" href="{{url('admin/report-status-wise?status=pending')}}" role="button">Pending</a>
        <a class="btn btn-secondary btn-sm mx-1" href="{{url('admin/report-status-wise?status=processing')}}" role="button">Processing</a>
        <a class="btn btn-secondary btn-sm mx-1" href="{{url('admin/report-status-wise?status=delivered')}}" role="button">Delivered</a>

        <h3 class="my-4">{{$lastSevenDaysBookingsCount}} parcels booked Last 7 days </h3>
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
              @foreach ($lastSevenDaysBookings as $key => $item)
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
                         
                      </td>
                  </tr>
              @endforeach

          </tbody>
      </table>
      {{$lastSevenDaysBookings->links()}}
      </div>
@endsection
