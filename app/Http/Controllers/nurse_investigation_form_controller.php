<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nurse_investigation_form;
class nurse_investigation_form_controller extends Controller
{
    public function get_nurse_investigation_form($patient_id)
    {
        return nurse_investigation_form::where('patient_id',$patient_id)->get();
    }
    
    //
    public function post_nurse_investigation_form(Request $req)
    {
        $add = new nurse_investigation_form;
        $add->patient_id = $req->patient_id;
        $add->user_id = $req->user_id;
        $add->urine_analysis_color = $req->urine_analysis_color;
        $add->urine_analysis_cells = $req->urine_analysis_cells;
        $add->urine_analysis_sugar = $req->urine_analysis_sugar;
        $add->urine_analysis_proteins = $req->urine_analysis_proteins;
        $add->urine_analysis_cream_stains = $req->urine_analysis_cream_stains;
        $add->urine_analysis_zn_stain = $req->urine_analysis_zn_stain;
        $add->urine_analysis_clutures_and_sensitivity = $req->urine_analysis_clutures_and_sensitivity;
        $add->stool_analysis_color = $req->stool_analysis_color;
        $add->stool_analysis_cells = $req->stool_analysis_cells;
        $add->stool_analysis_sugar = $req->stool_analysis_sugar;
        $add->stool_analysis_proteins = $req->stool_analysis_proteins;
        $add->stool_analysis_cream_stains = $req->stool_analysis_cream_stains;
        $add->stool_analysis_zn_stain = $req->stool_analysis_zn_stain;
        $add->stool_analysis_clutures_and_sensitivity = $req->stool_analysis_clutures_and_sensitivity;
        $add->csf_color = $req->csf_color;
        $add->csf_cells = $req->csf_cells;
        $add->csf_sugar = $req->csf_sugar;
        $add->csf_proteins = $req->csf_proteins;
        $add->csf_cream_stains = $req->csf_cream_stains;
        $add->csf_zn_stain = $req->csf_zn_stain;
        $add->csf_clutures_and_sensitivity	 = $req->csf_clutures_and_sensitivity	;
        $add->pleural_fluid_color = $req->pleural_fluid_color;
        $add->pleural_fluid_cells = $req->pleural_fluid_cells;
        $add->pleural_fluid_sugar = $req->pleural_fluid_sugar;
        $add->pleural_fluid_proteins = $req->pleural_fluid_proteins;
        $add->pleural_fluid_cream_stains = $req->pleural_fluid_cream_stains;
        $add->pleural_fluid_zn_stain = $req->pleural_fluid_zn_stain;
        $add->pleural_fluid_clutures_and_sensitivity = $req->pleural_fluid_clutures_and_sensitivity;
        $add->peritoneal_fluid_color = $req->peritoneal_fluid_color;
        $add->peritoneal_fluid_cells = $req->peritoneal_fluid_cells;
        $add->peritoneal_fluid_sugar = $req->peritoneal_fluid_sugar;
        $add->peritoneal_fluid_proteins = $req->peritoneal_fluid_proteins;
        $add->peritoneal_fluid_cream_stains = $req->peritoneal_fluid_cream_stains;
        $add->peritoneal_fluid_zn_stain = $req->peritoneal_fluid_zn_stain;
        $add->peritoneal_fluid_clutures_and_sensitivity = $req->peritoneal_fluid_clutures_and_sensitivity;
        $add->vaginal_swab_color = $req->vaginal_swab_color;
        $add->vaginal_swab_cells = $req->vaginal_swab_cells;
        $add->vaginal_swab_sugar = $req->vaginal_swab_sugar;
        $add->vaginal_swab_proteins = $req->vaginal_swab_proteins;
        $add->vaginal_swab_cream_stains = $req->vaginal_swab_cream_stains;
        $add->vaginal_swab_zn_stain = $req->vaginal_swab_zn_stain;
        $add->vaginal_swab_clutures_and_sensitivity = $req->vaginal_swab_clutures_and_sensitivity;
        $add->puss_color = $req->puss_color;
        $add->puss_cells = $req->puss_cells;
        $add->puss_cream_stains = $req->puss_cream_stains;
        $add->puss_zn_stain = $req->puss_zn_stain;
        $add->puss_clutures_and_sensitivity = $req->puss_clutures_and_sensitivity;
        $add->cultures_speciment_1 = $req->cultures_speciment_1;
        $add->cultures_speciment_2 = $req->cultures_speciment_2;
        $add->cultures_speciment_3 = $req->cultures_speciment_3;
        $add->cultures_speciment_4 = $req->cultures_speciment_4;
        $add->cultures_speciment_5 = $req->cultures_speciment_5;
        $add->biopsies_speciment_1 = $req->biopsies_speciment_1;
        $add->biopsies_speciment_2 = $req->biopsies_speciment_2;
        $add->biopsies_speciment_3 = $req->biopsies_speciment_3;
        $add->bone_marrow = $req->bone_marrow;
        $add->hiv = $req->hiv;
        $add->hepatitis_b = $req->hepatitis_b;
        $add->hepatitis_c = $req->hepatitis_c;
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
