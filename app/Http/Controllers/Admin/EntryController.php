<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EntryController extends Controller
{
    public function entryPatient(){
      return view('backend.Entry.entry');
    }

    // STORE DATA FOR PATIENT 
    public function storePatientData(Request $request){
      dd($request->all());
    }
}
