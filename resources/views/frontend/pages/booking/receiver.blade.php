@extends('frontend.master')
@section('title', 'Tracking Parcel')
@section('content')
    <style>
        #progressbar {
            margin-bottom: 30px;
            overflow: hidden;
            color: #455A64;
            padding-left: 0px;
            margin-top: 30px
        }

        #progressbar li {
            list-style-type: none;
            font-size: 13px;
            width: 33.33%;
            float: left;
            position: relative;
            font-weight: 400;
            color: #455A64 !important;

        }

        #progressbar #step1:before {
            content: "1";
            color: #fff;
            width: 29px;
            margin-left: 15px !important;
            padding-left: 11px !important;
        }


        #progressbar #step2:before {
            content: "2";
            color: #fff;
            width: 29px;

        }

        #progressbar #step3:before {
            content: "3";
            color: #fff;
            width: 29px;
            margin-right: 15px !important;
            padding-right: 11px !important;
        }

        #progressbar li:before {
            line-height: 29px;
            display: block;
            font-size: 12px;
            background: #455A64;
            border-radius: 50%;
            margin: auto;
        }

        #progressbar li:after {
            content: '';
            width: 121%;
            height: 2px;
            background: #455A64;
            position: absolute;
            left: 0%;
            right: 0%;
            top: 15px;
            z-index: -1;
        }

        #progressbar li:nth-child(2):after {
            left: 50%;
        }

        #progressbar li:nth-child(1):after {
            left: 25%;
            width: 121%;
        }

        #progressbar li:nth-child(3):after {
            left: 25% !important;
            width: 50% !important;
        }

        #progressbar li.active:before,
        #progressbar li.active:after {
            background: #4bb8a9;
        }

        .card {
            background-color: #fff;
            box-shadow: 2px 4px 15px 0px rgb(0, 108, 170);
            z-index: 0;
        }

        small {
            font-size: 12px !important;
        }

        .a {
            justify-content: space-between !important;
        }

        .border-line {
            border-right: 1px solid rgb(226, 206, 226)
        }
    </style>
    <div class="container">
        <div class="card px-2">
            <div class="row px-3">
                <div class="col">
                    <ul id="progressbar">
                        <li class="step0  {{ $booking->status == 'pending' || 'delivered' || 'processing' ? 'active' : '' }}"
                            id="step1">PENDING</li>

                        <li class="step0 text-center {{ $booking->status == 'processing'||$booking->status == 'delivered' ? 'active' : '' }}"
                            id="step2">PROCESSING</li>

                        <li class="step0 text-muted {{ $booking->status == 'delivered' ? 'active' : '' }} text-right"
                            id="step3">DELIVERED</li>
                    </ul>
                </div>
            </div>
        </div>

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

        </div>
    </div>
@endsection
