<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\general_doctor_house_officer_in_patient_follow_up_sheet;

class general_doctor_house_officer_in_patient_follow_up_sheet_controller extends Controller
{
    /*
    * Function Name : get_general_doctor_house_officer_in_patient_follow_up_sheet
    * Function Job  : retrieve general_doctor_house_officer_in_patient_follow_up_sheet from api determined by $patient_id
    * Parameters    : $patient_id
    * Return        : routes all general_doctor_house_officer_in_patient_follow_up_sheet from the database determined by $patient_id
    */
    public function get_general_doctor_house_officer_in_patient_follow_up_sheet($patient_id)
    {
        return general_doctor_house_officer_in_patient_follow_up_sheet::where('patient_id',$patient_id)->get();
    }
    
    /*
    * function name : post_general_doctor_house_officer_in_patient_follow_up_sheet
    * function job  : send request to general_doctor_house_officer_in_patient_follow_up_sheet in api
    * Parameters    : $req
    * Return        : save general_doctor_house_officer_in_patient_follow_up_sheet in the database if the request true else is failed
    */
    public function post_general_doctor_house_officer_in_patient_follow_up_sheet(Request $req)
    {
        $add = new general_doctor_house_officer_in_patient_follow_up_sheet;
        $add->patient_id = $req->patient_id;
        $add->user_id = $req->user_id;
        $add->bp = $req->bp;
        $add->urine = $req->urine;
        $add->fhr = $req->fhr;
        $add->odema = $req->odema;
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
