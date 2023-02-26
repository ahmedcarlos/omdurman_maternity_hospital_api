<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vice_doctor_obstetrical_history;

class vice_doctor_obstetrical_history_controller extends Controller
{
    /*
    * Function Name : get_vice_doctor_obstetrical_history
    * Function Job  : retrieve vice_doctor_obstetrical_history from api determined by $patient_id
    * Parameters    : $patient_id
    * Return        : routes all vice_doctor_obstetrical_history from the database determined by $patient_id
    */
    public function get_vice_doctor_obstetrical_history($patient_id)
    {
        return vice_doctor_obstetrical_history::where('patient_id', $patient_id)->get();
    }

    /*
    * function name : post_vice_doctor_obstetrical_history
    * function job  : send request to vice_doctor_obstetrical_history in api
    * Parameters    : $req
    * Return        : save vice_doctor_obstetrical_history in the database if the request true else is failed
    */
    public function post_vice_doctor_obstetrical_history(Request $req)
    {
        $add = new vice_doctor_obstetrical_history;
        $add->patient_id = $req->patient_id;
        $add->user_id = $req->user_id;
        $add->gr = $req->gr;
        $add->para_1 = $req->para_1;
        $add->para_2 = $req->para_2;
        $add->drug_history = $req->drug_history;
        $add->lmp = $req->lmp;
        $add->edd = $req->edd;
        $add->scan_edd = $req->scan_edd;
        $add->past_medical_history = $req->past_medical_history;
        $add->past_surgical_history = $req->past_surgical_history;
        $add->social_history = $req->social_history;
        $add->family_history = $req->family_history;
        $add->others = $req->others;
        $add->chest_cvs_examination = $req->chest_cvs_examination;
        $add->comments_and_special_plans = $req->comments_and_special_plans;
        $add->comments_on_par = $req->comments_on_par;
        $result = $add->save();
        if ($result) {
            return ['result' => 'data is saved'];
        } else {
            return ['result' => 'result is failed'];
        }
    }
}
