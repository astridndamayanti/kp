<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Rombel;
use App\Rayon;
use Session;
use App\Imports\RombelImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
 
class ImportsController extends Controller
{
 
	public function import_rombel(Request $request) 
	{
		// validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
 
		// menangkap file excel
		$file = $request->file('file');
 
		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();
 
		// upload ke folder file_Rombel di dalam folder public
		$file->move('file_rombel',$nama_file);
 
		// import data
		Excel::import(new RombelImport, public_path('/file_rombel/'.$nama_file));
 
		// notifikasi dengan session
		Session::flash('sukses','Data Rombel Berhasil Diimport!');
 
		// alihkan halaman kembali
		return redirect()->back();
	}

	public function import_rayon(Request $request) 
	{
		// validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
 
		// menangkap file excel
		$file = $request->file('file');
 
		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();
 
		// upload ke folder file_Rombel di dalam folder public
		$file->move('file_rayon',$nama_file);
 
		// import data
		Excel::import(new RayonImport, public_path('/file_rayon/'.$nama_file));
 
		// notifikasi dengan session
		Session::flash('sukses','Data Rayon Berhasil Diimport!');
 
		// alihkan halaman kembali
		return redirect()->back();
	}
	public function import_siswa(Request $request) 
	{
		// validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
 
		// menangkap file excel
		$file = $request->file('file');
 
		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();
 
		// upload ke folder file_Rombel di dalam folder public
		$file->move('file_siswa',$nama_file);
 
		// import data
		Excel::import(new SiswaImport, public_path('/file_siswa/'.$nama_file));
 
		// notifikasi dengan session
		Session::flash('sukses','Data Rayon Berhasil Diimport!');
 
		// alihkan halaman kembali
		return redirect()->back();
	}
}