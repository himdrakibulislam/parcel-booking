@extends('frontend.master')
@section('title', 'Pay')
@section('content')
<style>
  .spacer {
      margin-bottom: 24px;
  }

  /**
   * The CSS shown here will not be introduced in the Quickstart guide, but shows
   * how you can use CSS to style your Element's container.
   */
  .StripeElement {
    background-color: white;
    padding: 10px 12px;
    border-radius: 4px;
    border: 1px solid #ccd0d2;
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: box-shadow 150ms ease;
    transition: box-shadow 150ms ease;
  }

  .StripeElement--focus {
    box-shadow: 0 1px 3px 0 #cfd7df;
  }

  .StripeElement--invalid {
    border-color: #fa755a;
  }

  .StripeElement--webkit-autofill {
    background-color: #fefde5 !important;
  }

  #card-errors {
      color: #fa755a;
  }
</style>

    <div class="container">
        <div class="row my-4 border rounded p-2">
            <h5>Select Paymentmethod</h5>
            <div class="row">
                <div class="col-md-6">
                   
    
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

                    <a href="">
                        
                    </a>

                    <form action="{{ route('pay.stripe') }}" method="POST" class="my-3 shadow p-2" id="payment-form">
                      {{-- {{ csrf_field() }} --}}
                      @csrf
                      <input type="hidden" name="booking_id" value="{{$booking->id}}">
                      <h5 class="text-center text-info">Pay With Stripe</h5>
                      <div class="form-group">
                          <label for="email">Email Address</label>
                          <input type="email" value="{{Auth::user()->email}}" class="form-control" id="email" required>
                      </div>
  
                      <div class="form-group">
                          <label for="name_on_card">Name on Card</label>
                          <input type="text" class="form-control" id="name_on_card" name="name_on_card" required>
                      </div>
  
                      <div class="row">
                      </div>

                      <div class="form-group">
                          <label for="card-element">Credit Card</label>
                          <div id="card-element">
                            <!-- a Stripe Element will be inserted here. -->
                        </div>
  
                        <!-- Used to display form errors -->
                        <div id="card-errors" role="alert"></div>
                      </div>
  
                      <div class="spacer"></div>
  
                      <button type="submit" class="btn btn-success">Pay</button>
                  </form>
                </div>
            </div>
            
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
                            <th>Time Slot</th>
                            <th>
                                <small>

                                    {{ $booking->time_slot }}</small>
                            </th>
                        </tr>
                        <tr>
                            <th>Packaging</th>
                            <th><span class="badge bg-white"> {{ $booking->special_package ? 'SPECIAL' : 'REGULAR' }}</span></th>
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

@push('extra-script')
<script src="https://js.stripe.com/v3/"></script>
<script>
  (function(){
      // Create a Stripe client
      var stripe = Stripe('{{env('STRIPE_API_PUBLIC_KEY')}}');

      // Create an instance of Elements
      var elements = stripe.elements();

      // Custom styling can be passed to options when creating an Element.
      // (Note that this demo uses a wider set of styles than the guide below.)
      var style = {
        base: {
          color: '#32325d',
          lineHeight: '18px',
          fontFamily: '"Raleway", Helvetica, sans-serif',
          fontSmoothing: 'antialiased',
          fontSize: '16px',
          '::placeholder': {
            color: '#aab7c4'
          }
        },
        invalid: {
          color: '#fa755a',
          iconColor: '#fa755a'
        }
      };

      // Create an instance of the card Element
      var card = elements.create('card', {
          style: style,
          hidePostalCode: true
      });

      // Add an instance of the card Element into the `card-element` <div>
      card.mount('#card-element');

      // Handle real-time validation errors from the card Element.
      card.addEventListener('change', function(event) {
        var displayError = document.getElementById('card-errors');
        if (event.error) {
          displayError.textContent = event.error.message;
        } else {
          displayError.textContent = '';
        }
      });

      // Handle form submission
      var form = document.getElementById('payment-form');
      form.addEventListener('submit', function(event) {
        event.preventDefault();

        var options = {
          name: document.getElementById('name_on_card').value,
        }

        stripe.createToken(card, options).then(function(result) {
          if (result.error) {
            // Inform the user if there was an error
            var errorElement = document.getElementById('card-errors');
            errorElement.textContent = result.error.message;
          } else {
            // Send the token to your server
            stripeTokenHandler(result.token);
          }
        });
      });

      function stripeTokenHandler(token) {
        // Insert the token ID into the form so it gets submitted to the server
        var form = document.getElementById('payment-form');
        var hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'stripeToken');
        hiddenInput.setAttribute('value', token.id);
        form.appendChild(hiddenInput);

        // Submit the form
        form.submit();
      }
  })();
</script>
@endpush
