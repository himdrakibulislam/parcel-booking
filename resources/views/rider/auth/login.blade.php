@extends('frontend.master')
@section('title','Login')
@section('content')

<div class="container py-2">
    @if ($errors->any())

        @foreach ($errors->all() as $err)
            <p class="alert alert-danger">{{ $err }}</p>
        @endforeach

    @endif
    <div class="row">
        <form class="col-lg-6 mx-lg-auto shadow py-2" action="{{ route('rider.login') }}" method="POST">
            @csrf
           
            <div class="form-group">
                <label for="">Email <span class="text-danger">*</span></label>
                <input type="name" value="{{old('email')}}"  name="email" class="form-control" id="" placeholder="Enter Email" required>
            </div>
            
                
            <div class="form-group">
                <label for="">Password <span class="text-danger">*</span> </label>
                <input type="password" name="password" class="form-control" id="" placeholder="Enter Password">
            </div>
            <a href="{{url('/rider/forgot-password')}}">Forgot-password</a>
            <br>
            <a href="{{route('rider.register.form')}}">Dont have account?</a>
            <button type="submit" class="btn btn-primary float-right w-25">Login</button>
        </form>
    </div>
</div>
@endsection