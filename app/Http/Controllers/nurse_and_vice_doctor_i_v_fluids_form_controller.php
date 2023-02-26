<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nurse_and_vice_doctor_i_v_fluids_form;
class nurse_and_vice_doctor_i_v_fluids_form_controller extends Controller
{
    /*
    * Function Name : get_nurse_and_vice_doctor_i_v_fluids_form
    * Function Job  : retrieve nurse_and_vice_doctor_i_v_fluids_form from api determined by $patient_id
    * Parameters    : $patient_id
    * Return        : routes all nurse_and_vice_doctor_i_v_fluids_form from the database determined by $patient_id
    */
    public function get_nurse_and_vice_doctor_i_v_fluids_form($patient_id)
    {
        return nurse_and_vice_doctor_i_v_fluids_form::where('patient_id',$patient_id)->get();
    }
    
    /*
    * function name : post_nurse_and_vice_doctor_i_v_fluids_form
    * function job  : send request to nurse_and_vice_doctor_i_v_fluids_form in api
    * Parameters    : $req
    * Return        : save nurse_and_vice_doctor_i_v_fluids_form in the database if the request true else is failed
    */
    public function post_nurse_and_vice_doctor_i_v_fluids_form(Request $req)
    {
        $add = new nurse_and_vice_doctor_i_v_fluids_form;
        $add->patient_id = $req->patient_id;
        $add->user_id = $req->user_id;
        $add->volume_and_concentration = $req->volume_and_concentration;
        $add->rate_ml_br = $req->rate_ml_br;
        $add->additives_amount = $req->additives_amount;
        $add->discontinued_on = $req->discontinued_on;
        $add->discontinued_by = $req->discontinued_by;
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
