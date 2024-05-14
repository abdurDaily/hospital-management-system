<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{

    // ** ADMIN DASHBOARD HOME
    public function index(){
        return view('backend.index');
    }

    // ** MY PROFILE 
    public function profile(){
        return view('backend.profile.profile');
    }

    // ** profile Update
    public function profileUpdate(Request $request){

        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }

        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
    }
}
