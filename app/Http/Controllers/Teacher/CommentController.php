<?php


namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Models\Comment;
use Auth;


class CommentController extends Controller
{
    
     public function index()
    {
        $comments = Comment::get();
        return view('chat', ['comments' => $comments]);
    }
    
     public function showform(){
          $comments = Comment::get();
         return view('teacher.chat',['comments' => $comments]);
     }
    
    public function add(Request $request)
{
    $comments = Comment::get();
    $user = Auth::user();
    $comment = $request->input('comment');
    Comment::create([
        'login_id' => $user->id,
        'name' => $user->name,
        'comment' => $comment
    ]);
    return redirect()->route('teacher.add');
}
    
}