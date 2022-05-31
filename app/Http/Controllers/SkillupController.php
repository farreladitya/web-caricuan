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
}
