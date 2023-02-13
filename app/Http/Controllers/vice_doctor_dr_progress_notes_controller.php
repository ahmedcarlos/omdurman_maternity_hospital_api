<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vice_doctor_dr_progress_notes;

class vice_doctor_dr_progress_notes_controller extends Controller
{
    public function get_vice_doctor_dr_progress_notes($patient_id)
    {
        return vice_doctor_dr_progress_notes::where('patient_id',$patient_id)->get();
    }
    
    //
    public function post_vice_doctor_dr_progress_notes(Request $req)
    {
        $add = new vice_doctor_dr_progress_notes;
        $add->patient_id = $req->patient_id;
        $add->user_id = $req->user_id;
        $add->patient_condition = $req->patient_condition;
        $add->investigation = $req->investigation;
        $add->instruction = $req->instruction;
        $result = $add->save();
        if($result)
        {
            return ['result'=>'data is saved'];
        }

        else
        {
            return ['result' => 'result is failed'];
        }

    }
}
