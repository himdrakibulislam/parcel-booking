<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\weight;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function price(){
        $weight = weight::all();
        return view('frontend.price',compact('weight'));
    }
    public function contact(){
        return view('frontend.contact');
    }
}
