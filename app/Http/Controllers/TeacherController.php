<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\course;

class TeacherController extends Controller
{
    public function index()
    {   

        $courses = DB::table('courses')
        ->get();



        $countArr = collect([]);


 
        foreach($courses as $course){
            if ( $course->user_id == session('user')->id ) {
                $studentCount = "N/A"; 
                $studentCount = DB::table('user_course')->where('course_id',$course->id)
                                                        ->where('request' ,'=', 'approved')
                                                        ->count('user_id');
                $countArr->push($studentCount);

               
            }

          
    }
   

          return view('teacherHome.index', ['courses' => $courses], ['countArr'=> $countArr]);

    }
    public function showProfile()
    {
        return view("teacherProfile.index");  
    }

    public function showEditTeacherProfile()
    {
        return view('teacherEditProfile.index');
    }
}
