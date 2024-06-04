<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DoctorEntryController extends Controller
{
    public function doctorEntry (){
        return view('backend.Doctor_Entry.doctorEntry');
    }
}
