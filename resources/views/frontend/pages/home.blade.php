@extends('frontend.master')
@section('title')
    Home - {{ env('APP_NAME') }}
@endsection
@section('content')
    <div>

        <!-- Header Start -->
        <div 
        style="background-image: url('https://www.ajot.com/images/uploads/article/MSC-cargo.png');
        background-color: rgba(0, 0, 0, 0.329);" class="jumbotron jumbotron-fluid mb-5">
            <div class="container text-center py-5 rounded" style="background:rgba(0, 0, 0, 0.521);
        ">
                <h1 class="text-primary mb-4">Safe & Faster</h1>
                <h1 class="text-white display-3 mb-5">Logistics Services</h1>
                <div class="mx-auto" style="width: 100%; max-width: 600px;">
                    <form action="{{route('find.booking')}}" method="post">
                        @csrf
                        <div class="input-group">
                            <input type="text" class="form-control border-light"
                            name="tracking_id"
                            style="padding: 30px;"
                                placeholder="Tracking Id">
                            <div class="input-group-append">
                                <button class="btn btn-primary px-3">Track & Trace</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- About Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 pb-4 pb-lg-0">
                        <img class="img-fluid w-100" src="{{asset('img/a.jpg')}}" alt="">
                       
                    </div>
                    <div class="col-lg-7">
                        <h6 class="text-primary text-uppercase font-weight-bold">About Us</h6>
                        <h1 class="mb-4 text-left">Empowering Global Commerce through Seamless Logistics Solutions</h1>
                        
                        <div class="d-flex align-items-center pt-2">
                            <button type="button" class="btn-play" data-toggle="modal"
                                data-src="https://www.youtube.com/embed/HUozIpTODZQ?si=nHDZNmcu03txfOhd" data-target="#videoModal">
                                <span></span>
                            </button>
                            <h5 class="font-weight-bold m-0 ml-4">Play Video</h5>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Video Modal -->
            <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <!-- 16:9 aspect ratio -->
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item" src="" id="video"
                                    allowscriptaccess="always" allow="autoplay"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!--  Quote Request Start -->
        <div class="container-fluid bg-secondary my-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 py-5 py-lg-0">
                        <h6 class="text-primary text-uppercase font-weight-bold">Get A Quote</h6>
                        <h1 class="mb-4">Request A Free Quote</h1>
                        
                        <div class="row">
                            <div class="col-sm-4">
                                <h1 class="text-primary mb-2" data-toggle="counter-up">225</h1>
                                <h6 class="font-weight-bold mb-4">SKilled Experts</h6>
                            </div>
                            <div class="col-sm-4">
                                <h1 class="text-primary mb-2" data-toggle="counter-up">1050</h1>
                                <h6 class="font-weight-bold mb-4">Happy Clients</h6>
                            </div>
                            <div class="col-sm-4">
                                <h1 class="text-primary mb-2" data-toggle="counter-up">2500</h1>
                                <h6 class="font-weight-bold mb-4">Complete Projects</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="bg-primary py-5 px-4 px-sm-5">
                            <form class="py-5">
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" placeholder="Your Name"
                                        required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control border-0 p-4" placeholder="Your Email"
                                        required="required" />
                                </div>
                                <div class="form-group">
                                    <select class="custom-select border-0 px-4" style="height: 47px;">
                                        <option selected>Select A Service</option>
                                        <option value="1">Service 1</option>
                                        <option value="2">Service 1</option>
                                        <option value="3">Service 1</option>
                                    </select>
                                </div>
                                <div>
                                    <button class="btn btn-dark btn-block border-0 py-3" type="submit">Get A Quote</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Quote Request Start -->



        <!-- Features Start -->
        <div class="container-fluid bg-secondary my-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <img class="img-fluid w-100" src="{{asset('img/tr.jpg')}}" alt="">
                    </div>
                    <div class="col-lg-7 py-5 py-lg-0">
                        <h6 class="text-primary text-uppercase font-weight-bold">Why Choose Us</h6>
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
                        <a href="" class="btn btn-primary mt-3 py-2 px-4">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Features End -->


        <!-- Pricing Plan Start -->
        {{-- <div class="container-fluid pt-5">
            <div class="container">
                <div class="text-center pb-2">
                    <h6 class="text-primary text-uppercase font-weight-bold">Pricing Plan</h6>
                    <h1 class="mb-4">Affordable Pricing Packages</h1>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <div class="bg-secondary">
                            <div class="text-center p-4">
                                <h1 class="display-4 mb-0">
                                    <small class="align-top text-muted font-weight-medium"
                                        style="font-size: 22px; line-height: 45px;">$</small>49<small
                                        class="align-bottom text-muted font-weight-medium"
                                        style="font-size: 16px; line-height: 40px;">/Mo</small>
                                </h1>
                            </div>
                            <div class="bg-primary text-center p-4">
                                <h3 class="m-0">Basic</h3>
                            </div>
                            <div class="d-flex flex-column align-items-center py-4">
                                <p>HTML5 & CSS3</p>
                                <p>Bootstrap 4</p>
                                <p>Responsive Layout</p>
                                <p>Compatible With All Browsers</p>
                                <a href="" class="btn btn-primary py-2 px-4 my-2">Order Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <div class="bg-secondary">
                            <div class="text-center p-4">
                                <h1 class="display-4 mb-0">
                                    <small class="align-top text-muted font-weight-medium"
                                        style="font-size: 22px; line-height: 45px;">$</small>99<small
                                        class="align-bottom text-muted font-weight-medium"
                                        style="font-size: 16px; line-height: 40px;">/Mo</small>
                                </h1>
                            </div>
                            <div class="bg-primary text-center p-4">
                                <h3 class="m-0">Premium</h3>
                            </div>
                            <div class="d-flex flex-column align-items-center py-4">
                                <p>HTML5 & CSS3</p>
                                <p>Bootstrap 4</p>
                                <p>Responsive Layout</p>
                                <p>Compatible With All Browsers</p>
                                <a href="" class="btn btn-primary py-2 px-4 my-2">Order Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <div class="bg-secondary">
                            <div class="text-center p-4">
                                <h1 class="display-4 mb-0">
                                    <small class="align-top text-muted font-weight-medium"
                                        style="font-size: 22px; line-height: 45px;">$</small>149<small
                                        class="align-bottom text-muted font-weight-medium"
                                        style="font-size: 16px; line-height: 40px;">/Mo</small>
                                </h1>
                            </div>
                            <div class="bg-primary text-center p-4">
                                <h3 class="m-0">Business</h3>
                            </div>
                            <div class="d-flex flex-column align-items-center py-4">
                                <p>HTML5 & CSS3</p>
                                <p>Bootstrap 4</p>
                                <p>Responsive Layout</p>
                                <p>Compatible With All Browsers</p>
                                <a href="" class="btn btn-primary py-2 px-4 my-2">Order Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Pricing Plan End -->


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


        <!-- Testimonial Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="text-center pb-2">
                    <h6 class="text-primary text-uppercase font-weight-bold">Testimonial</h6>
                    <h1 class="mb-4">Our Clients Say</h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <div class="position-relative bg-secondary p-4">
                        <i class="fa fa-3x fa-quote-right text-primary position-absolute"
                            style="top: -6px; right: 0;"></i>
                        <div class="d-flex align-items-center mb-3">
                            <img class="img-fluid rounded-circle" src="img/testimonial-1.jpg"
                                style="width: 60px; height: 60px;" alt="">
                            <div class="ml-3">
                                <h6 class="font-weight-semi-bold m-0">John Doe</h6>
                                <small>- Small Business Owner</small>
                            </div>
                        </div>
                        <p class="m-0">As a small business owner, I rely heavily on efficient courier services to ensure timely deliveries of my products....</p>
                    </div>
                    <div class="position-relative bg-secondary p-4">
                        <i class="fa fa-3x fa-quote-right text-primary position-absolute"
                            style="top: -6px; right: 0;"></i>
                        <div class="d-flex align-items-center mb-3">
                            <img class="img-fluid rounded-circle" src="img/testimonial-2.jpg"
                                style="width: 60px; height: 60px;" alt="">
                            <div class="ml-3">
                                <h6 class="font-weight-semi-bold m-0">Michael</h6>
                                <small>- IT Professional</small>
                            </div>
                        </div>
                        <p class="m-0">As a freelance artist, I frequently send and receive delicate artworks that require special attention during shipping...</p>
                    </div>
                    <div class="position-relative bg-secondary p-4">
                        <i class="fa fa-3x fa-quote-right text-primary position-absolute"
                            style="top: -6px; right: 0;"></i>
                        <div class="d-flex align-items-center mb-3">
                            <img class="img-fluid rounded-circle" src="img/testimonial-3.jpg"
                                style="width: 60px; height: 60px;" alt="">
                            <div class="ml-3">
                                <h6 class="font-weight-semi-bold m-0">Robert</h6>
                                <small>- Freelance Artist</small>
                            </div>
                        </div>
                        <p class="m-0">In the event planning industry, the need for timely and secure deliveries is paramount....</p>
                    </div>
                    <div class="position-relative bg-secondary p-4">
                        <i class="fa fa-3x fa-quote-right text-primary position-absolute"
                            style="top: -6px; right: 0;"></i>
                        <div class="d-flex align-items-center mb-3">
                            <img class="img-fluid rounded-circle" src="img/testimonial-4.jpg"
                                style="width: 60px; height: 60px;" alt="">
                            <div class="ml-3">
                                <h6 class="font-weight-semi-bold m-0">David</h6>
                                <small>- E-commerce Entrepreneur</small>
                            </div>
                        </div>
                        <p class="m-0">Managing an e-commerce business demands reliable logistics, and I've found a gem in this courier booking site...</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


      
    </div>
@endsection

