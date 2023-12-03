<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Rider;
use Illuminate\Http\Request;

class RiderController extends Controller
{
    public function rider()
    {
        $riders = Rider::paginate(10);
        return view('backend.pages.rider.rider', compact('riders'));
    }

    public function create()
    {
        return view('backend.pages.rider.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'duty_time' => 'required',
          
        ]);
        Rider::create($request->all());
        return redirect()->route('rider')->with('status','Rider store Successfully');
    }
    public function edit(int $id){
       $rider =  Rider::findOrFail($id);
        return view('backend.pages.rider.edit',compact('rider'));
    }
    public function update(Request $request,int $id){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'duty_time' => 'required',
        ]);
        Rider::whereId($id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'duty_time' => $request->duty_time
        ]);
        return redirect()->route('rider')->with('status','Rider updated Successfully');
       
    }
    public function delete_rider(int $id){
        Rider::destroy($id);
        return redirect()->route('rider')->with('status','Rider Removed');
    }
}
