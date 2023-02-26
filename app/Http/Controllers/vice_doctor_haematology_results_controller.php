<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vice_doctor_haematology_results;

class vice_doctor_haematology_results_controller extends Controller
{
    /*
    * Function Name : get_vice_doctor_haematology_results
    * Function Job  : retrieve vice_doctor_haematology_results from api determined by $patient_id
    * Parameters    : $patient_id
    * Return        : routes all vice_doctor_haematology_results from the database determined by $patient_id
    */
    public function get_vice_doctor_haematology_results($patient_id)
    {
        return vice_doctor_haematology_results::where('patient_id',$patient_id)->get();
    }
    
    /*
    * function name : post_vice_doctor_haematology_results
    * function job  : send request to vice_doctor_haematology_results in api
    * Parameters    : $req
    * Return        : save vice_doctor_haematology_results in the database if the request true else is failed
    */
    public function post_vice_doctor_haematology_results(Request $req)
    {
        $add = new vice_doctor_haematology_results;
        $add->patient_id = $req->patient_id;
        $add->user_id = $req->user_id;
        $add->hb = $req->hb;
        $add->wbcs = $req->wbcs;
        $add->neutrophils = $req->neutrophils;
        $add->lymphocytes = $req->lymphocytes;
        $add->eosinophils = $req->eosinophils;
        $add->basophils = $req->basophils;
        $add->monocytes = $req->monocytes;
        $add->platelets = $req->platelets;
        $add->retlculocytes = $req->retlculocytes;
        $add->esr = $req->esr;
        $add->haematocrit_pcv = $req->haematocrit_pcv;
        $add->mcv = $req->mcv;
        $add->mch = $req->mch;
        $add->mchc = $req->mchc;
        $add->rbcs = $req->rbcs;
        $add->peripheral_blood = $req->peripheral_blood;
        $add->bone_marrow = $req->bone_marrow;
        $add->hb_electrophoresis = $req->hb_electrophoresis;
        $add->coombs_test = $req->coombs_test;
        $add->prothrombin_pt = $req->prothrombin_pt;
        $add->inr = $req->inr;
        $add->partial_thromboplastin_time_pt = $req->partial_thromboplastin_time_pt;
        $add->bleeding_time = $req->bleeding_time;
        $add->clotting_time = $req->clotting_time;
        $add->sickling_test = $req->sickling_test;
        $add->serum_b12 = $req->serum_b12;
        $add->folic_acid = $req->folic_acid;
        $add->serum_iron_ferritin = $req->serum_iron_ferritin;
        $add->tibcs = $req->tibcs;
        $add->serum_protein_electrophoresis = $req->serum_protein_electrophoresis;
        $add->others = $req->others;
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
