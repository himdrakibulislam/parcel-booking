<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
class BookingController extends Controller
{
    public function booking()
    {
        $booking=Booking::paginate(5);
        return view('backend.pages.booking.booking',compact('booking'));
    }
    public function accept()
    {
        return view ('backend.pages.booking.accept');
    }
    public function store(Request $request)
    {
        $request->validate([
            'sender_name'=>'required',
            'sender_email'=>'required',
            'sender_contact'=>'required',
            'sender_address'=>'required',

            'receiver_name'=>'required',
            'receiver_email'=>'required',
            'receiver_contact'=>'required',
            'receiver_address'=>'required',

            'quantity'=>'required',
            'description'=>'required',
            'date'=>'required',
            'Category_type'=>'required',
            'weight_range'=>'required',
            'price'=>'required',

        ]);

         Booking::create ([

            //datebase colomn name(left) = input field (right)

            'sender_name'=>$request->sender_name,
            'sender_email'=>$request->sender_email,
            'sender_contact'=>$request->sender_contact,
            'sender_address'=>$request->sender_address,

            'receiver_name'=>$request->receiver_name,
            'receiver_email'=>$request->receiver_email,
            'receiver_contact'=>$request->receiver_contact,
            'receiver_address'=>$request->receiver_address,

            'quantity'=>$request->quantity,
            'description'=>$request->description,
            'date'=>$request->date,
            'Category_type'=>$request->Category_type,
            'weight_range'=>$request->weight_range,
            'price'=>$request->price,



         ]);

         return redirect()->route('booking')->with ('msg, Date store Successfully');


    }


}
