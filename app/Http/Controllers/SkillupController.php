<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SkillupController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    	// mengambil data dari table pegawai
    	$skillup = DB::table('skillup')->take(3)->get();
    	$skillup2 = DB::table('skillup')->skip(3)->take(3)->get();

    	// mengirim data pegawai ke view index
    	return view('skillup.skillup',['skillup' => $skillup, 'skillup2' => $skillup2]);
    }

    public function tambah()
    {
	// memanggil view tambah
	return view('skillup.inputskillup');
    }

    public function view()
    {
    // mengambil data dari table pegawai
    $skillup = DB::table('skillup')->get();

    // mengirim data pegawai ke view index
    return view('skillup.viewskillup',['skillup' => $skillup]);

    }
    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('skillup')->insert([
            'logo' => $request->logo,
            'topik' => $request->topik,
            'penyelenggara' => $request->penyelenggara,
            'pembicara' => $request->pembicara,
            'link_video' => $request->link_video,
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/skillup/view');
    }

    public function detail($id)
    {
    // mengambil data pegawai berdasarkan id yang dipilih
    $skillup = DB::table('skillup')->where('id',$id)->get();
    // passing data pegawai yang didapat ke view edit.blade.php
    return view('skillup.detailskillup',['skillup' => $skillup]);
    }

    public function edit($id)
    {
    // mengambil data pegawai berdasarkan id yang dipilih
    $skillup = DB::table('skillup')->where('id',$id)->get();
    // passing data pegawai yang didapat ke view edit.blade.php
    return view('skillup.editskillup',['skillup' => $skillup]);
    }

    public function update(Request $request)
    {
	// update data pegawai
	DB::table('skillup')->where('id',$request->id)->update([
		    'logo' => $request->logo,
            'topik' => $request->topik,
            'penyelenggara' => $request->penyelenggara,
            'pembicara' => $request->pembicara,
            'link_video' => $request->link_video,
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/skillup/view');
    }
    public function hapus($id)
    {
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('skillup')->where('id',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/skillup');
    }
}
