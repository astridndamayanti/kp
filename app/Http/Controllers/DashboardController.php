<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Mapel;
use App\Rombel;
use App\Guru;

class DashboardController extends Controller
{
    public function index_admin()
    {
    	return view ('layout.admin');
    }

    public function index_guru()
    {
        $a = Guru::where('user_id', auth()->user()->id)->first();
        $b = Guru::with('mapel')->where('user_id',auth()->user()->id)->get();        
    	return view ('layout.guru',compact('b'));
    }

    public function index_siswa()
    {
        $a = Siswa::where('user_id', auth()->user()->id)->first();
        $b = Mapel::where('rombel_id', $a->rombel_id)->get();
    	return view ('layout.siswa', compact('b'));
    }
}
