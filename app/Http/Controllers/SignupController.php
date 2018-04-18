<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class SignupController extends Controller
{
    public function index()
    {
        return view('signup.index');
    }



    public function studentSignup (Request $request)
    {
        //echo $request->Gender;
         $u = new Users();
         $u->name= $request->name;
         $u->email= $request->email;
         $u->gender= $request->Gender;
         $u->password= $request->password;
         $u->role= "student"; 
         $u->blocked= 0;
         $u->save();

     	return redirect('/signup');
 
    }
}
