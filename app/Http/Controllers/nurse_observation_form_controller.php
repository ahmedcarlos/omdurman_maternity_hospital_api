<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nurse_observation_form;
class nurse_observation_form_controller extends Controller
{
     /*
    * Function Name : get_nurse_observation_form
    * Function Job  : retrieve nurse_observation_form from api determined by $patient_id
    * Parameters    : $patient_id
    * Return        : routes all nurse_observation_form from the database determined by $patient_id
    */
    public function get_nurse_observation_form($patient_id)
    {
        return nurse_observation_form::where('patient_id',$patient_id)->get();
    }
    
    /*
    * function name : nurse_observation_form
    * function job  : send request to nurse_observation_form in api
    * Parameters    : $req
    * Return        : save nurse_observation_form in the database if the request true else is failed
    */
    public function post_nurse_observation_form(Request $req)
    {
        $add = new nurse_observation_form;
        $add->patient_id = $req->patient_id;
        $add->user_id = $req->user_id;
        $add->Temp = $req->Temp;
        $add->plus_rate = $req->plus_rate;
        $add->resp_rate = $req->resp_rate;
        $add->b_p = $req->b_p;
        $add->urine_output_n = $req->urine_output_n;
        $add->urine_output_d = $req->urine_output_d;
        $add->level_of_conaciouances_muscle_tone_and_reflex = $req->level_of_conaciouances_muscle_tone_and_reflex;
        $add->o2_oxygen = $req->o2_oxygen;
        $add->odema_general = $req->odema_general;
        $add->odema_ll = $req->odema_ll;
        $add->urine_acetone = $req->urine_acetone;
        $add->urine_sugar = $req->urine_sugar;
        $add->urine_protein = $req->urine_protein;
        $add->skin_color = $req->skin_color;
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
