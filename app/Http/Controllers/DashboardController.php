<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $totalrevenue = booking::where('is_confirm',true)->sum('price');
        $totalbooking = booking::count();
        $customers = User::count();

        $latestbookings = booking::latest()->take(10)->get();
        
        return view('backend.pages.dashboard.home',compact('totalrevenue','totalbooking','customers','latestbookings'));
    }
}
