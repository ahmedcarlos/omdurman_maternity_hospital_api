<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vice_doctor_anticoagulation_chart;

class vice_doctor_anticoagulation_chart_controller extends Controller
{
    /*
    * Function Name : get_vice_doctor_anticoagulation_chart
    * Function Job  : retrieve vice_doctor_anticoagulation_chart from api determined by $patient_id
    * Parameters    : $patient_id
    * Return        : routes all vice_doctor_anticoagulation_chart from the database determined by $patient_id
    */
    public function get_vice_doctor_anticoagulation_chart($patient_id)
    {
        return vice_doctor_anticoagulation_chart::where('patient_id',$patient_id)->get();
    }
    
    /*
    * function name : post_vice_doctor_anticoagulation_chart
    * function job  : send request to vice_doctor_anticoagulation_chart in api
    * Parameters    : $req
    * Return        : save vice_doctor_anticoagulation_chart in the database if the request true else is failed
    */
    public function post_vice_doctor_anticoagulation_chart(Request $req)
    {
        $add = new vice_doctor_anticoagulation_chart;
        $add->patient_id = $req->patient_id;
        $add->user_id = $req->user_id;
        $add->tick_for_inr = $req->tick_for_inr;
        $add->inr = $req->inr;
        $add->aptt = $req->aptt;
        $add->apt = $req->apt;
        $add->dosage_of_warfarin = $req->dosage_of_warfarin;
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
