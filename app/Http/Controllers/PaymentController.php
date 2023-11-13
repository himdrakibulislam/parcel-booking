<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
class PaymentController extends Controller
{
    public function payment()
    {
        $payment=Payment::paginate(5);
        return view('backend.pages.payment.payment',compact('payment'));
    }
    public function submit()
    {
        return view('backend.pages.payment.submit');
    }

    public function store(Request $request)
               
    {
    //    dd($request->all());
        $request->validate([
            'receiver_name'=>'required',
            'receiver_contact_number'=>'required',
            'receiver_address'=>'required',
            'shipment_receive_date'=>'required',
            'shipment_receive_time'=>'required',
            'shipment_weight'=>'required',
            'shipment_price'=>'required',


         ]);


         Payment::create ([

            //datebase colomn name(left) = input field (right)

            'receiver_name'=>$request->receiver_name,
            'receiver_contact_number'=>$request->receiver_contact_number,
            'receiver_address'=>$request->receiver_address,
            'shipment_receive_date'=>$request->shipment_receive_date,
            'shipment_receive_time'=>$request->shipment_receive_time,
            'shipment_weight'=>$request->shipment_weight,
            'shipment_price'=>$request->shipment_price,
           

         ]);

         return redirect()->route('payment')->with ('msg, Date store Successfully');

       
    } 

    
}
