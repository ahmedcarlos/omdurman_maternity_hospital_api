<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class users_controller extends Controller
{
    /*
    * Function Name : get_users
    * Function Job  : retrieve user from api
    * Parameters    : $national_id
    * Return        : routes user from the database
    */
    public function get_users($national_id)
    {
        return User::where('national_id', $national_id)->get();
    }
    
    /*
    * Function Name : get_all_users
    * Function Job  : retrieve all users from api
    * Return        : routes all users from the database
    */
    public function get_all_users()
    {
        return User::all();
    }
    
    /*
    * function name : post_login 
    * function job  : function to send request to users in api 
    * Parameters    : $request
    * Return        : user and token from  the database if the request true else is failed
    */
    public function post_login(Request $request)
    {
        $data = $request->validate([
            "national_id" => "required", // min:8|max:8
            "password" => "required"
        ]);

        if (!Auth::attempt($data)) {
            abort(403);
        }

        $user =  User::where('national_id', $data['national_id'])->first();
        $token = $request->user()->createToken("login");

        return response()->json([
            "user" => $user,
            "token" => $token->plainTextToken
        ]);
    }

    public function login($national_id, $password)
    {

        return User::where('national_id', $national_id)->where('password', $password)->get();
    }

    //
    public function post_users(Request $req)
    {
        $add = new User;
        $add->user_id = $req->user_id;
        $add->first_name = $req->first_name;
        $add->last_name = $req->last_name;
        $add->national_id = $req->national_id;
        $add->phone_number = $req->phone_number;
        $add->nationality = $req->nationality;
        $add->designation = $req->designation;
        $add->status = $req->status;
        $add->password = bcrypt($req->password);
        $add->gender = $req->gender;
        $result = $add->save();
        if ($result) {
            return ['result' => 'data is saved'];
        } else {
            return ['result' => 'result is failed'];
        }
    }

    public function update_user(Request $req)
    {
        $user = User::find($req->id);
        $user->user_id = $req->user_id;
        $user->first_name = $req->first_name;
        $user->last_name = $req->last_name;
        $user->national_id = $req->national_id;
        $user->phone_number = $req->phone_number;
        $user->nationality = $req->nationality;
        $user->designation = $req->designation;
        $user->status = $req->status;
        $user->gender = $req->gender;
        $user->password = bcrypt($req->password);
        $result = $user->save();
        if ($result) {
            return ['result' => 'data is saved'];
        } else {
            return ['result' => 'result is failed'];
        }
    }
    public function search_users($national_id_or_name)
    {
        if ($national_id_or_name == "") {
            return User::all();
        } else {
            return User::where('national_id', $national_id_or_name)->orwhere('first_name', 'LIKE', "%$national_id_or_name%")->get();
        }
    }
    public function delete_user($id)
    {
        $user = User::find($id);
        $result = $user->delete();
        if ($result) {
            return ['result' => 'data is deleted'];
        } else {
            return ['result' => 'result is failed'];
        }
    }
    public function all_user_count()
    {
        return User::all()->count();
    }
    public function vice_doctor_count()
    {
        return User::where("designation","Vice Doctor")->count();
    }
    public function statistician_count()
    {
        return User::where("designation","Statistician")->count();
    }
    public function nurse_count()
    {
        return User::where("designation","Nurse")->count();
    }
    public function General_Doctor_count()
    {
        return User::where("designation","General Doctor")->count();
    }
    public function Male_count()
    {
        return User::where("gender","Male")->count();
    }
    public function Female_count()
    {
        return User::where("gender","Female")->count();
    }
    ///////////////
    public function Vice_count()
    {
        return User::where("status","Vice")->count();
    }
    public function Advisor_count()
    {
        return User::where("status","Advisor")->count();
    }
    public function Specialist_count()
    {
        return User::where("status","Specialist")->count();
    }
    public function General_count()
    {
        return User::where("status","General")->count();
    }
    public function Excellence_count()
    {
        return User::where("status","Excellence")->count();
    }
    public function National_Service_count()
    {
        return User::where("status","National Service")->count();
    }
    public function Collaboratore_count()
    {
        return User::where("status","Collaborator")->count();
    }
    public function all_counts()
    {
        $all_user = User::all()->count();
        $Vice_Doctor_count = User::where("designation","Vice Doctor")->count();
        $Statistician_count = User::where("designation","Statistician")->count();
        $Nurse_count = User::where("designation","Nurse")->count();
        $General_Doctor_count = User::where("designation","General Doctor")->count();
        $Male_count = User::where("gender","Male")->count();
        $Female_count = User::where("gender","Female")->count();
        $Vice_count = User::where("status","Vice")->count();
        $Advisor_count = User::where("status","Advisor")->count();
        $Specialist_count = User::where("status","Specialist")->count();
        $General_count = User::where("status","General")->count();
        $Excellence_count = User::where("status","Excellence")->count();
        $National_Service_count =User::where("status","National Service")->count();
        $Collaborator_count = User::where("status","Collaborator")->count();
        
            return
             [
                'all_user' =>  $all_user,
                'Vice_Doctor_count' =>  $Vice_Doctor_count,
                'Statistician_count' =>  $Statistician_count,
                'Nurse_count' =>  $Nurse_count,
                'General_Doctor_count' =>  $General_Doctor_count,
                'Male_count' =>  $Male_count,
                'Female_count' =>  $Female_count,
                'Vice_count' =>  $Vice_count,
                'Advisor_count' =>  $Advisor_count,
                'Specialist_count' =>  $Specialist_count,
                'General_count' =>  $General_count,
                'Excellence_count' =>  $Excellence_count,
                'National_Service_count' =>  $National_Service_count,
                'Collaborator_count' =>  $Collaborator_count,

        
        ];
        
    }


    public function user_start_end_date(Request $req)
    {
        return User::whereBetween('date', [$req->start,$req->end])
        ->orWhereBetween('date', [$req->start, $req->end])->get();
    }
    public function user_start_end_date_count(Request $req)
    {
        return User::whereBetween('date', [$req->start,$req->end])
        ->orWhereBetween('date', [$req->start, $req->end])->count();
    }
}
