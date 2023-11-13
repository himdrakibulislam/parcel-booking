<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewShipmentController extends Controller
{
    public function newshipment()
    {
        return view('frontend.pages.newshipment');
    }

    public function shipmenttype()
    {
        return view('frontend.pages.shipmenttype');
    }


}
