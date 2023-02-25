<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vice_doctor_antenatal_admission_sheet;

class vice_doctor_antenatal_admission_sheet_controller extends Controller
{
    /*
    * Function Name : get_vice_doctor_antenatal_admission_sheet
    * Function Job  : retrieve vice_doctor_antenatal_admission_sheet from api determined by $patient_id
    * Parameters    : $patient_id
    * Return        : routes all vice_doctor_antenatal_admission_sheet from the database determined by $patient_id
    */
    public function get_vice_doctor_antenatal_admission_sheet($patient_id)
    {
        return vice_doctor_antenatal_admission_sheet::where('patient_id', $patient_id)->get();
    }

    /*
    * function name : post_vice_doctor_antenatal_admission_sheet
    * function job  : send request to vice_doctor_antenatal_admission_sheet in api
    * Parameters    : $req
    * Return        : save vice_doctor_antenatal_admission_sheet in the database if the request true else is failed
    */
    public function post_vice_doctor_antenatal_admission_sheet(Request $req)
    {
        $add = new vice_doctor_antenatal_admission_sheet;
        $add->patient_id = $req->patient_id;
        $add->user_id = $req->user_id;
        $add->complaint = $req->complaint;
        $add->history_of_presenting_illness = $req->history_of_presenting_illness;
        $add->pulse = $req->pulse;
        $add->bp = $req->bp;
        $add->temp = $req->temp;
        $add->general_condition = $req->general_condition;
        $add->general_condition_list = $req->general_condition_list;
        $add->cvs_and_chest_examination = $req->cvs_and_chest_examination;
        $add->fundal_height = $req->fundal_height;
        $add->lie = $req->lie;
        $add->presentation = $req->presentation;
        $add->fhr = $req->fhr;
        $add->fm = $req->fm;
        $add->vaginal_examination = $req->vaginal_examination;
        $add->diagnosis = $req->diagnosis;
        $add->immediate_instruction = $req->immediate_instruction;
        $result = $add->save();
        if ($result) {
            return ['result' => 'data is saved'];
        } else {
            return ['result' => 'result is failed'];
        }
    }
}
