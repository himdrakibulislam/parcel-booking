<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Traits\ProcessImage;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use ProcessImage;
    public function users(){
        $users = User::orderBy('id','DESC')->paginate(10);
        return view('backend.pages.users.user',compact('users'));
    }
    public function remove_user(int $id){
        $user = User::findOrFail($id);
        if($user){
            $this->deleteImage($user->profile);
            $user->delete();
            return redirect()->back()->with('status','User Removed');
        }
        return redirect()->back()->with('status','User Not Found');
    }
}
