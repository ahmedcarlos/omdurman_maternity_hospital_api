<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vice_doctor_discharge_drugs;

class vice_doctor_discharge_drugs_controller extends Controller
{
    public function get_vice_doctor_discharge_drugs($patient_id)
    {
        return vice_doctor_discharge_drugs::where('patient_id',$patient_id)->get();
    }
    
    //
    public function post_vice_doctor_discharge_drugs(Request $req)
    {
        $add = new vice_doctor_discharge_drugs;
        $add->patient_id = $req->patient_id;
        $add->user_id = $req->user_id;
        $add->drug_name = $req->drug_name;
        $add->dose = $req->dose;
        $add->route = $req->route;
        $add->frequency = $req->frequency;
        $add->no_day = $req->no_day;
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
