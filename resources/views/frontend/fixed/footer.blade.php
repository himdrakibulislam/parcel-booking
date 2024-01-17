<div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">
    <div class="row pt-5">
        <div class="col-lg-7 col-md-6">
            <div class="row">
                <div class="col-md-6 mb-5">
                    <h3 class="text-primary mb-4">Get In Touch</h3>
                    <p><i class="fa fa-map-marker-alt mr-2"></i>{{Cache::get('store')->address}}</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>{{Cache::get('store')->phone}}</p>
                    <p><i class="fa fa-envelope mr-2"></i>{{Cache::get('store')->email}}</p>
                    <div class="d-flex justify-content-start mt-4">
                        @if (Cache::get('store')->twitter)
                        <a class="btn btn-outline-light btn-social mr-2" target="_blank" href="{{Cache::get('store')->twitter}}"><i class="fab fa-twitter"></i></a>
                        @endif
                        @if (Cache::get('store')->facebook)
                        <a class="btn btn-outline-light btn-social mr-2" target="_blank" href="{{Cache::get('store')->facebook}}"><i class="fab fa-facebook-f"></i></a>
                        @endif
                        @if (Cache::get('store')->linkedin)
                        <a class="btn btn-outline-light btn-social mr-2" target="_blank" href="{{Cache::get('store')->linkedin}}"><i class="fab fa-linkedin-in"></i></a>
                        @endif
                        @if (Cache::get('store')->instagram)                     
                        <a class="btn btn-outline-light btn-social" target="_blank" href="{{Cache::get('store')->instagram}}"><i class="fab fa-instagram"></i></a>
                        @endif
                       
                    </div>
                </div>
                <div class="col-md-6 mb-5">
                    <h3 class="text-primary mb-4">Quick Links</h3>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                        <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>About Us</a>
                        <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Services</a>
                        <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Pricing Plan</a>
                        <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-md-6 mb-5">
            <h3 class="text-primary mb-4">Online Courier and Parcel Booking System</h3>
            <p>Our courier organization delivers your parcel,packages or doccuments from one place or person to another place or person. Typically, our courier organization provides your courier inside Dhaka.</p>
            <div class="w-100">
                <div class="input-group">
                    <input type="text" class="form-control border-light" style="padding: 30px;" placeholder="Your Email Address">
                    <div class="input-group-append">
                        <button class="btn btn-primary px-4">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5" style="border-color: #3E3E4E !important;">
    <div class="row">
        <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
            <p class="m-0 text-white">&copy; <a href="#">{{Cache::get('store')->name}}</a>. All Rights Reserved.

            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
            Designed by <a target="_blank" href="https://www.facebook.com/techstacktm/">TechStack</a>
            </p>
        </div>
        <div class="col-lg-6 text-center text-md-right">
            <ul class="nav d-inline-flex">
                <li class="nav-item">
                    <a class="nav-link text-white py-0" href="#">Privacy</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white py-0" href="#">Terms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white py-0" href="#">FAQs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white py-0" href="#">Help</a>
                </li>
            </ul>
        </div>
    </div>
</div>
