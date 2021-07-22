<?php

namespace App\Http\Controllers\Teacher\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use App\Models\Teacher;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::TEACHER_HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:teacher');
    }

    protected function guard()
    {
        return Auth::guard('teacher');
    }

    public function showRegistrationForm()
    {
        return view('teacher.auth.register');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'string', 'email', 'max:255', 'unique:teachers'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function create(array $data)
    {
        return Teacher::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => Hash::make($data['password']),
            
        ]);
    }
    public function store(Request $request)
    {
        //以下に登録処理を記述（E loquentモデル）
        // まずはじめにユーザー登録をする。
        $teachers = Auth::Teacher();
        $teachers ->sex = $request->sex;
        $teachers ->state = $request->state;
        $teachers ->instrament = $request->instrament;
        $teachers ->introsuction = $request->introsuction;
        $teachers ->save();
        
        return redirect('teacher.home');
    }
    
}