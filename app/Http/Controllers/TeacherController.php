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

        // $studentEnrolledPerCourse = 



   // return view('category.index', ['courses' => $courses]);
          return view('teacherHome.index', ['courses' => $courses]);

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
