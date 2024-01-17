<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Rider;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function home()
    {
        $riders = DB::table('riders')->where('is_approved',true)->get();
        $shop =  Cache::get('store');
        if(!$shop){
            $shop = Cache::remember('store', now()->addHours(10), function () {
                return DB::table('store')->first();; 
            });  
        }else{
            $shop = Cache::get('store');
        }
        return view('frontend.pages.home',compact('riders'));
    }
}
