<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ContactController extends Controller
{
    public function contact(){
        $contacts = DB::table('contactus')->paginate(10);
        return view('backend.pages.contact.index',compact('contacts'));
    }
    public function contact_remove(int $id){
        DB::table('contactus')->where('id',$id)->delete();
        return redirect()->back()->with('status','Contact Removed.');
    }
}
