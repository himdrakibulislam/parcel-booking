<?php

namespace App\Http\Controllers\website;

use App\Models\booking;
use App\Models\category;
use App\Models\showbooking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\weight;

class Booking1Contoller extends Controller
{
    public function booking1 ()
    {
        $categories=category::all();
        $weight=weight::all();
        return view('frontend.pages.service.service',compact('categories','weight'));
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

         booking::create ([

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


         return redirect()->route('booking1')->with ('msg, Date store Successfully');



    }


}
