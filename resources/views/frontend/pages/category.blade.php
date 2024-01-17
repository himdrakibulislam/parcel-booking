@extends('frontend.master')
@section('title','Category')
@section('content')
<div class="container my-4">
    <h3 class="text-muted my-4">Categories</h3>
    
    <div class="row">
        @foreach ($categories as $key => $row)        
        <div class="card col-md-4">
            <div class="card-body text-center">
               <h4 class="text-muted"> {{$row->Name}}</h4>
            </div>
        </div>
        @endforeach       
    </div>   
</div>
@endsection
