<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vice_doctor_labour_ward_admission_form;

class vice_doctor_labour_ward_admission_form_controller extends Controller
{
    public function get_vice_doctor_labour_ward_admission_form($patient_id)
    {
        return vice_doctor_labour_ward_admission_form::where('patient_id', $patient_id)->get();
    }

    //
    public function post_vice_doctor_labour_ward_admission_form(Request $req)
    {
        $add = new vice_doctor_labour_ward_admission_form;
        $add->patient_id = $req->patient_id;
        $add->user_id = $req->user_id;
        $add->gravida = $req->gravida;
        $add->par_1 = $req->par_1;
        $add->par_2 = $req->par_2;
        $add->lmp = $req->lmp;
        $add->edd = $req->edd;
        $add->ga = $req->ga;
        $add->c_o = $req->c_o;
        $add->relevant_past_history = $req->relevant_past_history;
        $add->general_condition = $req->general_condition;
        $add->condition = $req->condition;
        $add->bp = $req->bp;
        $add->pulse = $req->pulse;
        $add->temp = $req->temp;
        $add->chest_and_cv_examination = $req->chest_and_cv_examination;
        $add->fundal_height = $req->fundal_height;
        $add->lie = $req->lie;
        $add->presentation = $req->presentation;
        $add->engagement = $req->engagement;
        $add->amount_of_liquor = $req->amount_of_liquor;
        $add->fhr = $req->fhr;
        $add->fm = $req->fm;
        $add->time_of_contractions_start = $req->time_of_contractions_start;
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
        $add->investigations_hb = $req->investigations_hb;
        $add->investigations_blood_group = $req->investigations_blood_group;
        $add->investigations_urine = $req->investigations_urine;
        $add->uss = $req->uss;
        $add->ctg = $req->ctg;
        $add->others = $req->others;
        $add->how_reptured = $req->how_reptured;
        $result = $add->save();
        if ($result) {
            return ['result' => 'data is saved'];
        } else {
            return ['result' => 'result is failed'];
        }
    }
}
