@extends('frontend.master')
@section('title', 'Pay')
@section('content')
    <div class="container">
        <div class="row my-4 border rounded p-2">
            <div class="col-md-6 border-right">
                <h4>From,</h4>
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

        </div>

        <h5>Select Paymentmethod</h5>
        <div class="row">
            <div class="col-md-6">
                {{-- <button id="sslczPayBtn" token="if you have any token validation" postdata=""
                    order="If you already have the transaction generated for current order" endpoint="/pay-via-ajax"> Pay
                    Now
                </button> --}}

                <form action="{{ url('/pay') }}" method="post">
                    @csrf
                    <label for="sslcommerz"> Pay With SSL Commerz</label>
                    <br>
                    <input type="hidden" name="booking_id"
                    value="{{$booking->id}}"
                    >
                    <button type="submit" class="btn">

                        <img src="https://securepay.sslcommerz.com/public/image/SSLCommerz-Pay-With-logo-All-Size-05.png"
                            width="200" height="240" class="w-100 h-100" alt="">
                    </button>
                </form>
            </div>
            <div class="col-md-6">
                <form action="{{ route('booking.condition') }}" method="POST">
                    @csrf

                    <div class="border px-1 py-2 mb-2">
                        <label for="condition">Cash on Delivery </label>
                        <input type="checkbox" name="condition" id="" value="condition" required>
                        <input hidden type="text" name="booking_id" value="{{ $booking->id }}" id="">
                    </div>
                    <button type="submit" class="btn btn-outline-success btn-sm w-100">Book Now</button>
                </form>
            </div>
        </div>
    </div>

@endsection
@push('extra-script')
    <script>
        var obj = {};
        obj.cus_name = $('#customer_name').val();
        obj.cus_phone = $('#mobile').val();
        obj.cus_email = $('#email').val();
        obj.cus_addr1 = $('#address').val();
        obj.amount = $('#total_amount').val();

        $('#sslczPayBtn').prop('postdata', obj);

        (function(window, document) {
            var loader = function() {
                var script = document.createElement("script"),
                    tag = document.getElementsByTagName("script")[0];
                script.src = "https://sandbox.sslcommerz.com/embed.min.js?" + Math.random().toString(36).substring(
                    7);
                tag.parentNode.insertBefore(script, tag);
            };

            window.addEventListener ? window.addEventListener("load", loader, false) : window.attachEvent("onload",
                loader);
        })(window, document);
    </script>
@endpush
