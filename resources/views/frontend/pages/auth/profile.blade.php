@extends('frontend.master')
@section('content')

    <title>Profile</title>

    <style>
        .login-form {
            width: 440px;
            margin: 50px auto;
            font-size: 15px;
        }

        .login-form form {
            margin-bottom: 15px;
            background: #f7f7f7;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }

        .login-form h2 {
            margin: 0 0 15px;
        }

        .form-control,
        .btn {
            min-height: 38px;
            border-radius: 2px;
        }

        .btn {
            font-size: 15px;
            font-weight: bold;
        }
    </style>

    <body>
        <div class="login-form">
            <div class="text-center mb-4">

                <img id="preview" class="mb-2 img-profile rounded-circle"
                    src="{{ asset(Auth::user()->profile ? Auth::user()->profile : 'frontend/assets/img/user.png') }}"
                    width="100" height="100">
                <h3>{{ AUth::user()->name }}</h3>
                <p>{{ AUth::user()->email }}</p>

            </div>
            <form enctype="multipart/form-data" action="{{ url('update-profile') }}" method="POST">
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
                    <input name="contact" value="{{ Auth::user()->contact }}" type="number" class="form-control"
                        placeholder="Contact" required="required">
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="address" id="" placeholder="Address" cols="10" rows="5">{{ Auth::user()->address }}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-lg btn-block">Update</button>
                </div>

            </form>

        </div>
    </body>
@endsection
