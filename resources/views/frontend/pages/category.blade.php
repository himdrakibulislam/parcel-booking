@extends('frontend.master')
@section('title','Category')
@section('content')
<div class="container my-4">
    <h3 class="text-center">Categories</h3>
    
    <table class="table">
        <thead>
            <tr>
                <th >#</th>
                <th >Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $key => $row)
            <tr>
                <td>{{$key+1}}</td>
                <td><b>{{$row->Name}}</b></td>
            </tr>
            @endforeach           
        </tbody>
    </table>
</div>
@endsection
