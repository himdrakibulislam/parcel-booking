<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\weight;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function price(){
        $weight = weight::all();
        return view('frontend.price',compact('weight'));
    }
    public function category(){
        $categories = category::all();
        return view('frontend.pages.category',compact('categories'));
    }
    public function contact(){
        return view('frontend.contact');
    }
}
