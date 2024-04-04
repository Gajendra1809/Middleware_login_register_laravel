<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view("auth.login");
    }

    public function loginPost(Request $request){
        $request->validate([
            "email"=> "required",
            "password"=> "required"
        ]);
        $user = User::where("email", $request->email)->first();
        if($user and $user->password==$request->password){
            return redirect(route("home"));
        }else{
            return redirect('login')->with('error','Invalid crediantials!');
        }
    }

    public function register(){
        return view("auth.register");
    }

    public function registerPost(Request $request){
        $request->validate([
            "name"=>"required",
            "email"=> "required",
            "password"=> "required"
        ]);

        $user=new User();
        $user->name= $request->name;
        $user->email= $request->email;
        $user->password= $request->password;

        if($user->save()){
            return redirect("login")->with("success","User Registered!");
        }
    }

    
}
