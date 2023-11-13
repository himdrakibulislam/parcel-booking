<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function report()
    {
        return view('backend.pages.report.report');
    }
    public function booking_report()
{
    return view('backend.pages.report.booking_report');
}
}