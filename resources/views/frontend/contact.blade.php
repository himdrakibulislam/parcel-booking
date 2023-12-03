@extends('frontend.master')
@section('content')
@section('title', 'Contact')
<div class="container ">
    <h3 class="text-center my-5">Contact Us</h3>

    <div class="row">
        <div class="col-md-6">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d112061.09262729759!2d77.208022!3d28.632485!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x644e33bc3def0667!2sIndior+Tours+Pvt+Ltd.!5e0!3m2!1sen!2sus!4v1527779731123"
                width="100%" height="650px" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="contact-form col-md-6">
            <h1 class="title">Contact Us</h1>
            <h2 class="subtitle">We are here assist you.</h2>
            <form action="">
                <div class="form-group">
                    <input type="text" 
                    class="form-control"
                    name="name" placeholder="Your Name" />
                </div>
                <div class="form-group">
                    <input type="email" 
                    class="form-control"
                    name="e-mail" placeholder="Your E-mail Adress" />
                </div>
                <div class="form-group">
                    <input type="tel" 
                    class="form-control"
                    name="phone" placeholder="Your Phone Number" />
                </div>
                <div class="form-group">
                    <textarea name="text" 
                    class="form-control"
                    id="" rows="8" placeholder="Your Message"></textarea>
                </div>
                <button class="btn btn-info w-50">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection