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
    * function job  : function to send request to users in api and check if he is authorized user
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

    /*
    * function name : post_users 
    * function job  : function to send request to users in api
    * Parameters    : $req
    * Return        : save users in the database if the request true else is failed
    */
    public function post_users(Request $req)
    {
        $add = new User;
        $add->user_id = $req->user_id;
        $add->full_name = $req->full_name;
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
    
    /*
    * function name : update_user 
    * function job  : send request to user in api and update user fields
    * Parameters    : $req
    * Return        : update user in the database if the request true else is failed
    */
    public function update_user(Request $req)
    {
        $user = User::find($req->id);
        $user->user_id = $req->user_id;
        $user->full_name = $req->full_name;
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
    
    /*
    * function name : search_users 
    * function job  : send request to user and search in api
    * Parameters    : $national_id_or_name
    * Return        : user information in the database if the request true else is failed
    */
    public function search_users($national_id_or_name)
    {
        if ($national_id_or_name == "") {
            return User::all();
        } else {
            return User::where('national_id', $national_id_or_name)->orwhere('full_name', 'LIKE', "%$national_id_or_name%")->get();
        }
    }
    
    /*
    * function name : delete_user 
    * function job  : delete user record in the database
    * Parameters    : $id
    * Return        : data is deleted if $id is true else result is failed
    */
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
    
    
     /*
    * function name : all_user_count
    * function job  : calculates statistics in the users table 
    * Return        : number of all users
    */
    public function all_user_count()
    {
        return User::all()->count();
    }
    
    /*
    * function name : vice_doctor_count
    * function job  : calculates statistics in the user table between designation and Vice Doctor 
    * Return        : number of Vice Doctor in the database
    */
    public function vice_doctor_count()
    {
        return User::where("designation","Vice Doctor")->count();
    }
    
    /*
    * function name : statistician_count
    * function job  : calculates statistics in the user table between designation and Statistician 
    * Return        : number of Statistician in the database
    */
    public function statistician_count()
    {
        return User::where("designation","Statistician")->count();
    }
    
    /*
    * function name : nurse_count
    * function job  : calculates statistics in the user table between designation and Nurse 
    * Return        : number of Nurse in the database
    */
    public function nurse_count()
    {
        return User::where("designation","Nurse")->count();
    }
    
    /*
    * function name : General_Doctor_count
    * function job  : calculates statistics in the user table between designation and General Doctor 
    * Return        : number of General_Doctor_count in the database
    */
    public function General_Doctor_count()
    {
        return User::where("designation","General Doctor")->count();
    }
    
    /*
    * function name : Male_count
    * function job  : calculates statistics in the user table between gender and Male 
    * Return        : number of Male in the user table
    */
    public function Male_count()
    {
        return User::where("gender","Male")->count();
    }
    
    /*
    * function name : Female_count
    * function job  : calculates statistics in the user table between gender and Female 
    * Return        : number of Female in the user table
    */
    public function Female_count()
    {
        return User::where("gender","Female")->count();
    }
    
    /*
    * function name : Vice_count
    * function job  : calculates statistics in the user table between status and Vice 
    * Return        : number of Vice in the status field 
    */
    public function Vice_count()
    {
        return User::where("status","Vice")->count();
    }
    
    /*
    * function name : Advisor_count
    * function job  : calculates statistics in the user table between status and Advisor 
    * Return        : number of Advisor in the status field 
    */
    public function Advisor_count()
    {
        return User::where("status","Advisor")->count();
    }
    
    /*
    * function name : Specialist_count
    * function job  : calculates statistics in the user table between status and Specialist 
    * Return        : number of Specialist in the status field 
    */
    public function Specialist_count()
    {
        return User::where("status","Specialist")->count();
    }
    
    /*
    * function name : General_count
    * function job  : calculates statistics in the user table between status and General 
    * Return        : number of General in the status field 
    */
    public function General_count()
    {
        return User::where("status","General")->count();
    }
    
    /*
    * function name : Excellence_count
    * function job  : calculates statistics in the user table between status and Excellence 
    * Return        : number of Excellence in the status field 
    */
    public function Excellence_count()
    {
        return User::where("status","Excellence")->count();
    }
    
    /*
    * function name : National_Service_count
    * function job  : calculates statistics in the user table between status and National Service 
    * Return        : number of National Service in the status field 
    */
    public function National_Service_count()
    {
        return User::where("status","National Service")->count();
    }
    
    /*
    * function name : Collaboratore_count
    * function job  : calculates statistics in the user table between status and Collaborator 
    * Return        : number of Collaborator in the status field 
    */
    public function Collaboratore_count()
    {
        return User::where("status","Collaborator")->count();
    }
    
    /*
    * function name : all_counts
    * function job  : calculates statistics in the user table for the designation, gender 
                      and status records
    * Return        : number of all users, vice doctors, nurses, Statistician, General Doctor,
                      Male, Female, Vice, Advisor, Specialist, General, Excellence, 
                      National Service and Collaborator in the status field 
    */
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
    
    /*
    * function name : user_start_end_date
    * function job  : retrieve date between start and end date 
    * Return        : number of National Service in the status field 
    */
    public function user_start_end_date(Request $req)
    {
        return User::whereBetween('date', [$req->start,$req->end])
        ->orWhereBetween('date', [$req->start, $req->end])->get();
    }
    
    /*
    * function name : user_start_end_date_count
    * function job  : calculates statistics in the user table in the date field 
                      between start and end date
    * Return        : date from start to end
    */
    public function user_start_end_date_count(Request $req)
    {
        return User::whereBetween('date', [$req->start,$req->end])
        ->orWhereBetween('date', [$req->start, $req->end])->count();
    }
}
