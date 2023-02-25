<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vice_doctor_discharge_drugs;

class vice_doctor_discharge_drugs_controller extends Controller
{
    /*
    * Function Name : get_vice_doctor_discharge_drugs
    * Function Job  : retrieve vice_doctor_discharge_drugs from api determined by $patient_id
    * Parameters    : $patient_id
    * Return        : routes all vice_doctor_discharge_drugs from the database determined by $patient_id
    */
    public function get_vice_doctor_discharge_drugs($patient_id)
    {
        return vice_doctor_discharge_drugs::where('patient_id',$patient_id)->get();
    }
    
    /*
    * function name : post_vice_doctor_discharge_drugs
    * function job  : send request to vice_doctor_discharge_drugs in api
    * Parameters    : $req
    * Return        : save vice_doctor_discharge_drugs in the database if the request true else is failed
    */
    public function post_vice_doctor_discharge_drugs(Request $req)
    {
        $add = new vice_doctor_discharge_drugs;
        $add->patient_id = $req->patient_id;
        $add->user_id = $req->user_id;
        $add->drug_name = $req->drug_name;
        $add->dose = $req->dose;
        $add->route = $req->route;
        $add->frequency = $req->frequency;
        $add->no_day = $req->no_day;
        $add->remarks = $req->remarks;
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
