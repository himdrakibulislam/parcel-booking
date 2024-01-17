@extends('frontend.master')
@section('content')
<div class="container-fluid bg-secondary my-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 py-5 py-lg-0">
                <h6 class="text-primary text-uppercase font-weight-bold">Booking</h6>
                <h1 class="mb-4">Online Courier and Parcel Booking System</h1>
                <p class="mb-4">Our courier organization that delivers your parcel,packages or doccuments from one place or person to another place or person. Typically, our courier organization provides your courier in Eight (8) division of Bangladesh</p>
                <div class="row">
                    <div class="col-sm-4">
                        <h1 class="text-primary mb-2" data-toggle="counter-up">10</h1>
                        <h6 class="font-weight-bold mb-4">SKilled Experts</h6>
                    </div>
                    <div class="col-sm-4">
                        <h1 class="text-primary mb-2" data-toggle="counter-up">20</h1>
                        <h6 class="font-weight-bold mb-4">Happy Clients</h6>
                    </div>
                    <div class="col-sm-4">
                        <h1 class="text-primary mb-2" data-toggle="counter-up">100</h1>
                        <h6 class="font-weight-bold mb-4">Complete Projects</h6>
                    </div>
                </div>
            </div>

            <div class="container">
                <h2>Category details</h2>
              <form action="{{route('web.booking.store')}}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="">Name</label>
                  <input type="name" name="Name" class="form-control" id=""  placeholder="Enter Name">
                </div>

                <div class="form-group">
                  <label for="">Image</label>
                  <input type="name" name="Image" class="form-control" id=""  placeholder="Enter Image">
                </div>
                <div class="form-group">
                  <label for="">Description</label>
                  <input type="text" name="Description" class="form-control" id=""  placeholder="Enter Description">
                </div>

                        <div>
                            <button class="btn btn-dark btn-block border-0 py-3" type="submit">Booking</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
