<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Rider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $riders = Rider::all();
        return view('frontend.pages.home',compact('riders'));
    }
}
