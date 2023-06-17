<?php

namespace App\Http\Controllers;

use Session;
use App\Models\User;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile()
    {
        $id = auth()->user();
        return view('user.profile', compact('id'));
    }

    public function update_profile(Request $request, $id)
    {
        $profile = User::findOrfail($id);
        $profile->update($request->all());

        return redirect()->back()->with('status', 'Profile berhasil diperbaharui');
    }

    public function tambah_appointment(Request $request)
    {
        $user = Appointment::create($request->all());                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             
    
        return redirect()->back()->with('status', 'Appointment berhasil dibuat');
    }

    public function logout()
    {
        Session::flush();
        
        Auth::logout();

        return view('auth.login');
    }

    public function appointment_user()
    {
        $i = auth()->user();
        $u = DB::table('appointments')->where('user_id', $i->id)->get();
        // $a = Appointment::all();
        return view('user.appointment', compact('u'));
    }

    public function delete_appointment_user($id)
    {
        $a = Appointment::find($id);
        $a->delete();
        return redirect()->back()->with('status', 'Appointmment berhasil dihapus');
    }
}
