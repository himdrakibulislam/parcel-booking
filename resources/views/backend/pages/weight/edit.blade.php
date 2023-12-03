@extends ('backend.master')
@section('title', 'Edit Weight')
@section('content')
    <div class="container">
        <h2>Edit Weight </h2>

        @if($errors->any())

        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{$err}}</p>
        @endforeach
  
        @endif
        <form action="{{ route('weight.update',$weight->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="">Weight range</label>
                <input type="text"
                value="{{$weight->Weight_range}}"
                name="Weight_range" class="form-control" id="" placeholder="Enter Weight_range">
            </div>
            <div class="form-group">
                <label for="">Price  {!!env('CURRENCY')!!} </label>
                <input type="text"
                value="{{$weight->Price}}"
                name="Price" class="form-control" id="" placeholder="Price">
            </div>
             
            <button type="submit" class="btn btn-primary w-25">Submit</button>
        </form>
    </div>

@endsection
