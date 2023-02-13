<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vice_doctor_regular_drugs;

class vice_doctor_regular_drugs_controller extends Controller
{
    public function get_vice_doctor_regular_drugs($patient_id)
    {
        return vice_doctor_regular_drugs::where('patient_id',$patient_id)->get();
    
    }
    
    //
    public function post_vice_doctor_regular_drugs(Request $req)
    {
        $add = new vice_doctor_regular_drugs;
        $add->patient_id = $req->patient_id;
        $add->user_id = $req->user_id;
        $add->drug = $req->drug;
        $add->time = $req->time;
        $add->dose = $req->dose;
        $add->frequency = $req->frequency;
        $add->route = $req->route;
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
