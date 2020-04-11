<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Mapel;
use App\Guru;
use App\Rombel;
use App\Materi;
use App\Komen_materi;
use auth;

class SlugController extends Controller
{
	public function index()
	{
        $a = Guru::where('user_id', auth()->user()->id)->first();
        $b = Guru::where('user_id',auth()->user()->id)->get(); 
        $url = url()->full();
        $u = explode('/', $url);
        $mapel = $u[4];

        $materi = \App\Materi::with('mapel')->OrderBy('updated_at','DESC')
                                            ->get();
        
        if($mapel == "bahasa-indonesia"){
        	$mapel = "Bahasa Indonesia";
        }elseif ($mapel == "matematika") {
        	$mapel = " Matematika ";
        }elseif ($mapel == "bahasa-inggris") {
        	$mapel = " Bahasa Inggris ";
        }elseif ($mapel == "pai") {
        	$mapel = "PAI";
        }elseif ($mapel == "ppkn") {
        	$mapel = "PPKN";
        }

    	return view ('siswa.main',compact('b', 'mapel','materi'));
	}

	public function indexx($slug)
	{
        $a = Guru::where('user_id', auth()->user()->id)->first();
        $b = Guru::where('user_id',auth()->user()->id)->get(); 
        $url = url()->full();
        $u = explode('/', $url);
        $rombel = $u[4];

        $m = Rombel::where('slug',$slug)->first();
        
  		$guru = Guru::where('user_id', auth()->user()->id)->first();
  		$mapel = Mapel::where('guru_id', $guru->id)->first();
        $z = Rombel::where('slug', $slug)->first();
        $materii = Materi::where(['mapel_id' => $mapel->id, 'rombel_id' => $z->id])->first();
        /*dd($materii);*/


        $materi = \App\Materi::with('mapel')->OrderBy('updated_at','DESC')
                                            ->get();

        if($rombel == "rpl-xii-1"){
        	$rombel = "RPL XII-1";
        }elseif ($rombel == "rpl-xii-2") {
        	$rombel = "RPL XII-2";
        }
        if ($materii) {
            $komen_materi = Komen_materi::where('materi_id', $materii->id)->get();
               return view ('guru.main',compact('b', 'rombel','m','mapel','materi','materii','komen_materi'));     
        }else{
            $komen_materi = 0;
                return view ('guru.main',compact('b', 'rombel','m','mapel','materi','materii','komen_materi'));                 
        }

	}
}

