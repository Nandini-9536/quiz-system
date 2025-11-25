<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;


class AdminController extends Controller
{
    //
    function login(Request $request){

        $validation =  $request->validate([
            "name"=> "required",
            "password"=> "required",
        ]);
        
        $admin =  Admin::where([
            ['name',"=",$request->name],
            ['password',"=",$request->password],
        ])->first();
        // return $request->input();
        // return $admin;
        // return $admin->name;
        if(!$admin){
             $validation =  $request->validate([
            "user"=> "required",
        ],["user.required"=>"User does not exist"]);

        }
        
        Session::put('admin',$admin);       // return view('admin',["name"=>$admin->name]);
        return redirect('dashboard');

    }

    function dashboard(){
        // return Session::get('admin');
        $admin= Session::get('admin');
        if($admin){
            return view('admin',["name"=>$admin->name]);
        }
        else{
            return redirect('admin-login');
        }
        
    }
}
