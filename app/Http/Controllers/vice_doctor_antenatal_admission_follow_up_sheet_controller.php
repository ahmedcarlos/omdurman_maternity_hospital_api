<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vice_doctor_antenatal_admission_follow_up_sheet;
class vice_doctor_antenatal_admission_follow_up_sheet_controller extends Controller
{
    /*
    * Function Name : get_vice_doctor_antenatal_admission_follow_up_sheet
    * Function Job  : retrieve vice_doctor_antenatal_admission_follow_up_sheet from api determined by $patient_id
    * Parameters    : $patient_id
    * Return        : routes all vice_doctor_antenatal_admission_follow_up_sheet from the database determined by $patient_id
    */
    public function get_vice_doctor_antenatal_admission_follow_up_sheet($patient_id)
    {
        return vice_doctor_antenatal_admission_follow_up_sheet::where('patient_id',$patient_id)->get();
    }
    
   /*
    * function name : post_vice_doctor_antenatal_admission_follow_up_sheet
    * function job  : send request to vice_doctor_antenatal_admission_follow_up_sheet in api
    * Parameters    : $req
    * Return        : save vice_doctor_antenatal_admission_follow_up_sheet in the database if the request true else is failed
    */ 
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
