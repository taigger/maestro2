<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\Teacher;
use App\Models\Reserve;
use App\Models\Lesson;
use App\Models\User;


class ReserveController extends Controller
{
    function create($id){
        $user = Auth::user();
        $reserve = new Reserve;
        $reserve->lesson_id = $id;
       $reserve->reserve_mail = $user->email;
        $reserve->reserve_name = $user->name;
        $reserve->user_id = Auth::id();
       $reserve->save(); 
       
       $lesson = Lesson::find($id);
        
        return view('user/reserve',['lesson'=>$lesson]);
    }
    
    function show(){
        $user = Auth::user();
        // $id = Auth::id();
        $reserves = Reserve::where('user_id', $user->id)->get(); 
        
          return view('user/showreserves',['reserves'=>$reserves]);
    }
}
