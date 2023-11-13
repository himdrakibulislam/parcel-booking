
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>FASTER - Logistics Company Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    {{-- {{url('frontend/assets/')}} --}}
    <link href="{{url('frontend/assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{url('frontend/assets/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->

    <!-- Topbar End -->
@include('frontend.fixed.header')
    <!-- Navbar Start -->

    <!-- Navbar End -->


    <!-- Header Start -->
    {{-- <div class="jumbotron jumbotron-fluid mb-5">
        <div class="container text-center py-5">
            <h1 class="text-primary mb-4">Safe & Faster</h1>
            <h1 class="text-white display-3 mb-5">Logistics Services</h1>
            <div class="mx-auto" style="width: 100%; max-width: 600px;">
                <div class="input-group">
                    <input type="text" class="form-control border-light" style="padding: 30px;" placeholder="Tracking Id">
                    <div class="input-group-append">
                        <button class="btn btn-primary px-3">Track & Trace</button>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Header End -->

    <!-- About Start -->


    @yield('content')



    <!-- Footer Start -->
    @include('frontend.fixed.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{url('frontend/assets/lib/easing/easing.min.js')}}"></script>
    <script src="{{url('frontend/assets/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{url('frontend/assets/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{url('frontend/assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Contact Javascript File -->
    <script src="{{url('frontend/assets/mail/jqBootstrapValidation.min.js')}}"></script>
    <script src="{{url('frontend/assets/mail/contact.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{url('frontend/assets/js/main.js')}}"></script>
</body>

</html>
