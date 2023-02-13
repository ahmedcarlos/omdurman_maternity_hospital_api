<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\front_desk_statistics_supplement;

class front_desk_statistics_supplement_controller extends Controller
{
    public function get_front_desk_statistics_supplement($patient_id)
    {
        return front_desk_statistics_supplement::where('patient_id',$patient_id)->get();
    }
    
    //
    public function post_front_desk_statistics_supplement(Request $req)
    {
        $add = new front_desk_statistics_supplement;
        $add->patient_id = $req->patient_id;
        $add->user_id = $req->user_id;
        $add->baby_name = $req->baby_name;
        $add->baby_gender = $req->baby_gender;
        $add->baby_status = $req->baby_status;
        $add->baby_type = $req->baby_type;
        $add->birth_date = $req->birth_date;
        $add->birth_place = $req->birth_place;
        $add->mothers_education = $req->mothers_education;
        $add->mother_industry = $req->mother_industry;
        $add->marriage_duration = $req->marriage_duration;
        $add->establish_marriage = $req->establish_marriage;
        $add->father_name = $req->father_name;
        $add->father_age = $req->father_age;
        $add->number_of_miscarriages = $req->number_of_miscarriages;
        $add->baby_arrangement = $req->baby_arrangement;
        $add->fathers_nationality = $req->fathers_nationality;
        $add->religion = $req->religion;
        $add->operation_type = $req->operation_type;
        $add->father_industry = $req->father_industry;
        $add->fathers_education = $req->fathers_education;
        $add->normal_position_shape = $req->normal_position_shape;
        $add->fathers_residence = $req->fathers_residence;
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
