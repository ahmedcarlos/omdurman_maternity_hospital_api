<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vice_doctor_delivery_and_postnatal;

class vice_doctor_delivery_and_postnatal_controller extends Controller
{
    public function get_vice_doctor_delivery_and_postnatal($patient_id)
    {
        return vice_doctor_delivery_and_postnatal::where('patient_id',$patient_id)->get();
    }
    //
    public function post_vice_doctor_delivery_and_postnatal(Request $req)
    {
        $add = new vice_doctor_delivery_and_postnatal;
        $add->patient_id = $req->patient_id;
        $add->user_id = $req->user_id;
        $add->mode_of_delivery = $req->mode_of_delivery;
        $add->placenta = $req->placenta;
        $add->episiotomy = $req->episiotomy;
        $add->decircumcision = $req->decircumcision;
        $add->location = $req->location;
        $add->anti_d = $req->anti_d;
        $add->blood_loss = $req->blood_loss;
        $add->comments = $req->comments;
        $add->baby_gender = $req->baby_gender;
        $add->baby_number = $req->baby_number;
        $add->weight = $req->weight;
        $add->apgar_score = $req->apgar_score;
        $add->refer_to_scbu = $req->refer_to_scbu;
        $add->postnatal_follow_up = $req->postnatal_follow_up;
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
