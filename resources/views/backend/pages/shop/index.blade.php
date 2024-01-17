@extends ('backend.master')
@section('title', 'Shop')
@section('content')
    <div class="container">
         @if ($errors->any())
            <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
        @endif
         <h3>Shop Information</h3>
            @if (!$shop)
            <form class="row" action="{{route('store.add',0)}}" method="POST">
                @csrf
                <div class="col-md-6">
                    <input type="text" name="name" class="form-control my-2" placeholder="Name">
                    <input type="email" name="email" class="form-control my-2" placeholder="Email">
                    <input type="text" name="phone" class="form-control my-2" placeholder="Phone">
                    
                    <textarea name="address" cols="10" rows="5" class="form-control my-2" placeholder="Address"></textarea>
    
                    <select name="currency" id="" class="form-control my-2">
                        <option value="">Select Currency</option>
                        <option value="&#2547;"> &#2547; BDT</option>
                        <option value="&#36;">&#36;  USD</option>
                        <option value="&#8364;"> &#8364; EURO</option>
                        <option value="&#8377;"> &#8377; RUPEE</option>
                        <option value="&#20803;"> &#20803; YEN</option>
                    </select>
    
                </div>
                <div class="col-md-6">
                    <p>Social </p>
                
                    <input type="url" name="facebook" class="form-control my-2"  placeholder="Facebook">
                    <input type="url" name="twitter"  class="form-control my-2" placeholder="Twitter">
                    <input type="url" name="linkedin" class="form-control my-2"  placeholder="Linkedin">
                    <input type="url" name="instagram" class="form-control my-2"  placeholder="Instagram">
                    <input type="url" name="youtube"  class="form-control my-2" placeholder="Youtube">
    
                    <button class="btn btn-info w-50" type="submit">Add</button>
                </div>
            </form>
            @else 
            <form class="row" action="{{route('store.add',$shop->id)}}" method="POST">
                @csrf
                <div class="col-md-6">
                    <input type="text" value="{{$shop->name}}" name="name" class="form-control my-2" placeholder="Name">
                    <input type="email" value="{{$shop->email}}" name="email" class="form-control my-2" placeholder="Email">
                    <input type="text" value="{{$shop->phone}}" name="phone" class="form-control my-2" placeholder="Phone">
                    
                    <textarea name="address" cols="10" rows="5" class="form-control my-2" placeholder="Address">{{$shop->address}}</textarea>
    
                    <select name="currency" id="" class="form-control my-2">
                        <option value="">Select Currency</option>
                        <option value="&#2547;"> &#2547; BDT</option>
                        <option value="&#36;">&#36;  USD</option>
                        <option value="&#8364;"> &#8364; EURO</option>
                        <option value="&#8377;"> &#8377; RUPEE</option>
                        <option value="&#20803;"> &#20803; YEN</option>
                    </select>
    
                </div>
                <div class="col-md-6">
                    <p>Social </p>
                
                    <input type="url" value="{{$shop->facebook}}" name="facebook" class="form-control my-2"  placeholder="Facebook">
                    <input type="url" value="{{$shop->twitter}}" name="twitter"  class="form-control my-2" placeholder="Twitter">
                    <input type="url" value="{{$shop->linkedin}}" name="linkedin" class="form-control my-2"  placeholder="Linkedin">
                    <input type="url" value="{{$shop->instagram}}" name="instagram" class="form-control my-2"  placeholder="Instagram">
                    <input type="url" value="{{$shop->youtube}}" name="youtube"  class="form-control my-2" placeholder="Youtube">
    
                    <button class="btn btn-info w-50" type="submit">Update</button>
                </div>
            </form>
            @endif
      
    </div>

@endsection
