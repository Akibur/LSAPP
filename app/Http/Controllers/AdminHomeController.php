<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\course;
use App\Users;


class AdminHomeController extends Controller
{
    public function index() {
        return view('adminHome.index');
    }

    //render create course page
    public function createCourse() {
        return view('createCourse.index');
    }

    //render create teacher page

    public function createTeacher() {
        return view('createTeacher.index');
    }


    //Stores new course in database
    public function storeCourse(Request $request) {
        
        $c = new course();
        $c->code= $request->courseCode;
        $c->name= $request->courseName;
        $c->enroll_limit= $request->studentLimit;
         $c->teacher=Null;
         $c->user_id=Null;

        $c->save();
        
        
        return redirect('/createCourse');
    }

    //Stores new course in database
    public function storeTeacher(Request $request) {
        
        $u = new Users();
         $u->name= $request->name;
         $u->email= $request->email;
         $u->gender= $request->Gender;
         $u->password= $request->password;
         $u->role= "teacher"; 
         $u->blocked= 0;
         $u->save();

     	return redirect('/createTeacher');
        
     }



}
