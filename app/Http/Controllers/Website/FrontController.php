<?php

namespace App\Http\Controllers\Website;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\weight;
use App\Models\booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class FrontController extends Controller
{
    public function price(){
        $weight = weight::all();
        return view('frontend.price',compact('weight'));
    }
    public function category(){
        $categories = category::all();
        return view('frontend.pages.category',compact('categories'));
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function rider(){
        return view('frontend.pages.rider');
    }
    public function search_booking(Request $request){
        $request->validate(['tracking_id' => 'required']);
        $tracking_id = $request->tracking_id;

        $booking = booking::where('booking_id',$tracking_id)->first();
        if(!$booking){
            return redirect()->back()->with('status','Invalid Tracking ID.');
        }
        if(!$booking->is_confirm){
            return redirect()->back()->with('status','Booking is not confirmed. Please wait for confirmation.');
        }
        $token = Crypt::encryptString($booking->viewing_pin);
        $url = url("/").'/booking/view/receiver?receiver_email='.$booking->receiver_email.'&&token='.$token;
        return redirect($url);
    }
    public function contact_us(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        DB::table('contactus')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'description' => $request->message,
            'ip' => $request->ip(),
        ]);
        return redirect()->back()->with('status','Your contact has been sent.');
    }
    
}
