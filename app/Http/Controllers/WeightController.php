<?php

namespace App\Http\Controllers;


use App\Models\Weight;
use Illuminate\Http\Request;

class WeightController extends Controller
{
    public function weight()
    {

        $weight = Weight::paginate(10);
        return view('backend.pages.weight.weight', compact('weight'));
    }
    public function agreed()
    {
        return view('backend.pages.weight.agreed');
    }
    public function weightStore(Request $request)
    {
        $request->validate([
            'Weight_range' => 'required',
            'Price' => 'required',
        ]);
        Weight::create([
            'Weight_range' => $request->Weight_range,
            'Price' => $request->Price,
        ]);

        return redirect()->route('weight')->with('msg, Date store Successfully');
    }
    public function edit(int $id){
        $weight = Weight::findOrFail($id);
        return view('backend.pages.weight.edit',compact('weight'));
    }
    public function update(Request $request,int $id){
        $request->validate([
            'Weight_range' => 'required',
            'Price' => 'required',
        ]);
        Weight::whereId($id)->update([
            'Weight_range' => $request->Weight_range,
            'Price' => $request->Price,
        ]);

        return redirect()->route('weight')->with('status','Weight updated Successfully');
    }
    public function delete_weight(int $id){
        Weight::destroy($id);
        return redirect()->route('weight')->with('status','Weight removed Successfully');
    }
}
