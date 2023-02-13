<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vice_doctor_blood_products_and_i_v_fluids;

class vice_doctor_blood_products_and_i_v_fluids_controller extends Controller
{
    public function get_vice_doctor_blood_products_and_i_v_fluids($patient_id)
    {
        return vice_doctor_blood_products_and_i_v_fluids::where('patient_id',$patient_id)->get();
    }
    
    //
    public function post_vice_doctor_blood_products_and_i_v_fluids(Request $req)
    {
        $add = new vice_doctor_blood_products_and_i_v_fluids;
        $add->patient_id = $req->patient_id;
        $add->user_id = $req->user_id;
        $add->blood_product_and_iv_fluid = $req->blood_product_and_iv_fluid;
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
