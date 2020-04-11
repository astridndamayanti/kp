<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Str;

class AdminController extends Controller
{
	public function siswa()
	{
		$siswa = \App\Siswa::with('rayon','rombel')->get();
		// dd($siswa);
		$rombel= \App\Rombel::all();
		$rayon= \App\Rayon::all();


		return view ('admin.siswa.index',[
			'siswa' => $siswa,
			'rombel' => $rombel,
			'rayon' => $rayon
	]);
	}

	public function create(Request $request)
	{
		$user = new \App\User;
		$user->role = 'siswa';
		$user->name = $request->nama;
		$user->email = $request->email;
		$user->password = bcrypt($request->password);
		$user->save();

		$siswa = \App\Siswa::create([
			'nis' => $request->nis,
			'user_id' => $user->id,
			'nama' => $request->nama,
			'rayon_id' => $request->rayon,
			'rombel_id' => $request->rombel,
			'jk' => $request->jk,
		]); 
		return redirect('/admin/siswa')->with('sukses','Data berhasil');
	}

	public function edit($id)
	{
		$siswa = \App\Siswa::find($id);
		$rombel= \App\Rombel::all();
		$rayon= \App\Rayon::all();		
		return view ('admin.siswa.edit',[
			'siswa' => $siswa,
			'rayon' => $rayon,
			'rombel' => $rombel
		]);
	}

	public function update(Request $request, $id)
	{
		$siswa = \App\Siswa::find($id);
		$siswa->update([
			'nis' => $request->nis,
			'rayon_id' => $request->rayon,
			'rombel_id' => $request->rombel,
			'jk' => $request->jk,
		]);
		return redirect('/admin/siswa')->with('sukses','Data Berhasil');
	}

	public function delete($id)
	{
		$siswa = \App\Siswa::find($id);
		$siswa->delete($siswa);
		return redirect('/admin/siswa')->with('sukses','Data Berhasil');
	}

	public function rayon()
	{
		$rayon = \App\Rayon::all();
		return view ('admin.rayon.index',[
			'rayon' => $rayon
	]);
	}

	public function rayon_create(Request $request)
	{
		\App\Rayon::create($request->all());
		return redirect('/admin/rayon')->with('sukses','Data berhasil');
	}

	public function rayon_edit($id)
	{
		$rayon = \App\Rayon::find($id);	
		return view ('admin.rayon.edit',[
			'rayon' => $rayon,
		]);
	}

	public function rayon_update(Request $request, $id)
	{
		$rayon = \App\Rayon::find($id);
		$rayon->update($request->all());
		return redirect('/admin/rayon')->with('sukses','Data Berhasil');
	}

	public function rayon_delete($id)
	{
		$rayon = \App\Rayon::find($id);
		$rayon->delete($rayon);
		return redirect('/admin/rayon')->with('sukses','Data Berhasil');
	}

	public function rombel()
	{
		$rombel = \App\Rombel::all();
		return view ('admin.rombel.index',[
			'rombel' => $rombel
	]);
	}

	public function rombel_create(Request $request)
	{
		\App\Rombel::create([
			'rombel' => $request->rombel,
			'thn_ajaran' => $request->thn_ajaran,
			'slug' => Str::slug($request->rombel)
		]);
		return redirect('/admin/rombel')->with('sukses','Data berhasil');
	}

	public function rombel_edit($id)
	{
		$rombel = \App\Rombel::find($id);	
		return view ('admin.rombel.edit',[
			'rombel' => $rombel,
		]);
	}

	public function rombel_update(Request $request, $id)
	{
		$rombel = \App\Rombel::find($id);
		$rombel->update($request->all());
		return redirect('/admin/rombel')->with('sukses','Data Berhasil');
	}

	public function rombel_delete($id)
	{
		$rombel = \App\Rombel::find($id);
		$rombel->delete($rombel);
		return redirect('/admin/rombel')->with('sukses','Data Berhasil');
	}

	public function guru()
	{
		$guru = \App\Guru::all();
		return view ('admin.guru.index',[
			'guru' => $guru
	]);
	}

	public function guru_create(Request $request)
	{
		$user = new \App\User;
		$user->role = 'guru';
		$user->name = $request->nama;
		$user->email = $request->email;
		$user->password = bcrypt($request->password);
		$user->save();

		$request->request->add(['user_id' => $user->id]);
		$guru = \App\Guru::create($request->all());
		return redirect('/admin/guru')->with('sukses','Data berhasil');
	}

	public function guru_edit($id)
	{
		$guru = \App\Guru::find($id);	
		return view ('admin.guru.edit',[
			'guru' => $guru,
		]);
	}

	public function guru_update(Request $request, $id)
	{
		$guru = \App\Guru::find($id);
		$guru->update($request->all());
		return redirect('/admin/guru')->with('sukses','Data Berhasil');
	}

	public function guru_delete($id)
	{
		$guru = \App\Guru::find($id);
		$guru->delete($guru);
		return redirect('/admin/guru')->with('sukses','Data Berhasil');
	}

	public function mapel()
	{
		$mapel = \App\Mapel::with('guru','rombel')->get();
		// dd($siswa);
		$rombel= \App\Rombel::all();
		$guru= \App\Guru::all();
		return view ('admin.mapel.index',[
			'mapel' => $mapel,
			'rombel' => $rombel,
			'guru' => $guru
	]);
	}
	public function mapel_create(Request $request)
	{
		
		\App\mapel::create([
			'guru_id' => $request->nama,
			'rombel_id' => $request->rombel,
			'mapel' => $request->mapel,
			'slug' => Str::slug($request->mapel)
		]);
		return redirect('/admin/mapel')->with('sukses','Data berhasil');
	}

	public function mapel_edit($id)
	{
		$mapel = \App\mapel::find($id);
		$rombel= \App\Rombel::all();
		$guru= \App\Guru::all();		
		return view ('admin.mapel.edit',[
			'mapel' => $mapel,
			'guru' => $guru,
			'rombel' => $rombel
		]);
	}

	public function mapel_update(Request $request, $id)
	{
		$mapel = \App\mapel::find($id);
		$mapel->update([
			'guru_id' => $request->nama,
			'rombel_id' => $request->rombel,
			'mapel' => $request->mapel,
		]);
		return redirect('/admin/mapel')->with('sukses','Data Berhasil');
	}

	public function mapel_delete($id)
	{
		$mapel = \App\mapel::find($id);
		$mapel->delete($mapel);
		return redirect('/admin/mapel')->with('sukses','Data Berhasil');
	}

	public function tugas()
	{
		$tugas = \App\Tugas::with('mapel')->get();
		// dd($siswa);
		$mapel= \App\Mapel::all();

		return view ('admin.tugas.index',[
			'tugas' => $tugas,
			'mapel' => $mapel
	]);
	}

	public function tugas_create(Request $request)
	{
		
		\App\Tugas::create([
			'nis' => $request->nis,
			'rayon_id' => $request->rayon,
			'rombel_id' => $request->rombel,
			'jk' => $request->jk,
		]);
		return redirect('/admin/tugas')->with('sukses','Data berhasil');
	}

	public function tugas_edit($id)
	{
		$tugas = \App\Tugas::find($id);
		$rombel= \App\Rombel::all();
		$rayon= \App\Rayon::all();		
		return view ('admin.tugas.edit',[
			'tugas' => $tugas,
			'rayon' => $rayon,
			'rombel' => $rombel
		]);
	}

	public function tugas_update(Request $request, $id)
	{
		$tugas = \App\Tugas::find($id);
		$tugas->update([
			'nis' => $request->nis,
			'rayon_id' => $request->rayon,
			'rombel_id' => $request->rombel,
			'jk' => $request->jk,
		]);
		return redirect('/admin/tugas')->with('sukses','Data Berhasil');
	}

	public function tugas_delete($id)
	{
		$tugas = \App\Tugas::find($id);
		$tugas->delete($tugas);
		return redirect('/admin/tugas')->with('sukses','Data Berhasil');
	}

	public function materi()
	{
		$materi = \App\materi::with('mapel')->get();
		// dd($siswa);
		$mapel= \App\Mapel::all();

		return view ('admin.materi.index',[
			'materi' => $materi,
			'mapel' => $mapel
	]);
	}

	public function materi_create(Request $request)
	{
		
		\App\materi::create([
			'nis' => $request->nis,
			'rayon_id' => $request->rayon,
			'rombel_id' => $request->rombel,
			'jk' => $request->jk,
		]);
		return redirect('/admin/materi')->with('sukses','Data berhasil');
	}

	public function materi_edit($id)
	{
		$materi = \App\materi::find($id);
		$rombel= \App\Rombel::all();
		$rayon= \App\Rayon::all();		
		return view ('admin.materi.edit',[
			'materi' => $materi,
			'rayon' => $rayon,
			'rombel' => $rombel
		]);
	}

	public function materi_update(Request $request, $id)
	{
		$materi = \App\materi::find($id);
		$materi->update([
			'nis' => $request->nis,
			'rayon_id' => $request->rayon,
			'rombel_id' => $request->rombel,
			'jk' => $request->jk,
		]);
		return redirect('/admin/materi')->with('sukses','Data Berhasil');
	}

	public function materi_delete($id)
	{
		$materi = \App\materi::find($id);
		$materi->delete($materi);
		return redirect('/admin/materi')->with('sukses','Data Berhasil');
	}

	public function nilai()
	{
		$nilai = \App\nilai::with('mapel')->get();
		// dd($siswa);
		$mapel= \App\Mapel::all();

		return view ('admin.nilai.index',[
			'nilai' => $nilai,
			'mapel' => $mapel
	]);
	}

	public function nilai_create(Request $request)
	{
		
		\App\nilai::create([
			'nis' => $request->nis,
			'rayon_id' => $request->rayon,
			'rombel_id' => $request->rombel,
			'jk' => $request->jk,
		]);
		return redirect('/admin/nilai')->with('sukses','Data berhasil');
	}

	public function nilai_edit($id)
	{
		$nilai = \App\nilai::find($id);
		$rombel= \App\Rombel::all();
		$rayon= \App\Rayon::all();		
		return view ('admin.nilai.edit',[
			'nilai' => $nilai,
			'rayon' => $rayon,
			'rombel' => $rombel
		]);
	}

	public function nilai_update(Request $request, $id)
	{
		$nilai = \App\nilai::find($id);
		$nilai->update([
			'nis' => $request->nis,
			'rayon_id' => $request->rayon,
			'rombel_id' => $request->rombel,
			'jk' => $request->jk,
		]);
		return redirect('/admin/nilai')->with('sukses','Data Berhasil');
	}

	public function nilai_delete($id)
	{
		$nilai = \App\nilai::find($id);
		$nilai->delete($nilai);
		return redirect('/admin/nilai')->with('sukses','Data Berhasil');
	}

	public function user()
	{
		$user = \App\user::all();
		return view ('admin.user.index',[
			'user' => $user,
	]);
	}

	public function user_create(Request $request)
	{
		
		\App\user::create([
			'nis' => $request->nis,
			'rayon_id' => $request->rayon,
			'rombel_id' => $request->rombel,
			'jk' => $request->jk,
		]);
		return redirect('/admin/user')->with('sukses','Data berhasil');
	}

	public function user_edit($id)
	{
		$user = \App\user::find($id);	
		return view ('admin.user.edit',[
			'user' => $user,
		]);
	}

	public function user_update(Request $request, $id)
	{
		$user = \App\user::find($id);
		$user->update([
			'role' => $request->role,
			'name' => $request->name,
			'email' => $request->email,
		]);
		return redirect('/admin/user')->with('sukses','Data Berhasil');
	}

	public function user_delete($id)
	{
		$user = \App\user::find($id);
		$user->delete($user);
		return redirect('/admin/user')->with('sukses','Data Berhasil');
	}
}
