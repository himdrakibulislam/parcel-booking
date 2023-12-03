<?php

namespace App\Http\Controllers;

use App\Mail\AllMail;
use App\Models\booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    public function booking()
    {
        $booking= booking::orderBy('id','DESC')->paginate(5);
        return view('backend.pages.booking.booking',compact('booking'));
    }
    public function get_booking(int $id)
    {
        $booking= booking::findOrFail($id);
        return view('backend.pages.booking.view',compact('booking'));
    }
    public function update_booking(Request $request,int $id)
    {
        $booking= booking::findOrFail($id);
        $booking->status = $request->status;
        $booking->update();

        return redirect()->back()->with('status','Status Updated');
    }
    public function confirm_booking(int $id)
    {
        $booking= booking::findOrFail($id);
        $token = Crypt::encryptString($booking->viewing_pin);
        $url = url("/").'/booking/view/receiver?receiver_email='.$booking->receiver_email.'&&token='.$token;

        $booking->is_confirm = TRUE; 
        $booking->update();
        $data = [];
        $data['title'] = "A parcel has been booked to your address";
        $data['content'] = "
        From, 
        <br>
        {$booking->sender_name}
        <br>
        {$booking->sender_email}
        <br>
        {$booking->sender_contact}
        <br>
        {$booking->sender_address}
        <br>
        <h3>To Track the parcel </h3>
        <a href='{$url}'>{$url}</a>";
        
        Mail::to($booking->receiver_email)->send(new AllMail($data));
        return redirect()->back()->with('status','Booking confirm');
    }
    public function delete_booking(int $id)
    {
         booking::destroy($id);
        return redirect()->route('admin.booking')->with('status','Booking Removed');
    }
    
}
