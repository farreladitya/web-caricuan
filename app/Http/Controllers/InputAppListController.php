<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InputApplistController extends Controller
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
    public function inputapplist()
    {
    	// mengambil data dari table pegawai
    	$lowongan = DB::table('lowongan')->get();

    	// mengirim data pegawai ke view index
    	return view('inputapplist',['lowongan' => $lowongan]);

    }
}
