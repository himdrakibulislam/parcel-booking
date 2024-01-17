<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class DashboardController extends Controller
{
    public function dashboard(){
        $totalrevenue = booking::where('is_confirm',true)->sum('price');
        $totalbooking = booking::count();
        $customers = User::count();

        $latestbookings = booking::latest()->take(10)->get();
        
        return view('backend.pages.dashboard.home',compact('totalrevenue','totalbooking','customers','latestbookings'));
    }
    public function optimize(){
        Artisan::call('optimize:clear');
        return redirect()->back()->with('status','Server Cache Cleared Successfully!');
    }
}
