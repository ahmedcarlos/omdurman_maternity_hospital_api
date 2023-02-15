<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\front_desk_statistic_form;
use Illuminate\Support\Carbon;
class front_desk_statistic_form_controller extends Controller
{
    public function get_front_desk_statistic_form($patient_id)
    {
        return front_desk_statistic_form::where('patient_id', $patient_id)->get();
    }

    //
    public function post_front_desk_statistic_form(Request $req)
    {
        $add = new front_desk_statistic_form;
        $add->patient_id = $req->patient_id;
        $add->user_id = $req->user_id;
        $add->hospital_name = $req->hospital_name;
        $add->hospital_address = $req->hospital_address;
        $add->Registration_no_in_register = $req->Registration_no_in_register;
        $add->Section = $req->Section;
        $add->Amber = $req->Amber;
        $add->Sex = $req->Sex;
        $add->patient_address = $req->patient_address;
        $add->patients_profession = $req->patients_profession;
        $add->date_of_entry = $req->date_of_entry;
        $add->exit_date = $req->exit_date;
        $add->final_diagnosis = $req->final_diagnosis;
        $add->other_diseases_and_complications = $req->other_diseases_and_complications;
        $add->incident_date = $req->incident_date;
        $add->incident_time = $req->incident_time;
        $add->accident_cause = $req->accident_cause;
        $add->diabetes_test = $req->diabetes_test;
        $add->immunization_against_diseases = $req->immunization_against_diseases;
        $add->immunization_date = $req->immunization_date;
        $add->immunization_place = $req->immunization_place;
        $add->patients_condition_upon_exit = $req->patients_condition_upon_exit;
        $add->was_the_body_autopsied = $req->was_the_body_autopsied;
        $result = $add->save();
        if ($result) {
            return ['result' => 'data is saved'];
        } else {
            return ['result' => 'result is failed'];
        }
    }
    public function Die_pationt_count(){
        $users = front_desk_statistic_form::select('id', 'date')->where('patients_condition_upon_exit','Died')
        ->get()
        ->groupBy(function ($date) {
            return Carbon::parse($date->date)->format('m');
        });

    $usermcount = [];
    $userArr = [];

    foreach ($users as $key => $value) {
        $usermcount[(int)$key] = count($value);
    }

    $month = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

    for ($i = 1; $i <= 12; $i++) {
        if (!empty($usermcount[$i])) {
            $userArr[$i]['count'] = $usermcount[$i];
        } else {
            $userArr[$i]['count'] = 0;
        }
        $userArr[$i]['month'] = $month[$i - 1];
    }

    return response()->json(array_values($userArr));
    }
}
