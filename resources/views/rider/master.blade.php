
 <!DOCTYPE html>

 <html lang="en">
 
 <head>
     <meta charset="utf-8" />
     <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
     <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
     <title>@yield('title','Rider Dashboard')</title>
     <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
     <link href="img/favicon.ico" rel="icon">
     <!--     Fonts and icons     -->
     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
     <!-- CSS Files -->
     <link href="{{asset('/rider/css/bootstrap.min.css')}}" rel="stylesheet" />
     <link href="{{asset('/rider/css/light-bootstrap-dashboard.css?v=2.0.0 ')}}" rel="stylesheet" />
     @yield('style')
     
 </head>
 
 <body>
     <div class="wrapper">
        @include('rider.inc.sidebar')
         <div class="main-panel">
           @include('rider.inc.header')
           
           @yield('content')
         </div>
     </div>
    
 </body>
 <!--   Core JS Files   -->
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 <script src="{{asset('/rider/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
 <script src="{{asset('/rider/js/light-bootstrap-dashboard.js?v=2.0.0')}}" type="text/javascript"></script>

 
 </html>
 