<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
class PageController extends Controller
{
    public function home()
    {
        return view('home', ['key' => 'home']);
    }
    public function profile()
    {
        return view('profile', ['key' => 'profile']);
    }
    public function student()
    {
        $mhs = Mahasiswa::orderBy('id','DESC')->paginate(10);
        return view('student', ['key' => 'student', 'mhs' => $mhs]);
    }
    public function search (Request $request)
    {
        $cari = $request->q;
        $mhs = Mahasiswa::where('nama', 'like', '%'.$cari.'%')->orWhere('nim', 'like', '%'.$cari.'%')->paginate(10);
        $mhs->appends($request->all());
        return view('student', ['key' => 'student','mhs' => $mhs]);
    }
    public function formadd(){
        return view('formadd', ['key' => 'student']);
    }
    public function save(Request $request)
    {
        $minat = implode(',',$request->get('minat')); 
        Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'prodi' => $request->prodi,
            'minat' => $minat
        ]);
        return redirect('student')->with('create', 'Berhasil disimpan');
    }
    public function edit($id)
    {
        $mhs = Mahasiswa::find($id);
        return view('edit', ['key' => 'student', 'mhs' => $mhs]);
    }
    public function update($id, Request $request)
    {
        $minat = implode(',',$request->minat);
        $mhs = Mahasiswa::find($id);
        $mhs->nim =$request->nim;
        $mhs->nama =$request->nama;
        $mhs->gender =$request->gender;
        $mhs->prodi =$request->prodi;
        $mhs->minat = $minat;
        $mhs->save();
        return redirect('/student')->with('update', 'Berhasil diubah');
    }
    public function delete($id)
    {
        Mahasiswa::find($id)->delete();
        return redirect('/student')->with('delete', 'Berhasil dihapus');
    }
    public function contact()
    {
        return view('contact', ['key' => 'contact']);
    }
}
