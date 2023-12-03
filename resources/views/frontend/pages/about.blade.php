@extends('frontend.master')
@section('content')

<div class="container p-2">
    <header class="jumbotron text-center  text-white" >
        <h1 class="display-4 text-white">About Us</h1>
        <p class="lead">Empowering seamless parcel booking and delivery experiences. We connect senders and recipients, ensuring secure and efficient delivery services. Trust us with your parcels, and we'll handle the rest.</p>
      </header>
    
      <!-- About Us Content -->
      
      <div class="row align-items-center mt-5">
        <div class="col-lg-5 pb-4 pb-lg-0">
            <img class="img-fluid w-100" src="img/about.jpg" alt="">
            <div class="bg-primary text-dark text-center p-4">
                <h3 class="m-0">25+ Years Experience</h3>
            </div>
        </div>
        <div class="col-lg-7">
            <h6 class="text-primary text-uppercase font-weight-bold">About Us</h6>
            <h1 class="mb-4">Trusted & Faster Logistic Service Provider</h1>
            <p class="mb-4">Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore sed et. Sit rebum labore sit sit ut vero no sit. Et elitr stet dolor sed sit et sed ipsum et kasd ut. Erat duo eos et erat sed diam duo</p>
            <div class="d-flex align-items-center pt-2">
                <button type="button" class="btn-play" data-toggle="modal"
                    data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                    <span></span>
                </button>
                <h5 class="font-weight-bold m-0 ml-4">Play Video</h5>
            </div>
        </div>
      </div>
    
    
</div>
@endsection
