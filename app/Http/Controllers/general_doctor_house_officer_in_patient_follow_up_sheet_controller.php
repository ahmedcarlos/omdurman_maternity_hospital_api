<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\general_doctor_house_officer_in_patient_follow_up_sheet;

class general_doctor_house_officer_in_patient_follow_up_sheet_controller extends Controller
{
    public function get_general_doctor_house_officer_in_patient_follow_up_sheet($patient_id)
    {
        return general_doctor_house_officer_in_patient_follow_up_sheet::where('patient_id',$patient_id)->get();
    }
    
    //
    public function post_general_doctor_house_officer_in_patient_follow_up_sheet(Request $req)
    {
        $add = new general_doctor_house_officer_in_patient_follow_up_sheet;
        $add->patient_id = $req->patient_id;
        $add->user_id = $req->user_id;
        $add->bp = $req->bp;
        $add->urine = $req->urine;
        $add->fhr = $req->fhr;
        $add->odema = $req->odema;
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
