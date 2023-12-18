<?php

namespace App\Http\Controllers;

use App\Models\booking;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function report()
    {
        $lastSevenDaysBookings = booking::where('created_at', '>=', Carbon::now()->subDays(7))
            ->paginate(10);
        $lastSevenDaysBookingsCount = booking::where('created_at', '>=', Carbon::now()->subDays(7))
            ->count();
        return view('backend.pages.report.report',compact('lastSevenDaysBookings','lastSevenDaysBookingsCount'));
    }
    public function report_staus_wise(Request $request)
    {
        $status =  $request->query('status');
        $reports  =  booking::where('status',$status)->paginate(10);
        $count_reports  = booking::where('status',$status)->count();

        return view('backend.pages.report.reportstatus',compact('reports','count_reports'));
    }
}
