<div class="sidebar" data-image="{{asset('/assets/img/sidebar-5.jpg')}}">
            
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text">
                <img src="{{asset('img/logo.png')}}"
                width="200px"
                height="100%"
                alt="logo">
                
            </a>
        </div>
        <ul class="nav">
            <li class="nav-item {{request()->is('rider/dashboard') ? 'active' : ''}}">
                <a class="nav-link" href="{{url('rider/dashboard')}}">
                    <i class="fas fa-user"></i>
                    <p>Profile</p>
                </a>
            </li>
            
        </ul>
        <ul class="nav">
            <li class="nav-item {{request()->is('rider/booking') ? 'active' : ''}}">
                <a class="nav-link" href="{{url('rider/booking')}}">
                    <i class="fas fa-box"></i>
                    <p>Booking</p>
                </a>
            </li>
            <li class="nav-item {{request()->is('rider/security') ? 'active' : ''}}">
                <a class="nav-link" href="{{url('rider/security')}}">
                    <i class="fas fa-shield-alt"></i>
                    <p>Security</p>
                </a>
            </li>
            
        </ul>
    </div>
</div>