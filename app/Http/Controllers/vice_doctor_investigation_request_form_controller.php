<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vice_doctor_investigation_request_form;

class vice_doctor_investigation_request_form_controller extends Controller
{
    public function get_vice_doctor_investigation_request_form($patient_id)
    {
        return vice_doctor_investigation_request_form::where('patient_id',$patient_id)->get();
    }
    
    //
    public function post_vice_doctor_investigation_request_form(Request $req)
    {
        $add = new vice_doctor_investigation_request_form;
        $add->patient_id = $req->patient_id;
        $add->user_id = $req->user_id;
        $add->department = $req->department;
        $add->word = $req->word;
        $add->bed_no = $req->bed_no;
        $add->clinical_remarks = $req->clinical_remarks;
        $add->requests = $req->requests;
        $add->other = $req->other;
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
