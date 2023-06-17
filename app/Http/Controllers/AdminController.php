<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function save_edit_appointmnet(Request $request, $id)
    {
        $a = Appointment::findOrfail($id);
        $a->update($request->all());

        return redirect()->back()->with('status', 'Appointment dikonfirmasi');
    }

    public function edit_appointment($id)
    {
        $a = Appointment::find($id);
        return view('admin.edit_appointment', compact('a'));
    }

    public function delete_appointment($id)
    {
        $a = Appointment::find($id);
        $a->delete();
        return redirect()->back()->with('status', 'Appointment berhasil dihapus');
    }

    public function appointment()
    {
        $a = Appointment::all();
        return view('admin.appointment', ['a'=>$a]);
    }

    public function user()
    {
        $user = User::all();
        return view('admin.pengguna', compact('user'));
    }

    public function tambah_user()
    {
        return view('admin.tambah_user');
    }

    public function save_user(Request $request)
    {
        $user = User::create($request->all());
    
        return redirect()->back()->with('status', 'User berhasil ditambahkan');
    }

    public function edit_user($id)
    {
        $user = User::find($id);
        return view('admin.edit_user', compact('user'));
    }

    public function save_edit_user(Request $request, $id)
    {
        $user = User::findOrfail($id);
        $user->update($request->all());

        return redirect()->back()->with('status', 'Data user berhasil diedit');
    }

    public function hapus_user($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->back()->with('status', 'Data user berhasil dihapus');
    }
    // public function page()
    // {
    //     return view('design.index');
    // }

    public function dokter()
    {
        $doc = Doctor::all();
        return view('admin.dokter', compact('doc'));
    }

    public function tambah()
    {
        return view('admin.tambah');
    }

    public function tambah_dokter(Request $request)
    {
        // $doc = Doctor::create($request->all());
        
        $doctor = new Doctor;

        $doctor->name = $request->name;
        $doctor->spesialis = $request->spesialis;
        $doctor->email = $request->email;
        $doctor->no_hp = $request->no_hp;

        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('image', $imagename);

        $doctor->image = $imagename;

        $doctor->save();
        return redirect()->back()->with('status', 'Data dokter berhasil ditambahkan');
    }

    public function delete_dokter($id)
    {
        $doc = Doctor::find($id);
        $doc->delete();
        return redirect()->back()->with('status', 'Data dokter berhasil dihapus');
    }

    public function edit_dokter($id)
    {
        $doc = Doctor::find($id);
        return view('admin.edit_dokter', compact('doc'));
    }

    public function save_edit_dokter(Request $request, $id)
    {
        // $doc = Doctor::findOrfail($id);
        // $doc->update($request->all());

        $doctor = Doctor::find($id);

        $doctor->name = $request->name;
        $doctor->spesialis = $request->spesialis;
        $doctor->email = $request->email;
        $doctor->no_hp = $request->no_hp;

        $image = $request->image;

        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('image', $imagename);
            $doctor->image = $imagename;
        }

        $doctor->update();


        return redirect()->back()->with('status', 'Data dokter berhasil diedit');
    }

    // artikel
    public function artikel()
    {
        $artikel = News::all();
        return view('admin.artikel', compact('artikel'));
    }

    public function tambah_artikel()
    {
        return view('admin.tambah_artikel');
    }

    public function save_artikel(Request $request)
    {
        // $artikel = News::create($request->all());
        $artikel = new News;

        $artikel->tanggal = $request->tanggal;
        $artikel->judul = $request->judul;
        $artikel->preview = $request->preview;
        $artikel->isi1 = $request->isi1;
        $artikel->isi2 = $request->isi2;

        $image = $request->image;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('image', $imagename);

        $artikel->image = $imagename;

        $artikel->save();

        return redirect()->back()->with('status', 'Artikel berhasil ditambahkan');
    }

    public function delete_artikel($id)
    {
        $artikel = News::find($id);
        $artikel->delete();

        return redirect()->back()->with('status', 'Artikel berhasil dihapus');
    }
    
    public function edit_artikel($id)
    {
        $artikel = News::find($id);

        return view('admin.edit_artikel', compact('artikel'));
    }

    public function update_artikel(Request $request, $id)
    {
        // $artikel = News::findOrfail($id);
        // $artikel->update($request->all());

        $artikel = News::find($id);

        $artikel->tanggal = $request->tanggal;
        $artikel->judul = $request->judul;
        $artikel->preview = $request->preview;
        $artikel->isi1 = $request->isi1;
        $artikel->isi2 = $request->isi2;

        $image = $request->image;

        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $request->image->move('image', $imagename);
            $artikel->image = $imagename;
        }

        $artikel->update();


        return redirect()->back()->with('status', 'Artikel berhasil diedit');
    }

    public function news($id)
    {
        $news = News::find($id);

        return view('design.news-detail', compact('news'));
    }
}
