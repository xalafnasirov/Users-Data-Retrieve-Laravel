<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserProfile;
use Illuminate\Http\RedirectResponse;



class user_profile extends Controller
{
    public function index() {
        $users_data = new UserProfile();
        $all_users = $users_data::all();
        return view ('user_profile', compact('all_users'));
    } 

    public function add_user(Request $req): RedirectResponse{
        // post new user to database

        // $rec_users = array();

        // $rec_users['name'] = $req->name;
        // $rec_users['age'] = $req->age;
        // $rec_users['gender'] = $req->gender;
        // $rec_users['married'] = $req->married;
        // $rec_users['profession'] = $req->profession;


        // return DD($rec_users);

        $users_data = new UserProfile();

        $users_data->name = $req->name;
        $users_data->age = $req->age;
        $users_data->gender = $req->gender;
        $users_data->married = ($req->married == 'married') ?  1 : 0;
        $users_data->profession = $req->profession;
        $users_data->save();

        return redirect('/users')->with('status','Succesfully added!!!');
    }
}
