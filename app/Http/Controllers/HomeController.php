<?php

namespace App\Http\Controllers;

use Session;
use App\Models\News;
use App\Models\User;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function redirect()
    {
        $usertype = Auth::user()->user_type;

        if($usertype == '1'){
            $user = User::all();
            return view('admin.pengguna', compact('user'));
        } else {
            // data user successfully found 
            $id = auth()->user();
            $doctor = Doctor::all();
            $news = News::all();
            return view('user.home', ['id'=>$id, 'doctor'=>$doctor, 'news'=>$news]);
        }
    }
    public function logout()
    {
        Session::flush();
        
        Auth::logout();

        return redirect('/');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function user()
    {
        $user = User::where('user_type', '=',  '0')->get();
        return view('admin.pengguna', compact('user'));
    }
}
