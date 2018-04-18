<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Users;

class SigninController extends Controller
{
    public function index()
    {
        return view('signin.index');
    }


    public function verify(Request $request)
    {
        //$sql = "SELECT * FROM users WHERE username='$request->username' AND password='$request->password'";
        //$result = DB::select($sql);

        // $result = DB::table('users')
        //     ->where('email', $request->email)
        //     ->where('password', $request->password)
        //     ->first();


        //using user model to retrive data of the user 



        $conditionArray = ['email' => $request->email, 'password' => $request->password];

        $result = Users::where($conditionArray)
        ->first();

        //echo $result;
        //Null for cheking user auth
        $name = NULL;
         
            $name =$result->name;
          $role=  $result->role;
          $blocked = $result->blocked;

          
 
        // $role = $result->role;
        // echo 
        if($name != NULL)
    	{

           // echo $result;
            
            //Check role of user and redirect accordingly
             if ($role== "admin" && $blocked == 0) {
                
                 // create session entry
                 $request->session()->put('user', $result);

                 return redirect('/adminHome');
                 echo  "admin login sucess";
             } 
             
             else if ($role == "student" && $blocked == 0) {
                echo  "stuedent login sucess";
            } 

            else if ($role== "teacher" && $blocked == 0) {
                echo  "teacher login sucess";
            } 

            else 
                echo "Your account is blocked";

    	}
    	else
    	{
    		echo 'Invalid username or password';
    	}
    }
}
