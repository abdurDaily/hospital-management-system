<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ApproveController extends Controller
{
    public function getApprove(){
        $allUsers = User::select('id','name','email','created_at')->where('status',0)->get();
        return view('backend.approve.approvePeoples',compact('allUsers'));
    }

    //** APPROVED USER 
    public function approvedUser($id){
        $approvedUserId = User::find($id);
        $approvedUserId->status = 1;
        $approvedUserId->save();
        return back();
    }
}
