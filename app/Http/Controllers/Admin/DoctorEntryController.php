<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DoctorData;
use Illuminate\Http\Request;

class DoctorEntryController extends Controller
{
    public function doctorEntry (){
        return view('backend.Doctor_Entry.doctorEntry');
    }

    //* STORE AND UPDATE DATA 
    public function storeUpdateData(Request $request, $id = null){
        // dd($request->all());
        $doctorsData = DoctorData::findOrNew($id);
        $doctorsData->doctor_name = $request->doctor_name;
        $doctorsData->doctor_dessignation = $request->doctor_dessignation;
        $doctorsData->doctor_qualification = $request->doctor_qualification;
        $doctorsData->doctor_number = $request->doctor_number;
        $doctorsData->doctor_email = $request->doctor_email;
        $doctorsData->doctor_about = $request->doctor_about;
        $doctorsData->save();
        toast('Success Toast','success');
        return redirect()->route('');
        // return back()->with('success' , 'new record stored successfully');
    }


    //* LIST OF DOCTOR'S
    public function doctorList(){
      return view('backend.Doctor_Entry.list_doctors');
    }
}
