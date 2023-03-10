<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\front_desk_patients;
use Illuminate\Support\Carbon;
class front_desk_patients_controller extends Controller
{
    /*
    * Function Name : get_front_desk_patients
    * Function Job  : function to get specific front_desk_patient from api
    * Parameters    : $patient_id
    * Return        : routes specific front_desk_patients from the database
    */
    public function get_front_desk_patients($patient_id)
    {
        return front_desk_patients::where('patient_id', $patient_id)->get();
    }
    
    /*
    * Function Name : get_all_front_desk_patients
    * Function Job  : function to get all front_desk patients from api
    * Return        : routes all front_desk_patients from the database
    */
    public function get_all_front_desk_patients()
    {
        return front_desk_patients::all();
    }
    
    /*
    * function name : post_front_desk_patients 
    * function job  : function to send request to post_front_desk_patients in api
    * Parameters    : $req
    * Return        : save post_front_desk_patients in the database if the request true else is failed
    */
    public function post_front_desk_patients(Request $req)
    {
        $add = new front_desk_patients;
        $add->patient_id = $req->patient_id;
        $add->user_id = $req->user_id;
        $add->unit = $req->unit;
        $add->booking_status = $req->booking_status;
        $add->name = $req->name;
        $add->phone_number = $req->phone_number;
        $add->age = $req->age;
        $add->residence = $req->residence;
        $add->husband_name = $req->husband_name;
        $add->occupation = $req->occupation;
        $add->blood_group_and_rh = $req->blood_group_and_rh;
        $add->allergies = $req->allergies;
        $add->nationality = $req->nationality;

        $result = $add->save();
        if ($result) {
            return ['result' => 'data is saved'];
        } else {
            return ['result' => 'result is failed'];
        }
    }
    
    /*
    * function name : search_patients 
    * function job  : function to search for post_front_desk_patients by patient_id or name in api
    * Parameters    : $patient_id_or_name
    * Return        : specific front_desk_patients from the database
    */
    public function search_patients($patient_id_or_name)
    {
        if ($patient_id_or_name == "") {
            return front_desk_patients::all();
        } else {
            return front_desk_patients::where('patient_id', $patient_id_or_name)->orwhere('name', 'LIKE', "%$patient_id_or_name%")->get();
        }
    }
    public function today_patient_count(){
        return front_desk_patients::whereDate('date', Carbon::today())->count();
    }
    public function year_pationt_count(){
        $users = front_desk_patients::select('id', 'date')
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

    public function front_desk_patients_start_end_date(Request $req)
    {
        return front_desk_patients::whereBetween('date', [$req->start,$req->end])
        ->orWhereBetween('date', [$req->start, $req->end])->get();
    }
    public function front_desk_patients_start_end_date_count(Request $req)
    {
        return front_desk_patients::whereBetween('date', [$req->start,$req->end])
        ->orWhereBetween('date', [$req->start, $req->end])->count();
    }
    
    /*
    * Function Name : get_all_front_desk_patients_counts
    * Function Job  : retrieve vice_doctor_regular_drugs from api determined by $patient_id
    * Return        : routes all vice_doctor_regular_drugs from the database determined by $patient_id
    */
    public function get_all_front_desk_patients_counts()
    {
        return front_desk_patients::all()->count();
    }

}
