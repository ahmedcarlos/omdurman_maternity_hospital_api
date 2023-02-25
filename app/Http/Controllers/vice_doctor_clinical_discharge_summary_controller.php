<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vice_doctor_clinical_discharge_summary;

class vice_doctor_clinical_discharge_summary_controller extends Controller
{
    /*
    * Function Name : get_vice_doctor_clinical_discharge_summary
    * Function Job  : retrieve vice_doctor_clinical_discharge_summary from api determined by $patient_id
    * Parameters    : $patient_id
    * Return        : routes all vice_doctor_clinical_discharge_summary from the database determined by $patient_id
    */
    public function get_vice_doctor_clinical_discharge_summary($patient_id)
    {
        return vice_doctor_clinical_discharge_summary::where('patient_id',$patient_id)->get();
    }
    
    /*
    * function name : post_vice_doctor_clinical_discharge_summary
    * function job  : send request to vice_doctor_clinical_discharge_summary in api
    * Parameters    : $req
    * Return        : save vice_doctor_clinical_discharge_summary in the database if the request true else is failed
    */
    public function post_vice_doctor_clinical_discharge_summary(Request $req)
    {
        $add = new vice_doctor_clinical_discharge_summary;
        $add->patient_id = $req->patient_id;
        $add->user_id = $req->user_id;
        $add->final_dagnosis = $req->final_dagnosis;
        $add->summary = $req->summary;
        $add->operation = $req->operation;
        $add->treatment_recommended_on_discharge = $req->treatment_recommended_on_discharge;
        $add->follow_up_arrangements = $req->follow_up_arrangements;
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
