<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vice_doctor_operation_note;

class vice_doctor_operation_note_controller extends Controller
{

    public function get_vice_doctor_operation_note($patient_id)
    {
        return vice_doctor_operation_note::where('patient_id', $patient_id)->get();
    }

    //
    public function post_vice_doctor_operation_note(Request $req)
    {
        $add = new vice_doctor_operation_note;
        $add->patient_id = $req->patient_id;
        $add->user_id = $req->user_id;
        $add->operation = $req->operation;
        $add->indication_1 = $req->indication_1;
        $add->indication_2 = $req->indication_2;
        $add->surgeon = $req->surgeon;
        $add->anaesthetist = $req->anaesthetist;
        $add->assistant = $req->assistant;
        $add->anaesthesia = $req->anaesthesia;
        $add->incision = $req->incision;
        $add->process = $req->process;
        $add->blood_loss = $req->blood_loss;
        $add->ovaries_and_tubes_checked = $req->ovaries_and_tubes_checked;
        $add->baby = $req->baby;

        $add->weight = $req->weight;
        $add->apgar_score = $req->apgar_score;
        $add->treatment = $req->treatment;
        $add->antibiotics = $req->antibiotics;
        $add->analgesia = $req->analgesia;
        $add->anticoagulant = $req->anticoagulant;
        $add->iv_fluids = $req->iv_fluids;
        $add->blood_transfusion = $req->blood_transfusion;
        $add->recommendations_for_next_pregnancy = $req->recommendations_for_next_pregnancy;
        $add->refer_to_scub = $req->refer_to_scub;
        $result = $add->save();
        if ($result) {
            return ['result' => 'data is saved'];
        } else {
            return ['result' => 'result is failed'];
        }
    }
}
