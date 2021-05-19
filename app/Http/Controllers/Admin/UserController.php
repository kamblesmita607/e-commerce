<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Auth\User\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(Request $request)
    {   
        // DB::enableQueryLog();
        // $user = User::get();
        // $query = DB::getQueryLog();
        // print_r($query);

         //for session user id 
        // return Auth::id();

        // for all user list
        //return User :: all();

        // $data = User :: all();

        // $sesssion_user_id = Auth::id();

        // $single_user_data = User::where('id', '=', $sesssion_user_id)->get();
        // $user_role_id = $single_user_data[0]->role;
        // $user_role = Role::where('id', '=', $user_role_id)->get();
        // $data['user_role_name'] = $user_role[0]->name;

        
        // $user = User::get();
        // $data['all_user_data'] = User::where('is_active', '=', 'Y')->get();
        $data= DB::table('users')->paginate(5);
        
        
    	return view('admin.users.index',['users'=> $data]);
        //return '1';
    }

    public function create()
    {
         return view('admin.users.create');
    }
}
