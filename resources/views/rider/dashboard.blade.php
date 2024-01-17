@extends('rider.master')
@section('title','Profile')
    
@section('content')
<div class="content">
   <div class="d-flex justify-content-center">
    <div class="text-center ">
        <h3 class="text-info"> <i class="fas fa-user fa-2x"></i></h3>
        @if (Auth::guard('rider')->user()->is_approved == true)
            <span class="badge bg-info">Approved</span>
            @else
            <small>Pending Approval</small>
        @endif
        <h4>{{Auth::guard('rider')->user()->name}}</h4>
        <h5>{{Auth::guard('rider')->user()->email }}</h5>
        <h5><b>Working Shift -</b> {{Auth::guard('rider')->user()->duty_time }}</h5>
        
    </div>
   </div>
</div>
@endsection