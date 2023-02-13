<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vice_doctor_treatment_order_sheet;

class vice_doctor_treatment_order_sheet_controller extends Controller
{
    public function get_vice_doctor_treatment_order_sheet($patient_id)
    {
        return vice_doctor_treatment_order_sheet::where('patient_id',$patient_id)->get();
    
    }
    
    //
    public function post_vice_doctor_treatment_order_sheet(Request $req)
    {
        $add = new vice_doctor_treatment_order_sheet;
        $add->patient_id = $req->patient_id;
        $add->user_id = $req->user_id;
        $add->start_date = $req->start_date;
        $add->medication = $req->medication;
        $add->end_date = $req->end_date;
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
