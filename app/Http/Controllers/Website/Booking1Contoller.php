<?php

namespace App\Http\Controllers\website;

use App\Models\booking;
use App\Models\category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Location;
use App\Models\Rider;
use App\Models\weight;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class Booking1Contoller extends Controller
{
    public function booking1()
    {
        $categories = category::all();
        $weight = weight::all();
        $user = Auth::user();
        // $rider = Rider::inRandomOrder()->take(1)->first();
        $rider = Rider::all();
        $location = Location::all();
        return view('frontend.pages.booking.booknow', compact('categories', 'weight', 'user', 'rider','location'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'rider_id'   => 'required',
            'sender_name'   => 'required',
            'sender_email'  => 'required',
            'sender_contact'  => 'required',
            'sender_location'  => 'required',
            'sender_address'  => 'required',

            'receiver_name'  => 'required',
            'receiver_email'  => 'required',
            'receiver_contact'  => 'required',
            'receiver_location'  => 'required',
            'receiver_address'  => 'required',

            'quantity'  => 'required',

            'category_type'  => 'required',
            'weight_range'  => 'required',
        ]);

      $booking =  booking::create([
            'booking_id' => 'SC' . rand(111111, 999999),
            'user_id' => Auth::user()->id,
            'rider_id' => $request->rider_id,
            'status' => 'draft',
            'viewing_pin' => rand(1111, 9999),
            'vehicle_type' => $request->vehicle_type,
            'sender_name' => $request->sender_name,
            'sender_email' => $request->sender_email,
            'sender_contact' => $request->sender_contact,
            'sender_location' => $request->sender_location,
            'sender_address' => $request->sender_address,
            'receiver_name' => $request->receiver_name,
            'receiver_email' => $request->receiver_email,
            'receiver_contact' => $request->receiver_contact,
            'receiver_location' => $request->receiver_location,
            'receiver_address' => $request->receiver_address,
            'quantity' => $request->quantity,
            'special_package' => $request->special_package ? TRUE : FALSE,
            'description' => $request->description,
            'date' => $request->date,
            'category_type' => $request->category_type,
            'weight_range' => $request->weight_range,
            'price' => $request->price,
            'vehicle' => $request->vehicle,

            'time_slot' => $request->time_slot,
        ]);


        return redirect('/booking/pay?booking_id='.$booking->id);
    }

    public function mybookings(){
        $userId = Auth::user()->id;
        $my_bookings = booking::orderBy('id','DESC')->where('user_id',$userId)->paginate(10);
        return view('frontend.pages.auth.mybookings',compact('my_bookings'));
    }
    public function pay(Request $request){

        $booking_id = $request->query('booking_id');
        $user_id = Auth::user()->id;

        $booking  = booking::whereId($booking_id)->where('user_id',$user_id)->first();

        if($booking){

            return view('frontend.pages.booking.pay',compact('booking'));
        }else{
            return "Booking Information Not Found";
        }
    }
    public function condition(Request $request){

        $booking_id = $request->booking_id;
        $user_id = Auth::user()->id;

        $booking  = booking::whereId($booking_id)->where('user_id',$user_id)->first();

        if($booking){
            $booking->status = 'pending';
            $booking->payment_type = 'Cash-On-Delivery';
            $booking->update();
            return redirect('/')->with('status','Your booking is successfull.');
        }else{
            return "Booking Information Not Found";
        }
    }
    public function tracking(int $id){
        $user_id = Auth::user()->id;

        $booking  = booking::whereId($id)->where('user_id',$user_id)->first();
        if($booking){
            
            return view('frontend.pages.booking.tracking',compact('booking'));
        }        
    }

    public function receiverview(Request $request){
        $token = $request->query('token');
        $receiver_email = $request->query('receiver_email');
        $pin = Crypt::decryptString($token);
        $booking = booking::where('receiver_email',$receiver_email)
        ->where('viewing_pin',$pin)
        ->first();
        
        if($booking){
            return view('frontend.pages.booking.receiver',compact('booking'));
        }else{
            return "Booking Info Not Found";
        }
       
    }

    public function download_booking(int $id){
        $courier = booking::findOrFail($id);
        if($courier){
            $pdf = PDF::loadView('frontend.pages.booking.invoice', compact('courier'));

            return $pdf->download('invoice.pdf');
        }
    }
}
