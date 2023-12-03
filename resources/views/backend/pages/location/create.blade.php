@extends ('backend.master')
@section('title', 'Add Location')
@section('content')
    <div class="container">
        <h2>Add Location</h2>

        @if ($errors->any())

            @foreach ($errors->all() as $err)
                <p class="alert alert-danger">{{ $err }}</p>
            @endforeach

        @endif
        <form action="{{route('create.location')}}"  method="POST">
            @csrf
            <div class="form-group">
                <label for="">Name <span class="text-danger">*</span></label>
                <input type="name" name="name" class="form-control" id="" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="">Description </label>
                <textarea name="description" class="form-control" placeholder="Description" id="" cols="5" rows="5"></textarea>
            </div>
            



            <button type="submit" class="btn btn-primary float-right w-25"><i class="fa-solid fa-plus"></i> Add</button>
        </form>
    </div>

@endsection
