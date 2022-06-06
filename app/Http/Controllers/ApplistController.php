<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Gambar;
use App\Models\User;
use App\Models\Lowongan;


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
    	return view('applist.applist',['lowongan' => $lowongan]);

    }
    public function tambah()
    {
	// memanggil view tambah
	return view('applist.inputapplist');


    }
    public function view()
    {
    // mengambil data dari table pegawai
    $gambar = DB::table('gambar')->get();
    $users = DB::table('users')->get();

    // $gambar = Gambar::get();


    // mengirim data pegawai ke view index
    return view('applist.viewapplist', ['gambar' => $gambar, 'users' => $users]);
    // return view('applist.viewapplist',['gambar' => $gambar]);




    }

    public function hubung() {
        $gambar = DB::table('gambar')->
        join('users', 'users.id', '=', 'gambar.id_users')->
        get();
        return view('applist.viewapplist',['gambar' => $gambar]);
    }
    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('lowongan')->insert([
            'id_users' => $request->id_users,
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

    public function detail($id)
    {
    // mengambil data pegawai berdasarkan id yang dipilih
    $lowongan = DB::table('lowongan')->where('id',$id)->get();
    // passing data pegawai yang didapat ke view edit.blade.php
    return view('applist.detailapplist',['lowongan' => $lowongan]);

    }
    public function edit($id)
    {
    // mengambil data pegawai berdasarkan id yang dipilih
    $lowongan = DB::table('lowongan')->where('id',$id)->get();
    // passing data pegawai yang didapat ke view edit.blade.php
    return view('applist.editapplist',['lowongan' => $lowongan]);

    }
    public function update(Request $request)
    {
	// update data pegawai
	DB::table('lowongan')->where('id',$request->id)->update([
		'perusahaan' => $request->perusahaan,
            'jabatan' => $request->jabatan,
            'lokasi' => $request->lokasi,
            'tentang_lowongan' => $request->tentang_lowongan,
            'persyaratan' => $request->persyaratan,
            'gaji' => $request->gaji
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/applist/detail/'.$request->id);
    }
    public function hapus($id)
    {
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('lowongan')->where('id',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/applist');
    }
    }




