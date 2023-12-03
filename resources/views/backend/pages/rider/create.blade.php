@extends ('backend.master')
@section('title', 'Add Rider')
@section('content')
    <div class="container">
        <h2>Create Rider</h2>

        @if ($errors->any())

            @foreach ($errors->all() as $err)
                <p class="alert alert-danger">{{ $err }}</p>
            @endforeach

        @endif
        <form action="{{ route('create.rider') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="">Name <span class="text-danger">*</span></label>
                <input type="name" name="name" class="form-control" id="" placeholder="Enter Name" required>
            </div>
            <div class="form-group">
                <label for="">Email <span class="text-danger">*</span></label>
                <input type="name" name="email" class="form-control" id="" placeholder="Enter Email" required>
            </div>
            <div class="form-group">
                <label for="">Phone </label>
                <input type="name" name="phone" class="form-control" id="" placeholder="Enter Phone Number">
            </div>
            <label for="">Duty Time
                <span class="text-danger">*</span>
            </label>

            <div class="form-group">
                <select name="duty_time" class="form-control" id="" required>
                    <option value="">------Select Duty time----</option>
                    <option value="09AM-3PM">
                        09 AM - 3PM
                    </option>
                    <option value="3PM-9PM">
                         3PM - 9AM
                    </option>
                </select>
            </div>




            <button type="submit" class="btn btn-primary float-right w-25"><i class="fa-solid fa-plus"></i> Add</button>
        </form>
    </div>

@endsection
