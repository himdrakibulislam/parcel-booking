<?php

namespace App\Http\Controllers;


use App\Models\Weight;
use Illuminate\Http\Request;

class WeightController extends Controller
{
    public function weight(){
        //  dd($weight->all());
         $weight=Weight::paginate(5);
        return view('backend.pages.weight.weight',compact('weight'));

    }
    public function agreed()
    {
        return view('backend.pages.weight.agreed');
    }
    public function weightStore(Request $request)

    {
    //    dd($request->all());


    Weight::create([
        'Weight_range'=>$request->Weight_range,
        'Price'=>$request->Price,
    ]);

    return redirect()->route('weight')->with ('msg, Date store Successfully');


}


}



