<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vice_doctor_antenatal_admission_follow_up_sheet;
class vice_doctor_antenatal_admission_follow_up_sheet_controller extends Controller
{
    public function get_vice_doctor_antenatal_admission_follow_up_sheet($patient_id)
    {
        return vice_doctor_antenatal_admission_follow_up_sheet::where('patient_id',$patient_id)->get();
    }
    //
    public function post_vice_doctor_antenatal_admission_follow_up_sheet(Request $req)
    {
        $add = new vice_doctor_antenatal_admission_follow_up_sheet;
        $add->patient_id = $req->patient_id;
        $add->user_id = $req->user_id;
        $add->follow_up_and_instructions = $req->follow_up_and_instructions;
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
