<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\front_desk_birth_report_data;
class front_desk_birth_report_data_controller extends Controller
{
    //get
    public function get_front_desk_birth_report_data($patient_id)
    {
        return front_desk_birth_report_data::where('patient_id',$patient_id)->get();
    }

    //post
    public function post_front_desk_birth_report_data(Request $req)
    {
        $add = new front_desk_birth_report_data;
        $add->patient_id = $req->patient_id;
        $add->user_id = $req->user_id;
        $add->birth_date = $req->birth_date;
        $add->Fetal_birth_hour = $req->Fetal_birth_hour;
        $add->birth_type = $req->birth_type;
        $add->placenta_birth_hour = $req->placenta_birth_hour;
        $add->blood_quantity = $req->blood_quantity;
        $add->newborn_status = $req->newborn_status;
        $add->birth_weight = $req->birth_weight;
        $add->breast_feeding_practice = $req->breast_feeding_practice;
        $add->wound = $req->wound;
        $add->vitamin_k = $req->vitamin_k;
        $add->token = $req->token;
        $add->baby_type = $req->baby_type;
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

/*
"patient_id": 2028,
    "user_id": 508,
    "word": "some text",
    "bed_no": 10,
    "clinical_remarks": "something",
    "request": "no any request",
    "other": "there are many things"
*/