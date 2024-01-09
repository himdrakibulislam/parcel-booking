@extends('frontend.master')
@section('title')
    Home - {{ env('APP_NAME') }}
@endsection
@section('content')
    <div>

   

        <div class="container-fluid bg-secondary my-5">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-7 py-5 py-lg-0">
                        
                        <h1 class="mb-4">Faster, Safe and Trusted Logistics Services</h1>
                        
                        <ul class="list-inline">
                            <li>
                                <h6><i class="far fa-dot-circle text-primary mr-3"></i>Best In Industry</h6>
                            <li>
                                <h6><i class="far fa-dot-circle text-primary mr-3"></i>Emergency Services</h6>
                            </li>
                            <li>
                                <h6><i class="far fa-dot-circle text-primary mr-3"></i>24/7 Customer Support</h6>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-primary mt-3 py-2 px-4">Learn More</a>
                    </div>

                    <div class="col-lg-5">
                        <img class="img-fluid w-100" src="https://png.pngtree.com/png-clipart/20230131/ourmid/pngtree-fast-delivery-png-image_6576285.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- About Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 pb-4 pb-lg-0">
                        <img class="img-fluid w-100" src="{{asset('img/about.jpg')}}" alt="">
                        
                    </div>
                    <div class="col-lg-7">
                        
                        <h1 class="mb-4">Trusted & Faster Logistic Service Provider</h1>
                        <p class="mb-4">
                          
                        </p>
                        
                    </div>
                </div>
            </div>
            <!-- Video Modal -->
          
        </div>
        <!-- About End -->

       

        <!-- Team Start -->
        <div class="container-fluid pt-5">
            <div class="container">
                <div class="text-center pb-2">
                    <h6 class="text-primary text-uppercase font-weight-bold">Delivery Team</h6>
                    <h1 class="mb-4">Meet Our Delivery Team</h1>
                </div>
                <div class="row">
                    @foreach ($riders as $row)
                    <div class="col-lg-3 col-md-6">
                        <div class="team card position-relative overflow-hidden border-0 mb-5">
                            <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTwiiUFvfsqGv9y_jOy_8irGhksmKCpLWqGMQ&usqp=CAU" alt="">
                            <div class="card-body text-center p-0">
                                <div class="team-text d-flex flex-column justify-content-center bg-secondary">
                                    <h5 class="font-weight-bold">{{$row->name}}</h5>
                                    <span>Designation</span>
                                </div>
                                <div class="team-social d-flex align-items-center justify-content-center bg-primary">
                                    <a class="btn btn-outline-dark btn-social mr-2" href="#"><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-outline-dark btn-social mr-2" href="#"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-outline-dark btn-social mr-2" href="#"><i
                                            class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-outline-dark btn-social" href="#"><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    
                </div>
            </div>
        </div>
        <!-- Team End -->


    </div>
@endsection



