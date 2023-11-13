@extends('frontend.master')
@section('content')

<title>Login</title>

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
    <form action="{{route('sender.store')}}" method="post">
    @csrf
    @if($errors->any())
    @foreach($errors->all() as $err)
    <p class="alert alert-danger">{{$err}}</p>
    @endforeach
    @endif
        <h2 class="text-center">Registration</h2>
        <div class="form-group">
            <input name="Name" type="text" class="form-control" placeholder="Name" required="required">
        </div>
        <div class="form-group">
            <input name="Email" type="text" class="form-control" placeholder="Email" required="required">
        </div>
        <div class="form-group">
            <input name="Password" type="password" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <input name="Contact" type="number" class="form-control" placeholder="Contact" required="required">
        </div>
        <div class="form-group">
            <input name="Address" type="text" class="form-control" placeholder="Address" required="required">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Registration</button>
        </div>
            <p>Already have account??<a href="#" class="float-right btn btn-success">Login</a></p>
    </form>

</div>
</body>
@endsection
