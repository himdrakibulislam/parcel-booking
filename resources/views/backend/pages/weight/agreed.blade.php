@extends ('backend.master')
@section('title', 'Add Weight')
@section('content')
    <div class="container">
        <h2>Add Weight </h2>

        @if($errors->any())

        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{$err}}</p>
        @endforeach
  
        @endif
        <form action="{{ route('weight.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Weight range</label>
                <input type="text" name="Weight_range" class="form-control" id="" placeholder="Enter Weight_range">
            </div>
            <div class="form-group">
                <label for="">Price  {!!env('CURRENCY')!!} </label>
                <input type="text" name="Price" class="form-control" id="" placeholder="Price">
            </div>
             
            <button type="submit" class="btn btn-primary w-25">Submit</button>
        </form>
    </div>

@endsection
