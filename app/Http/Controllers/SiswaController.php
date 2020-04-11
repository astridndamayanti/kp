<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Mapel;
use App\Guru;
use App\Materi;
use App\Komen_materi;

class SiswaController extends Controller
{
    public function index()
    {

    }

	public function komen_create(Request $request)
	{
		Komen_materi::create([
			'materi_id' => $request->materi_id,
			'post' => $request->post,
		]);

		return redirect ()->back();
	}
}
