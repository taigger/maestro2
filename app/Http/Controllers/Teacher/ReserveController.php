<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\Teacher;
use App\Models\Reserve;
use App\Models\Lesson ;
use App\Models\User ;


class ReserveController extends Controller
{
    
    function show($id){
        $teacher = Auth::user();
        $lesson =  Lesson::find($id);
        // $id = Auth::id();
        $reserves = Reserve::where('lesson_id', $lesson->id)->get(); 
        
          return view('teacher/showreserves',['reserves'=>$reserves]);
    }
}
