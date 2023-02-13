<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nurse_progress_notes;

class nurse_progress_notes_controller extends Controller
{
    public function get_nurse_progress_notes($patient_id)
    {
        return nurse_progress_notes::where('patient_id',$patient_id)->get();
    }
    
    //
    public function post_nurse_progress_notes(Request $req)
    {
        $add = new nurse_progress_notes;
        $add->patient_id = $req->patient_id;
        $add->user_id = $req->user_id;
        $add->statues = $req->statues;
        $add->patient_condition = $req->patient_condition;
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
