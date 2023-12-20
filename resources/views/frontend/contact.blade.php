@extends('frontend.master')
@section('content')
@section('title', 'Contact')
<div class="container ">
    <h3 class="text-center my-5">Contact Us</h3>

    <div class="row">
        <div class="col-md-6">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116747.77840639136!2d90.23079861243042!3d23.876563337899864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c5d05e7074dd%3A0xd1c58803049f00c7!2sUttara%2C%20Dhaka%2C%20Bangladesh!5e0!3m2!1sen!2sus!4v1703075662722!5m2!1sen!2sus"
                width="100%" height="650px" style="border:0;"
                frameborder="0" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            
        </div>
        <div class="contact-form col-md-6">
            <h1 class="title">Contact Us</h1>
            <h2 class="subtitle">We are here assist you.</h2>
            <form action="">
                <div class="form-group">
                    <input type="text" class="form-control" name="name" placeholder="Your Name" />
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="e-mail" placeholder="Your E-mail Adress" />
                </div>
                <div class="form-group">
                    <input type="tel" class="form-control" name="phone" placeholder="Your Phone Number" />
                </div>
                <div class="form-group">
                    <textarea name="text" class="form-control" id="" rows="8" placeholder="Your Message"></textarea>
                </div>
                <button class="btn btn-info w-50">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
