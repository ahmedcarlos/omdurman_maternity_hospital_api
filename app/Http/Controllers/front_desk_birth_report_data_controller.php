<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\front_desk_birth_report_data;
class front_desk_birth_report_data_controller extends Controller
{
    /*
    * Function Name : get_front_desk_birth_report_data ****
    * Function Job  : function to get front_desk_birth_report_data from api
    * Parameters    : $patient_id
    * Return        : routes all front_desk_birth_report_data from
    */
    public function get_front_desk_birth_report_data($patient_id)
    {
        return front_desk_birth_report_data::where('patient_id',$patient_id)->get();
    }

    /*
    * function name : post_front_desk_birth_report_data ****
    * function job  : function to send request to front_desk_birth_report_data in api
    * Parameters    : $req
    * Return        : save all front_desk_birth_report_data in the database
    */
    public function post_front_desk_birth_report_data(Request $req)
    {
        $add = new front_desk_birth_report_data;
        $add->patient_id = $req->patient_id;
        $add->user_id = $req->user_id;
        $add->birth_date = $req->birth_date;
        $add->Fetal_birth_hour = $req->Fetal_birth_hour;
        $add->birth_type = $req->birth_type;
        $add->placenta_birth_hour = $req->placenta_birth_hour;
        $add->blood_quantity = $req->blood_quantity;
        $add->newborn_status = $req->newborn_status;
        $add->birth_weight = $req->birth_weight;
        $add->breast_feeding_practice = $req->breast_feeding_practice;
        $add->wound = $req->wound;
        $add->vitamin_k = $req->vitamin_k;
        $add->token = $req->token;
        $add->baby_type = $req->baby_type;
        $add->baby_kind = $req->baby_kind;
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
    
    /*
    * function name : New_born_counts
    * function job  : calculates statistics in the baby_type field between Male and Female 
    * Return        : number of female and male in the baby_type field
    */
    public function New_born_counts()
    {
        $Male_count = front_desk_birth_report_data::where("baby_type","Male")->count();
        $Female_count = front_desk_birth_report_data::where("baby_type","Female")->count();

    }
    
    /*
    * function name : Newborn_status_count
    * function job  : calculates statistics in the newborn_status field 
    * Return        : number of baby alive, dead, scavenger and Died after birth in the newborn_status field
    */
    public function Newborn_status_count(){
        $Alive_count = front_desk_birth_report_data::where("newborn_status","Alive")->count();
        $Dead_count = front_desk_birth_report_data::where("newborn_status","Dead")->count();
        $Scavenger_count = front_desk_birth_report_data::where("newborn_status","Scavenged")->count();
        $Died_after_birth_count = front_desk_birth_report_data::where("newborn_status","Died after birth")->count();
        return
        [
           'Alive_count' =>  $Alive_count,
           'Dead_count' =>  $Dead_count,
           'Scavenger_count' =>  $Scavenger_count,
           'Died_after_birth_count' =>  $Died_after_birth_count,

        ];
    }
    
    /*
    * function name : Baby_male_count
    * function job  : calculates statistics in the baby_type field for baby kind twins
    * Return        : number of male twins int the baby_type field
    */
    public function Baby_male_count()
    {
        $m1= front_desk_birth_report_data::where("baby_type","Male")->count();
        $m2=front_desk_birth_report_data::where("baby_type","Male")->where('baby_kind','twins')->count();
        return $m1 + $m2;
    }
     /*
    * function name : Baby_male_count
    * function job  : calculates statistics in the baby_type field for baby kind twins
    * Return        : number of male twins int the baby_type field
    */
    public function Baby_female_count()
    {
        $f1= front_desk_birth_report_data::where("baby_type","Female")->count();
        $f2=front_desk_birth_report_data::where("baby_type","Female")->where('baby_kind','twins')->count();
        return $f1+$f2;
    }
    public function Baby_female_male_count()
    {
        $m1= front_desk_birth_report_data::where("baby_type","Male")->count();
        $m2=front_desk_birth_report_data::where("baby_type","Male")->where('baby_kind','twins')->count();
        $f1= front_desk_birth_report_data::where("baby_type","Female")->count();
        $f2=front_desk_birth_report_data::where("baby_type","Female")->where('baby_kind','twins')->count();
        return
        [
           'male' =>  $m1+$m2,
           'female' =>  $f1+$f2,

        ];
    }
}

/*
"patient_id": 2028,
    "user_id": 508,
    "word": "some text",
    "bed_no": 10,
    "clinical_remarks": "something",
    "request": "no any request",
    "other": "there are many things"
*/
