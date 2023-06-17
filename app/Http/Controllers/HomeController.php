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
        $usertype = Auth::user()->usertype;

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

    // public function back()
    // {
    //     // $usertype = Auth::user()->usertype;

    //     if((Auth::check()) && Auth::user()->usertype == 0){
    //         return view('admin.user');
    //     } else {
    //         return view('user.home');
    //     }
    // }

    public function login()
    {
        return view('auth.login');
    }

    public function user()
    {
        $user = User::all();
        return view('admin.pengguna', compact('user'));
    }
}
