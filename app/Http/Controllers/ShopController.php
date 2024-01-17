<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ShopController extends Controller
{
    public function shop(){
        $shop = DB::table('store')->first();
        return view('backend.pages.shop.index',compact('shop'));
    }
    public function store(Request $request,int $id){
        $shop = DB::table('store')->count();
        if($shop == 0){
             DB::table('store')->insert([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'currency' => $request->currency,
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'linkedin' => $request->linkedin,
                'instagram' => $request->instagram,
                'youtube' => $request->youtube,
            ]);
            return redirect()->back()->with('status','Shop Added.');
        }else{
             DB::table('store')
             ->where('id',$id)
             ->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'currency' => $request->currency,
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'linkedin' => $request->linkedin,
                'instagram' => $request->instagram,
                'youtube' => $request->youtube,
             ]);
             return redirect()->back()->with('status','Shop Updated.');
        }
    }
    
}
