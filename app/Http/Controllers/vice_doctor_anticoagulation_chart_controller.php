<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vice_doctor_anticoagulation_chart;

class vice_doctor_anticoagulation_chart_controller extends Controller
{
    public function get_vice_doctor_anticoagulation_chart($patient_id)
    {
        return vice_doctor_anticoagulation_chart::where('patient_id',$patient_id)->get();
    }
    
    //
    public function post_vice_doctor_anticoagulation_chart(Request $req)
    {
        $add = new vice_doctor_anticoagulation_chart;
        $add->patient_id = $req->patient_id;
        $add->user_id = $req->user_id;
        $add->tick_for_inr = $req->tick_for_inr;
        $add->inr = $req->inr;
        $add->aptt = $req->aptt;
        $add->apt = $req->apt;
        $add->dosage_of_warfarin = $req->dosage_of_warfarin;
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
