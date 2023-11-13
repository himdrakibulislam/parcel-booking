<?php

namespace App\Http\Controllers\website;

use App\Models\sender;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function registration(){
        return view('frontend.pages.auth.registration');
    }
    //do reggg
    public function doRegistration(Request $request){
        // dd($request->all());
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);
        sender::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
        ]);
        return to_route('login');
    }
    public function login ()
    {
        return view('frontend.pages.auth.login');
    }
    public function do_login(Request $request){
        // dd($request->all());
        $credentials=$request->except('_token');
        // dd($credentials);

        if(auth()->attempt($credentials)){

            return to_route('home');
        }
        else {
            return to_route('login');
        }
    }
    public function logout(){
        session()->flush();
        Auth::logout();
        return to_route('home');
    }
}
