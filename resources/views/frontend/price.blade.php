@extends('frontend.master')
@section('title','Prices')
@section('content')
<div class="container my-4">
    <h3 class="text-center">Price</h3>
    
    <table class="table">
        <thead>
            <tr>
                <th >Weight Range</th>
                <th >Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($weight as $row)
            <tr>
                <td><b>{{$row->Weight_range}}</b></td>
                <td>{!!env('CURRENCY')!!}{{$row->Price}}</td>
            </tr>
            @endforeach           
        </tbody>
    </table>
</div>
@endsection
