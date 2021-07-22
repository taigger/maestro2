<?php


namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;



class CommentController extends Controller
{
    
     public function index()
    {
        $comments = Comment::get();
        return view('home', ['comments' => $comments]);
    }
    
    public function showform($id){
          $teacher = Teacher::find($id);
          $comments = Comment::get();
         return view('user.chat',['comments' => $comments,'teacher'=>$teacher]);
     }
    
    public function add(Request $request,$id)
{   
    $teacher = Teacher::find($id);
    $user = Auth::user();
    $comment = $request->input('comment');
    Comment::create([
        'login_id' => $user->id,
        'name' => $user->name,
        'comment' => $comment
    ]);
    return redirect()->route('user.add',['id' => $teacher]);
}
    
}