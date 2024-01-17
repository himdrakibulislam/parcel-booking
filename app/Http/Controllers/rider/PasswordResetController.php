<?php

namespace App\Http\Controllers\rider;

use App\Http\Controllers\Controller;
use App\Models\Rider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use App\Mail\AllMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Auth\Events\PasswordReset;

class PasswordResetController extends Controller
{
   

    public function create(){
        return view('rider.auth.forgot-password');
    }
    public function send_url(Request $request){
       
         $request->validate(['email' => 'required|email|exists:riders']);
         $rider = Rider::where('email',$request->email)->first();
         if($rider){
            $token = Password::createToken($rider);
            $base_url = url("/");
            $email = $rider->email;
            $reset_url = $base_url.'/'.'rider/reset-password/'.$token.'?email='.$email;
            $data = [];
            $title = 'Reset Password';
            $content = "<div class='my-5'>
            <h3>Please reset password from the below link</h3>
            <a href='$reset_url'>Reset Password</a>
            
            If you're having trouble clicking 
            the 'Reset Password' button, 
            copy and paste the URL below 
            into your web browser: $reset_url
            </div>";

            $data['content'] = $content;
            $data['title'] = $title;

            Mail::to($email)->send(new AllMail($data));
            return redirect()->back()->with('status','Password Reset Link has Been Sent To Your Email.');
         }      
    }

    public function reset(Request $request){
        return view('rider.auth.reset-password',['request' => $request]);
    }
    public function store(Request $request){
        $request->validate([
            'token' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed'],
        ]);

      
        $status = Password::broker('riders')->reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user) use ($request) {
                $user->forceFill([
                    'password' => Hash::make($request->password),
                ])->save();

                event(new PasswordReset($user));
            }
        );

        // If the password was successfully reset, we will redirect the user back to
        // the application's home authenticated view. If there is an error we can
        // redirect them back to where they came from with their error message.
        return $status == Password::PASSWORD_RESET
                    ? redirect()->route('rider.login.form')->with('status', __($status))
                    : back()->withInput($request->only('email'))
                            ->withErrors(['email' => __($status)]);
    }

    public function security(){
        return view('rider.auth.change-password');
    }
    public function change_password(Request $request){
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed|min:8',
        ]);
        #Match The Old Password
        if (!Hash::check($request->old_password, auth()->guard('admin')->user()->password)) {
            return redirect()->back()->withErrors("status", "Old Password Doesn't match!");
        }

        #Update the new Password
        Rider::whereId(auth()->guard('rider')->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return redirect()->back()->with(
            "status",
            "Password changed successfully!"
        );
    }
}
