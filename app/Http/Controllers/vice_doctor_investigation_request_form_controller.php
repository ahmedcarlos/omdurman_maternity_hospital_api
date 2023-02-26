<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vice_doctor_investigation_request_form;

class vice_doctor_investigation_request_form_controller extends Controller
{
    /*
    * Function Name : get_vice_doctor_investigation_request_form
    * Function Job  : retrieve vice_doctor_investigation_request_form from api determined by $patient_id
    * Parameters    : $patient_id
    * Return        : routes all vice_doctor_investigation_request_form from the database determined by $patient_id
    */
    public function get_vice_doctor_investigation_request_form($patient_id)
    {
        return vice_doctor_investigation_request_form::where('patient_id',$patient_id)->get();
    }
    
    /*
    * function name : post_vice_doctor_investigation_request_form
    * function job  : send request to vice_doctor_investigation_request_form in api
    * Parameters    : $req
    * Return        : save vice_doctor_investigation_request_form in the database if the request true else is failed
    */
    public function post_vice_doctor_investigation_request_form(Request $req)
    {
        $add = new vice_doctor_investigation_request_form;
        $add->patient_id = $req->patient_id;
        $add->user_id = $req->user_id;
        $add->department = $req->department;
        $add->word = $req->word;
        $add->bed_no = $req->bed_no;
        $add->clinical_remarks = $req->clinical_remarks;
        $add->requests = $req->requests;
        $add->other = $req->other;
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
