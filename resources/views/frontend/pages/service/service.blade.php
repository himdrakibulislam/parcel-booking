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
            <div class="col-lg-5">
                <div class="bg-primary py-5 px-4 px-sm-5">
                    {{-- <form class="py-5" action="{{route('booking.store')}}" method="post"> --}}
                        <form action="{{route('web.booking.store')}}" method="post">
                        @csrf
                        <h1>Sender Details</h1>
                        <div class="form-group">
                            <input type="text" name="sender_name" class="form-control border-0 p-4" placeholder="Your Name" required="required" />
                        </div>
                        <div class="form-group">
                            <input type="email" name="sender_email" class="form-control border-0 p-4" placeholder="Your Email" required="required" />
                        </div>
                        <div class="form-group">
                            <input type="tel" name="sender_contact" class="form-control border-0 p-4" placeholder="Your Contact" required="required" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="sender_address" class="form-control border-0 p-4" placeholder="Your Address" required="required" />
                        </div>


                        <h1>Receiver Details</h1>
                        <div class="form-group">
                            <input type="text" name="receiver_name" class="form-control border-0 p-4" placeholder="Receiver Name" required="required" />
                        </div>
                        <div class="form-group">
                            <input type="email" name="receiver_email" class="form-control border-0 p-4" placeholder="Receiver Email" required="required" />
                        </div>
                        <div class="form-group">
                            <input type="tel" name="receiver_contact" class="form-control border-0 p-4" placeholder="Receiver Contact" required="required" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="receiver_address" class="form-control border-0 p-4" placeholder="Receiver Address" required="required" />
                        </div>


                        <h1>Booking Details</h1>



                            <div class="form-group">
                                <input type="number" name="quantity" class="form-control border-0 p-4" placeholder="Courier quantity" required="required" />
                            </div>

                            <div class="form-group">
                                <input type="text" name="description" class="form-control border-0 p-4" placeholder="Courier description" required="required" />
                            </div>

                            <div class="form-group">
                                <input type="date" name="date" class="form-control border-0 p-4" placeholder="Date" required="required" />
                            </div>


                            <select class="form-group" style="height: 57px;" name="Category_type">
                               @foreach ( $categories as  $category)
                               <option  value="{{$category->id}}" >{{$category->Name}}</option>
                               @endforeach
                            </select>

                            <select class="custom-select border-0 px-4 from-group" style="height: 57px;" name="weight_range">
                                @foreach ( $weight as  $data)
                                <option  value="{{$data->id}}" >{{$data->Weight_range}}</option>
                                @endforeach
                             </select>


                             <div class="form-group">
                                <input type="number" name="price" class="form-control border-0 p-4" placeholder="price" required="required" />
                            </div>


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
