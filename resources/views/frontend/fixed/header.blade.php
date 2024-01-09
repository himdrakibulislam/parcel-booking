<div class="container-fluid bg-dark">
    <div class="row py-2 px-lg-5">
        <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center text-white">
                <small><i class="fa fa-phone-alt mr-2"></i>01580513838</small>
                <small class="px-3">|</small>
                <small><i class="fa fa-envelope mr-2"></i>shekshadeq@gmail.com</small>
            </div>
        </div>
        <div class="col-lg-6 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">
                <a class="text-white px-2" href="">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a class="text-white px-2" href="">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="text-white px-2" href="">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a class="text-white px-2" href="">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="text-white pl-2" href="">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
        <a href="/" class="navbar-brand ml-lg-3 text-center">
            <h1 class="m-0 display-5 text-uppercase text-primary"><i class="fa fa-truck mr-2"></i></h1>
            <small style="font-size: 20px;"><b>{{env('APP_NAME')}}</b></small>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
            <div class="navbar-nav m-auto py-0">
                <a href="{{ url('/') }}"
                    class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
                
                <a href="{{ route('booking') }}" class="nav-item nav-link {{ request()->is('booking') ? 'active' : '' }}">Booking
                </a>
                
                <a href="{{url('/category')}}" class="nav-item nav-link {{ request()->is('category') ? 'active' : '' }}">Category</a>

                <a href="{{url('/price')}}" class="nav-item nav-link {{ request()->is('price') ? 'active' : '' }}">Price</a> 
                
                <a href="{{ route('user.bookings') }}" class="nav-item nav-link {{ request()->is('my-bookings') ? 'active' : '' }}">Tracking</a>
                <div class="nav-item dropdown">

                </div>
                <a href="{{ route('about') }}"
                    class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">About
                </a>
                <a href="{{url('/contact')}}" class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
            </div>
            @if (Auth::check())
                <!-- Example single danger button -->
                <div class="btn-group">
                    <button type="button" class="btn btn-primary py-1 px-2 d-block d-lg-block dropdown-toggle"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                        @if (Auth::user()->profile)
                            <img class="img-profile rounded-circle" src="{{ asset(Auth::user()->profile) }}"
                                width="30" height="30">
                        @else
                        <i class="fas fa-user"></i>
                        @endif


                    </button>
                    <div class="dropdown-menu">

                        <a class="dropdown-item" href="{{ route('user.profile') }}">Profile</a>
                        <a class="dropdown-item" href="{{ route('user.bookings') }}">Bookings</a>
                        <a class="dropdown-item" href="{{ route('change.profile') }}">Security</a>
                        <a class="dropdown-item" href="{{ route('customer.logout') }}">Logout</a>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary py-2 px-4 d-block d-lg-block">Login</a>
            @endif
        </div>
    </nav>
</div>
