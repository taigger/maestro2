<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Lesson;


class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:user');
    }

    public function index()
    {
        $teachers = Teacher::get();
        return view('user.home',[
            'teachers'=> $teachers
            ]);
    }
    
    public function newlesson(){
          return view('user.newinfo');
    }
    public function show($id)
    {
        $teacher = Teacher::find($id);
         $lessons = Lesson::where('teacher_id', $teacher->id)->get(); 
        return view('user.lesson', ['teacher' => $teacher],['lessons' => $lessons]);
    // $lesson = Lesson::where('lesson', $teachers->id);
        //
    }

}