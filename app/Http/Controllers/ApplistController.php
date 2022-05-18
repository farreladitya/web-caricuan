<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ApplistController extends Controller
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
    	$lowongan = DB::table('lowongan')->get();

    	// mengirim data pegawai ke view index
    	return view('applist',['lowongan' => $lowongan]);

    }
    public function tambah()
    {

	// memanggil view tambah
	return view('inputapplist');

    }
    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('lowongan')->insert([
            'perusahaan' => $request->perusahaan,
            'jabatan' => $request->jabatan,
            'lokasi' => $request->lokasi,
            'tentang_lowongan' => $request->tentang_lowongan,
            'persyaratan' => $request->persyaratan,
            'gaji' => $request->gaji
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/applist');

    }
    public function detail()
    {

	// memanggil view tambah
	return view('detailapplist');

    }
}
