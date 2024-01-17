<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Online Courier and Parcel Booking System')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">



    <!-- Libraries Stylesheet -->
     <!-- Toastify css -->
  <link  href="https://cdnjs.cloudflare.com/ajax/libs/toastify-js/1.6.1/toastify.css" rel="stylesheet" />

    {{-- owl carousl--}}
    <link href="{{ url('frontend/assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ url('frontend/assets/css/style.css') }}" rel="stylesheet">
    <script src="https://js.stripe.com/v3/"></script>

</head>

<body>
  
    @include('frontend.fixed.header')
   

    @yield('content')



    <!-- Footer Start -->
    @include('frontend.fixed.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('frontend/assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ url('frontend/assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ url('frontend/assets/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ url('frontend/assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Contact Javascript File -->
    <script src="{{ url('frontend/assets/mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ url('frontend/assets/mail/contact.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ url('frontend/assets/js/main.js') }}"></script>
     <!-- Toastify js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastify-js/1.6.1/toastify.js"></script>
    
    @if (session('status'))
    <script>
      // swal("{{session('status')}}","" ,"success");
      Toastify({text:'{{session('status')}}',duration:2000}).showToast();
    </script>
  
      
  @endif



    @stack('extra-script')

</body>

</html>
