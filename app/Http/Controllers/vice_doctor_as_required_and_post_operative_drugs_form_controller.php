<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vice_doctor_as_required_and_post_operative_drugs_form;

class vice_doctor_as_required_and_post_operative_drugs_form_controller extends Controller
{
     /*
    * Function Name : get_vice_doctor_as_required_and_post_operative_drugs_form
    * Function Job  : retrieve vice_doctor_as_required_and_post_operative_drugs_form from api determined by $patient_id
    * Parameters    : $patient_id
    * Return        : routes all vice_doctor_as_required_and_post_operative_drugs_form from the database determined by $patient_id
    */
    public function get_vice_doctor_as_required_and_post_operative_drugs_form($patient_id)
    {
        return vice_doctor_as_required_and_post_operative_drugs_form::where('patient_id',$patient_id)->get();
    }
    
    /*
    * function name : post_vice_doctor_as_required_and_post_operative_drugs_form
    * function job  : send request to vice_doctor_as_required_and_post_operative_drugs_form in api
    * Parameters    : $req
    * Return        : save vice_doctor_as_required_and_post_operative_drugs_form in the database if the request true else is failed
    */
    public function post_vice_doctor_as_required_and_post_operative_drugs_form(Request $req)
    {
        $add = new vice_doctor_as_required_and_post_operative_drugs_form;
        $add->patient_id = $req->patient_id;
        $add->user_id = $req->user_id;
        $add->drug_name = $req->drug_name;
        $add->dose = $req->dose;
        $add->route = $req->route;
        $add->frequency = $req->frequency;
        $add->total_no_of_doses = $req->total_no_of_doses;
        $add->start_date = $req->start_date;
        $add->stop_date = $req->stop_date;
        $add->pharm = $req->pharm;
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
