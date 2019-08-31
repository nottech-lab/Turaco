<?php

namespace App\Http\Controllers;

use App\User;
use DB;
use Illuminate\Http\Request;

class AuthController extends Controller
{  
    
    public function resetaction(Request $request){
    $request->validate ([
        'email'=>'required|email',
      ]);
    $email =$request->input('email');
    $data = DB::select('select id from users where email =?',[$email]);
    if (count($data)){    
        return "A password reset link is sent";
        
         };
        return back()-> withInput()->withErrors(['email'=>'Username email is not registered']);
             
}
     public function logs(Request $request){
    $request->validate ([
        'email'=>'required|email',
        'password'=>'required',
      ]);
    $email =$request->input('email');
    $password = $request ->input('password');
    $data = DB::select('select id from users where email =? and password =?',[$email,$password]);
    if (count($data)){  
        
        return view('pages.dashboard');
         };

             return back()-> withInput()->withErrors(['email'=>'Usename or Password is invalid']);
             
}

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
