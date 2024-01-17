<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Rider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class RiderController extends Controller
{
    
    public function dashboard()
    {
        return view('rider.dashboard');
    }
    
    public function register_form()
    {
        return view('rider.auth.register');
    }
    public function login_form()
    {
        return view('rider.auth.login');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        
        if (Auth::guard('rider')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('rider.dashboard');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function register(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:riders',
            'duty_time' => 'required',
            'password' => 'required|confirmed',
        ]);

        $rider = Rider::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'duty_time' => $request->duty_time,
            'ip' => $request->ip(),
            'password' => Hash::make($request->password),
        ]);
        Auth::guard('rider')->login($rider);

        return redirect()->route('rider.dashboard');
    }

    public function logout(){
        Auth::guard('rider')->logout();
        return redirect()->route('rider.login.form');
    }
    // admin
    public function rider()
    {
        $riders = DB::table('riders')->paginate(10);
        return view('backend.pages.rider.rider', compact('riders'));
    }
    public function rider_approve(int $id)
    {
        $riders = DB::table('riders')
        ->where('id',$id)
        ->update(['is_approved' => true]);

        return redirect()->route('admin.rider')->with('status','Rider Approved.');
        
    }

    public function delete_rider(int $id){
        DB::table('riders')->where('id',$id)->delete();
        return redirect()->route('admin.rider')->with('status','Rider Removed');
    }
}
