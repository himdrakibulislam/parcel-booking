<?php

namespace App\Http\Controllers;

use Faker\Guesser\Name ;
use App\Models\Sender;
use Illuminate\Http\Request;

class SendercustomerController extends Controller
{
    public function sender()
    {
        $sender=Sender::paginate(5);

        return view ('backend.pages.sender.sender',compact ('sender'));

    }

    public function submit()
    {
        return view('backend.pages.sender.submit');
    }
    public function store(Request $request)

    {

        $request->validate([
            'Name'=>'required',
            'Email'=>'required|email',
            'Password'=>'required',
            'Contact'=>'required',
            'Address'=>'required',

         ]);


         Sender::create ([

            //datebase colomn name(left) = input field (right)

            'Name'=>$request->Name,
            'Email'=>$request->Email,
            'Password'=>$request->Password,
            'Contact'=>$request->Contact,
            'Address'=>$request->Address,

         ]);

         return to_route('sender')->with ('msg, Date store Successfully');


    }

}
