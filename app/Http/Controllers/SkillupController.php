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
    	// $skillup = DB::table('skillup')->get();
    	$users = DB::table('users')->get();

    	// mengirim data pegawai ke view index
    	return view('skillup.skillup',['users' => $users]);
    	// return view('skillup.skillup',['skillup' => $skillup]);

    }
}
