<?php

namespace App\Http\Controllers\website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\ProcessImage;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use ProcessImage;
    public function registration()
    {
        return view('frontend.pages.auth.registration');
    }

    public function login()
    {
        return view('frontend.pages.auth.login');
    }
    public function change_password()
    {
        return view('frontend.pages.auth.change-password');
    }
    public function profile()
    {
        return view('frontend.pages.auth.profile');
    }
    public function update_profile(Request $request)
    {

        // $request->validate([
        //     'profile' => 'dimensions:width=200,height=200'
        // ]);
        $data = [];
        $data['contact'] = $request->contact;
        $data['address'] = $request->address;
        if ($request->hasFile('profile')) {
            $data['profile'] = $this->upload_without_modify($request->profile, 'uploads/user/', $request->user()->profile);
        }

        $request->user()->update($data);
        return redirect()->back();
    }

    public function logout()
    {
        
        Auth::logout();
        return to_route('home');
    }
}
