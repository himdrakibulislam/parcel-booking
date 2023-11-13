@extends('frontend.master')


@section('content')

<h1> Booking information (Select your Packages type) </h1>

<div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    <label class="form-check-label" for="flexRadioDefault1">
      Commercial items
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
    <label class="form-check-label" for="flexRadioDefault2">
      Gifts/Home accessorics
    </label>
  </div>



<button type="button" class="btn btn-secondary btn-sm">Submit</button>






  </div>








@endsection
