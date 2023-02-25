<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vice_doctor_treatment_order_sheet;

class vice_doctor_treatment_order_sheet_controller extends Controller
{
    /*
    * Function Name : get_vice_doctor_treatment_order_sheet
    * Function Job  : retrieve all vice_doctor_treatment_order_sheet from api
    * Parameters    : $patient_id
    * Return        : routes all get_vice_doctor_treatment_order_sheet from the database
    */
    public function get_vice_doctor_treatment_order_sheet($patient_id)
    {
        return vice_doctor_treatment_order_sheet::where('patient_id',$patient_id)->get();
    
    }
    
    /*
    * function name : post_vice_doctor_treatment_order_sheet
    * function job  : function to send request to vice_doctor_treatment_order_sheet in api
    * Parameters    : $req
    * Return        : save post_vice_doctor_treatment_order_sheet in the database if the request true else is failed
    */
    public function post_vice_doctor_treatment_order_sheet(Request $req)
    {
        $add = new vice_doctor_treatment_order_sheet;
        $add->patient_id = $req->patient_id;
        $add->user_id = $req->user_id;
        $add->start_date = $req->start_date;
        $add->medication = $req->medication;
        $add->end_date = $req->end_date;
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
