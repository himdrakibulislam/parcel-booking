@extends('frontend.master')
@section('title','Reset Password')
@section('content')

<style>
.login-form {
    width: 340px;
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
.form-control, .btn {
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
    <form action="{{route('password.email')}}" method="POST">
        @csrf
    @if($errors->any())

    @foreach($errors->all() as $err)
    <p class="alert alert-danger">{{$err}}</p>
    @endforeach

    @endif


        <h2 class="text-center">Forgot Password</h2>
        <div class="form-group">
            <input name="email"
            value="{{old('email')}}"
            type="email" class="form-control" placeholder="Email" required="required">
        </div>
        
        
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Reset Password</button>
        </div>
       
    </form> 

</div>
</body>
@endsection
