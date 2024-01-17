@extends('frontend.master')
@section('title','Forgot Password')
@section('content')

<div class="container py-2">
    @if ($errors->any())

        @foreach ($errors->all() as $err)
            <p class="alert alert-danger">{{ $err }}</p>
        @endforeach

    @endif
    <div class="row">
        <form class="col-lg-6 mx-lg-auto shadow py-2" action="{{ route('rider.forgotpassword') }}" method="POST">
            @csrf
           
            <div class="form-group">
                <label for="">Email <span class="text-danger">*</span></label>
                <input type="name" value="{{old('email')}}"  name="email" class="form-control" id="" placeholder="Enter Email" required>
            </div>
            
            <button type="submit" class="btn btn-primary float-right ">Reset Password</button>
        </form>
    </div>
</div>
@endsection