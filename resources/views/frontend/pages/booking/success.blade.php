@extends('frontend.master')
@section('title', 'Payment Successful')
@section('content')
    <div class="container">
      <div class="text-center my-5">
        <h3>Payment Successful</h3>
        <h5>Thank you</h5>
        <a href="{{url('/')}}" class="btn btn-success btn-sm">Home</a>
      </div>
    </div>
@endsection
