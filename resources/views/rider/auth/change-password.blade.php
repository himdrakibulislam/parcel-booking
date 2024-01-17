@extends('rider.master')
@section('title','Security')
@section('content')

<div class="container py-2">
    @if ($errors->any())

        @foreach ($errors->all() as $err)
            <p class="alert alert-danger">{{ $err }}</p>
        @endforeach

    @endif
    <div class="row ">
        <form class="col-lg-6 mx-lg-auto bg-secondary rounded shadow py-2" action="{{ route('rider.change.password') }}" method="POST">
            @csrf
            
                      

            <div class="form-group">
                <label for="">Old Password <span class="text-danger">*</span> </label>
                <input type="password" name="old_password" class="form-control" id="" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <label for="">New Password <span class="text-danger">*</span> </label>
                <input type="password" name="new_password" class="form-control" id="" placeholder="Enter Password">
            </div>
    
            <div class="form-group">
                <label for="">New Password Confirmation <span class="text-danger">*</span></label>
                <input type="password" name="new_password_confirmation" class="form-control" id="" placeholder="Enter Password">
            </div>
           
            <button type="submit" class="btn btn-primary float-right w-25"> Register</button>
        </form>
    </div>
</div>
@endsection