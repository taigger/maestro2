<?php

namespace App\Http\Controllers\Teacher\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::TEACHER_HOME;

    public function __construct()
    {
        $this->middleware('guest:teacher')->except('logout');
    }

    protected function guard()
    {
        return Auth::guard('teacher');
    }

    public function showLoginForm()
    {
        return view('teacher.auth.login');
    }

    public function logout(Request $request)
    {
        Auth::guard('teacher')->logout();

        return $this->loggedOut($request);
    }

    public function loggedOut(Request $request)
    {
        return redirect(route('teacher.login'));
    }
}