@extends ('backend.master')
@section('title', 'Edit Rider')
@section('content')
    <div class="container">
        <h2>Edit Rider</h2>

        @if ($errors->any())

            @foreach ($errors->all() as $err)
                <p class="alert alert-danger">{{ $err }}</p>
            @endforeach

        @endif
        <form action="{{route('update.location',$location->id)}}"  method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="">Name <span class="text-danger">*</span></label>
                <input type="name" 
                 value="{{$location->name}}"
                name="name" class="form-control" id="" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="">Description </label>
                <textarea name="description" class="form-control"
            
                placeholder="Description" id="" cols="5" rows="5">{{$location->description}}</textarea>
            </div>

            <button type="submit" class="btn btn-primary float-right w-25">Update</button>
        </form>
    </div>

@endsection
