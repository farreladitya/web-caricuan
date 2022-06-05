<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Gambar;


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
    public function upload(){
		$gambar = Gambar::get();
		return view('findjob.uploadfindjob',['gambar' => $gambar]);
	}
 
	public function proses_upload(Request $request){
		$this->validate($request, [
			'file' => 'required|file|mimes:pdf',
			'keterangan' => 'required',
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
 
		$nama_file = time()."_".$file->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);
 
		Gambar::create([
			'file' => $nama_file,
			'keterangan' => $request->keterangan,
		]);
        
        
		return redirect()->back();
	}
    public function hapus($id)
    {
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('gambar')->where('id',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/uploadfindjob');
    }


}
