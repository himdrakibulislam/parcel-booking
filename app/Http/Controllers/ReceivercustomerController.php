<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receiver;

class ReceivercustomerController extends Controller
{
    public function receiver()
    {
        $receiver=Receiver::paginate(5);

        return view('backend.pages.receiver.receiver',compact ('receiver'));
    }

    public function accept()
    {
        return view ('backend.pages.receiver.accept');
    }
    
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'contact'=>'required',
            'Country'=>'required',
            'address'=>'required',
            'City_State'=>'required',
            
        ]);

        Receiver::create ([
            'name'=>$request->name,
            'email'=>$request->email,
            'contact'=>$request->contact,
            'country'=>$request->Country,
            'address'=>$request->address,
            'city'=>$request->City_State,

        ]);
        return redirect()->route('receiver')->with ('msg, Date store Successfully');
    
        
    }
}
