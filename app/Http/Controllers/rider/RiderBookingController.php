<?php

namespace App\Http\Controllers\rider;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\booking;
use Illuminate\Support\Facades\Auth;

class RiderBookingController extends Controller
{
    public function booking(){
        $booking = [];
        $rider = Auth::guard('rider')->user();
        if($rider->is_approved == true){
            $booking = booking::where('rider_id',$rider->id)
            ->orderBy('created_at', 'desc')
            ->paginate(10);
        }
        return view('rider.booking.index',compact('booking'));
    }
    public function geta_booking(int $id){
        $rider = Auth::guard('rider')->user();
        $booking = booking::where('rider_id',$rider->id)
        ->where('id',$id)
        ->first();
        return view('rider.booking.view',compact('booking'));
    }
    public function add_note(Request $request, int $id){
        $request->validate([
            'note' => 'required'
        ]);
        $rider = Auth::guard('rider')->user();
        $booking = booking::where('rider_id',$rider->id)
        ->where('id',$id)
        ->first();

        if($booking){
            $booking->note = $request->note;
            $booking->update();
            return redirect()->back()->with('ststus','Note Added.');
        }else{
            return redirect()->back()->with('status','Booking Not Found');
        }
       
    }
}
