@extends('frontend.master')
@section('title','Register As Rider')
@section('content')

<div class="container py-2">
    @if ($errors->any())

        @foreach ($errors->all() as $err)
            <p class="alert alert-danger">{{ $err }}</p>
        @endforeach

    @endif
    <div class="row">
        <form class="col-lg-6 mx-lg-auto shadow py-2" action="{{ route('rider.register') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Name <span class="text-danger">*</span></label>
                <input type="name" value="{{old('name')}}" name="name" class="form-control" id="" placeholder="Enter Name" required>
            </div>
            <div class="form-group">
                <label for="">Email <span class="text-danger">*</span></label>
                <input type="name" value="{{old('email')}}"  name="email" class="form-control" id="" placeholder="Enter Email" required>
            </div>
            <div class="form-group">
                <label for="">Phone </label>
                <input type="name" value="{{old('phone')}}"  name="phone" class="form-control" id="" placeholder="Enter Phone Number">
            </div>
            <label for="">Duty Time
                <span class="text-danger">*</span>
            </label>
    
            <div class="form-group">
                <select name="duty_time" class="form-control" id="" required>
                    <option value="">------Select Duty time----</option>
                    <option value="09AM-3PM">
                        09 AM - 3PM
                    </option>
                    <option value="3PM-9PM">
                         3PM - 9AM
                    </option>
                </select>
            </div>

            <div class="form-group">
                <label for="">Password <span class="text-danger">*</span> </label>
                <input type="password" name="password" class="form-control" id="" placeholder="Enter Password">
            </div>
    
            <div class="form-group">
                <label for="">Password Confirmation <span class="text-danger">*</span></label>
                <input type="password" name="password_confirmation" class="form-control" id="" placeholder="Enter Password">
            </div>
            <a href="{{route('rider.login.form')}}">Already have account?</a>
            <button type="submit" class="btn btn-primary float-right w-25"> Register</button>
        </form>
    </div>
</div>
@endsection