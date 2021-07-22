<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Teacher;
use App\Models\Lesson;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:teacher');
    }

    public function index()
    {   
        $teacher = Auth::user();
        // $id = Auth::id();
        $lessons = Lesson::where('teacher_id', $teacher->id)->get(); 
        // $lesson = Lesson::with('teacher')->where('teacher_id', $id)->first();
        return view('teacher.home',['teacher' => $teacher],['lessons' => $lessons]);
    }
    
       public function newinfo(){
          return view('teacher.newinfo');
    }
    
        public function store(Request $request)
    {
        //以下に登録処理を記述（E loquentモデル）
        // まずはじめにユーザー登録をする。
        $teachers = Auth::user();
        $teachers ->sex = $request->sex;
        $teachers ->state = $request->state;
        $teachers ->instrament = $request->instrament;
        $teachers ->introsuction = $request->introsuction;
        $teachers ->save();
        
        return redirect('teacher/home');
    }
    
    

}