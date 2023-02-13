<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vice_doctor_labour_ward_instructions;

class vice_doctor_labour_ward_instructions_controller extends Controller
{
    //
    public function get_vice_doctor_labour_ward_instructions($patient_id)
    {
        return vice_doctor_labour_ward_instructions::where('patient_id',$patient_id)->get();
    }

    public function post_vice_doctor_labour_ward_instructions(Request $req)
    {
        $add = new vice_doctor_labour_ward_instructions;
        $add->patient_id = $req->patient_id;
        $add->user_id = $req->user_id;
        $add->instruction = $req->instruction;
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