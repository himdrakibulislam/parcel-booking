@extends('frontend.master')
@section('title','Reset Password')
@section('content')

<div class="container py-2">
    @if ($errors->any())

        @foreach ($errors->all() as $err)
            <p class="alert alert-danger">{{ $err }}</p>
        @endforeach

    @endif
    <div class="row">
        <form class="col-lg-6 mx-lg-auto shadow py-2" action="{{ route('rider.resetpassword') }}" method="POST">
            @csrf
            <input type="hidden" name="token" value="{{ $request->route('token') }}">
            <div class="form-group">
                <input name="email"
                value="{{$request->email}}"
                type="email" class="form-control" placeholder="Email" required="required">
            </div>
            
        
            <div class="form-group">
                <input name="password"
                type="password" class="form-control" placeholder="Password" required="required">
            </div>
            <div class="form-group">
                <input name="password_confirmation"
                type="password" class="form-control" placeholder="Password confirmation" required="required">
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg btn-block">Submit</button>
            </div>           
        </form>
    </div>
</div>
@endsection