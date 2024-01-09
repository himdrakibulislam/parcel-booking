@extends ('backend.master')
@section('title', 'Reports')
@section('content')
    <style>
        @media print {
            body * {
                visibility: hidden;
            }

            .print-section,
            .print-section * {
                visibility: visible;
            }

            .print-section {
                position: absolute;
                left: 0;
                top: 0;
            }
        }
    </style>
    <div class="container">
        <div class="d-flex justify-content-between my-2">

            <h2> Reports</h2>

            <div>
                <button onclick="printSection()" class="btn btn-success btn-sm "><i class="fa-solid fa-print"></i>
                    Print</button>
            </div>
        </div>

        <div class="d-flex justify-content-between">

            <div>
                <a class="btn btn-info btn-sm mx-1" href="{{ url('admin/report-status-wise?status=pending') }}"
                    role="button">Pending</a>
                <a class="btn btn-secondary btn-sm mx-1" href="{{ url('admin/report-status-wise?status=processing') }}"
                    role="button">Processing</a>
                <a class="btn btn-secondary btn-sm mx-1" href="{{ url('admin/report-status-wise?status=delivered') }}"
                    role="button">Delivered</a>
            </div>

            <form action="{{ url('admin/report') }}" class="d-flex my-2" method="get">
                <div class="mx-2">

                    <input type="date" class="form-control" name="from" value="{{ request('from') }}" required>
                </div>
                <div class="mx-2">

                    <input type="date" class="form-control" name="to" value="{{ request('to') }}" required>
                </div>

                <div class="mx-2">

                    <button type="submit" class="btn btn-outline-success  btn-sm py-1">Search</button>
                </div>
            </form>

        </div>

        @if ($lastSevenDaysBookingsCount)
            <h3 class="my-4">{{ $lastSevenDaysBookingsCount }} parcels booked Last 7 days </h3>
        @endif


        @if ($reports->count() > 0)
            <table class="table table-responsive print-section">
                <thead>
                    <tr>
                        <th scope="col"> #BOOKING ID</th>
                        <th scope="col"> Date </th>
                        <th scope="col"> Time Slot </th>
                        <th scope="col"> USER</th>
                        <th scope="col"> FROM</th>
                        <th scope="col">To</th>
                        <th scope="col">Total</th>
                        <th scope="col">Status</th>

                        <th scope="col"> ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reports as $key => $item)
                        <tr>
                            <th scope="row">{{ $item->booking_id }}</th>
                            <td>
                                {{ Carbon\Carbon::parse($item->date)->format('d M , Y') }}

                            </td>
                            <td>
                                <span class="badge bg-info text-white">{{ $item->time_slot }}</span>

                            </td>
                            <td>
                                {{ $item->user->name }}

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
                                {!! env('CURRENCY') !!} {{ $item->price }}

                            </td>
                            <td>
                                @if ($item->is_confirm)
                                    <span class="badge bg-success text-white">Confirmed</span>
                                @else
                                    <span class="badge bg-secondary text-white">Pending</span>
                                @endif
                            </td>





                            <td>
                                <a class="btn btn-success btn-sm" href="{{ route('get.booking', $item->id) }}">
                                    View
                                </a>

                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            {{ $reports->links() }}
        @else
            <h3 class="text-center my-4">No Report Found</h3>
        @endif

    </div>
@endsection

@push('custom-script')
    <script>
        function printSection() {
            window.print();
        }
    </script>
@endpush
