<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FindJobController extends Controller
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
    	return view('findjob.findjob',['lowongan' => $lowongan]);

    }

    public function detail($id)
    {
    // mengambil data pegawai berdasarkan id yang dipilih
    $lowongan = DB::table('lowongan')->where('id',$id)->get();
    // passing data pegawai yang didapat ke view edit.blade.php
    return view('findjob.detailfindjob',['lowongan' => $lowongan]);

    }


}
