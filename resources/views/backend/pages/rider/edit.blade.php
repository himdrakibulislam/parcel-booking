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
        <form action="{{route('update.rider',$rider->id)}}"  method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="">Name <span class="text-danger">*</span></label>
                <input type="name" 
                 value="{{$rider->name}}"
                name="name" class="form-control" id="" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="">Email <span class="text-danger">*</span></label>
                <input type="email" 
                value="{{$rider->email}}"
                name="email" class="form-control" id="" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label for="">Phone </label>
                <input type="name" 
                value="{{$rider->phone}}"
                name="phone" class="form-control" id="" placeholder="Enter Phone Number">
            </div>
            <label for="">Duty Time
                <span class="text-danger">*</span>
            </label>
            <div class="form-group">
                <select name="duty_time" class="form-control" id="" required>
                    <option value="">------Select Duty time----</option>
                    <option @if ($rider->duty_time == '09AM-3PM')
                        @selected(true)
                    @endif value="09AM-3PM">
                        09 AM - 3PM
                    </option>
                    <option @if($rider->duty_time == '3PM-9PM')
                        @selected(true)
                    @endif value="3PM-9PM">
                         3PM - 9AM
                    </option>
                </select>
            </div>


            <button type="submit" class="btn btn-primary float-right w-25">Update</button>
        </form>
    </div>

@endsection
