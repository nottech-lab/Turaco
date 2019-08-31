<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    
    public function store(Request $request){
        
        $request->validate ([
            'name'=>'required|regex:/^[\pL\s\-]+$/u',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:8|max:20',
            'password_confirmation'=> 'required|min:8|max:20|same:password',
          ]);


        $name =$request->input('name');
        $email =$request->input('email');
        $password = $request ->input('password');
        DB::insert('insert into users(id,name,email,password) values(?,?,?,?)',[null,$name,$email,$password]);
        return "Verify your email by clicking the link sent to your email";
}
}
