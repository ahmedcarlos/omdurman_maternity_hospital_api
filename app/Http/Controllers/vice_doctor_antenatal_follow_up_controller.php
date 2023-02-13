<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vice_doctor_antenatal_follow_up;

class vice_doctor_antenatal_follow_up_controller extends Controller
{
    public function get_vice_doctor_antenatal_follow_up($patient_id)
    {
        return vice_doctor_antenatal_follow_up::where('patient_id',$patient_id)->get();
    }
    //
    public function post_vice_doctor_antenatal_follow_up(Request $req)
    {
        $add = new vice_doctor_antenatal_follow_up;
        $add->patient_id = $req->patient_id;
        $add->user_id = $req->user_id;
        $add->b_p = $req->b_p;
        $add->g_a = $req->g_a;
        $add->f_l = $req->f_l;
        $add->pres = $req->pres;
        $add->eng = $req->eng;
        $add->f_h = $req->f_h;
        $add->h_b = $req->h_b;
        $add->urine = $req->urine;
        $add->comment = $req->comment;
        $add->next_visit = $req->next_visit;
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
