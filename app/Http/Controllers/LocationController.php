<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function location()
    {
        $location = Location::paginate(10);
        return view('backend.pages.location.location', compact('location'));
    }

    public function create()
    {
        return view('backend.pages.location.create');
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            
        ]);
        Location::create($request->all());
        return redirect()->route('location')->with('status','Location store Successfully');
    }
    public function edit(int $id){
       $location =  Location::findOrFail($id);
        return view('backend.pages.location.edit',compact('location'));
    }
    public function update(Request $request,int $id){
        $request->validate([
            'name' => 'required'
        ]);
        Location::whereId($id)->update([
            'name' => $request->name,
            'description' => $request->description
        ]);
        return redirect()->route('location')->with('status','Location updated Successfully');
       
    }
    public function delete_location(int $id){
        Location::destroy($id);
        return redirect()->route('location')->with('status','Rider Removed');
    }
}
