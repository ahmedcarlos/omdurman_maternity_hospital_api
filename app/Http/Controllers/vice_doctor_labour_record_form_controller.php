<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vice_doctor_labour_record_form;

class vice_doctor_labour_record_form_controller extends Controller
{
    /*
    * Function Name : get_vice_doctor_labour_record_form
    * Function Job  : retrieve vice_doctor_labour_record_form from api determined by $patient_id
    * Parameters    : $patient_id
    * Return        : routes all vice_doctor_labour_record_form from the database determined by $patient_id
    */
    public function get_vice_doctor_labour_record_form($patient_id)
    {
        return vice_doctor_labour_record_form::where('patient_id', $patient_id)->get();
    }

    /*
    * function name : post_vice_doctor_labour_record_form
    * function job  : send request to vice_doctor_labour_record_form in api
    * Parameters    : $req
    * Return        : save vice_doctor_labour_record_form in the database if the request true else is failed
    */
    public function post_vice_doctor_labour_record_form(Request $req)
    {
        $add = new vice_doctor_labour_record_form;
        $add->patient_id = $req->patient_id;
        $add->user_id = $req->user_id;
        $add->cx_position = $req->cx_position;
        $add->cx_effacement = $req->cx_effacement;
        $add->cx_consistency = $req->cx_consistency;
        $add->cx_dilatation = $req->cx_dilatation;
        $add->presenting_part_station = $req->presenting_part_station;
        $add->presenting_part_position = $req->presenting_part_position;
        $add->presenting_part_caput = $req->presenting_part_caput;
        $add->presenting_part_moulding = $req->presenting_part_moulding;
        $add->membranes = $req->membranes;
        $add->if_ruptur_time = $req->if_ruptur_time;
        $add->amount = $req->amount;
        $add->meconium = $req->meconium;
        $add->special_instructions = $req->special_instructions;
        $add->how_reptured = $req->how_reptured;
        $result = $add->save();
        if ($result) {
            return ['result' => 'data is saved'];
        } else {
            return ['result' => 'result is failed'];
        }
    }
}
