@extends('backend.master')
@section('title', 'Admins')

@section('content')
    <div class="container">
        <div class="login-form">
            <div class="text-center mb-4">

                <img id="preview" class="my-4 img-profile rounded-circle"
                    src="{{ asset(Auth::guard('admin')->user()->photo ? Auth::guard('admin')->user()->photo : 'frontend/assets/img/user.png') }}"
                    width="60" height="60">
                <h3>{{ AUth::guard('admin')->user()->name }}</h3>
                <p>{{ AUth::guard('admin')->user()->email }}</p>

            </div>
            <form enctype="multipart/form-data" action="{{ url('admin/change-profile') }}" method="POST">
                @csrf
                @if ($errors->any())
                    @foreach ($errors->all() as $err)
                        <p class="alert alert-danger">{{ $err }}</p>
                    @endforeach
                @endif

                <div class="form-group">
                    <label for="profile">Profile (200 /200)</label>
                    <input onchange="loadFile(event)" class="form-control" type="file" name="profile" id="">
                </div>
                
                
                <div class="form-group">
                    <button type="submit" class="w-25 btn btn-success btn-lg btn-block btn-sm">Update</button>
                </div>

            </form>

        </div>
    </div>

@endsection
@push('custom-script')
<script>
    var loadFile = function(event,width,height) {
	var previewImage = document.getElementById('preview');
	previewImage.src = URL.createObjectURL(event.target.files[0]);
	if(height){

		previewImage.height = height ;
	}
	if(width){

		previewImage.width = width ;
	}

	
};
</script>
@endpush