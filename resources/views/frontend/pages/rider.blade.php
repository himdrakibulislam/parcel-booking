@extends('frontend.master')
@section('title','Rider')
@section('content')

<div class="container">
        <div class="row">
            <div class="col-md-6 mt-4">
                <img src="{{asset('img/rider-home.jpg')}}" class="img-fluid rounded" width="100%" height="90%" alt="">
            </div>
            <div class="col-md-6 mt-4 d-flex align-items-center">
                <div class="text-center">
                    <h3 class="text-muted my-2">Want to be part of {{ env('APP_NAME') }}?</h3>
                    <a href="{{route('rider.register.form')}}" class="btn btn-info">REGISTER AS RIDER</a>
                </div>
            </div>
            
        </div>
</div>
@endsection
