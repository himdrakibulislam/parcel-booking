<?php

namespace App\Http\Controllers;
use App\Models\Shipment;
use Illuminate\Http\Request;

class ShipmentController extends Controller
{
    public function shipment()
    {
        $shipments= Shipment::all();
        return view('backend.pages.shipment.shipment',compact('shipments'));
    }

    public function sendera()

    {
        return view('backend.pages.shipment.sendera');
    }
    public function store(Request $request)
    {
         $request->validate([
            'Sender_name'=>'required',
            'Receiver_name'=>'required',
            'From'=>'required',
            'To'=>'required',
            'Date'=>'required',
            'Payment'=>'required',
            'Booking_ID'=>'required',


             ]);

              Shipment::create ([
                //datebase colomn name(left) = input field (right)
                 'Sender_name'=>$request->Sender_name,
                 'Receiver_name'=>$request->Receiver_name,
                 'From'=>$request->From,
                'To'=>$request->To,
                 'Date'=>$request->Date,
                 'Payment'=>$request->Payment,
                 'Booking_ID'=>$request->Booking_ID,
 ]);
 return redirect()->route('shipment')->with ('msg, Date store Successfully');



    }


}
