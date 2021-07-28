<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Teacher;
use App\Models\Lesson;


class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     * 
     * 
     */
     
    public function store(Request $request)
    {   
        $lesson = new Lesson;
        $lesson->title = $request->title;
        $lesson->coment = $request->coment;
        $lesson->price = $request->price;
        $lesson->teacher_id = Auth::id();
        $lesson->instrament = $request->instrament;
        $lesson->save(); 
        
        return redirect('teacher/home');
    }
    
       public function newlesson(){
        return view('teacher.lesson_register');
   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
     public function show(lesson $lessons)
    {
         $lesson = Lesson::find($id);
        return view('lesson', ['lesson' => $lesson]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lesson $id)
    {
    $lesson = Lesson::findOrFail($id);
    $lesson->delete();       //追加
    return redirect('teacher/home');  //追加
    }
}
