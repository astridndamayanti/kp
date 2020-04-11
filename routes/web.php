<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auths.login');
});

Route::get('/login','AuthController@login')->name('login'); 

Route::post('/postlogin','AuthController@postlogin');

Route::get('/logout', 'AuthController@logout');

Route::group(['middleware' => ['auth', 'CheckRole:admin']], function(){
	Route::get('/admin', 'DashboardController@index_admin');
	Route::get('/admin/siswa', 'AdminController@siswa');
	Route::post('/admin/siswa/create', 'AdminController@create');
	Route::get('/admin/siswa/{id}/edit', 'AdminController@edit');
	Route::post('/admin/siswa/{id}/update', 'AdminController@update');
	Route::get('/admin/siswa/{id}/delete', 'AdminController@delete');
	Route::post('/admin/siswa/import_excel', 'ImportsController@import_siswa');	
	Route::get('/admin/rayon', 'AdminController@rayon');
	Route::post('/admin/rayon/create', 'AdminController@rayon_create');
	Route::get('/admin/rayon/{id}/edit', 'AdminController@rayon_edit');
	Route::post('/admin/rayon/{id}/update', 'AdminController@rayon_update');
	Route::get('/admin/rayon/{id}/delete', 'AdminController@rayon_delete');
	Route::post('admin/rayon/import_excel', 'ImportsController@import_rayon');
	Route::get('/admin/rombel', 'AdminController@rombel');
	Route::post('/admin/rombel/create', 'AdminController@rombel_create');
	Route::get('/admin/rombel/{id}/edit', 'AdminController@rombel_edit');
	Route::post('/admin/rombel/{id}/update', 'AdminController@rombel_update');
	Route::get('/admin/rombel/{id}/delete', 'AdminController@rombel_delete');
	Route::post('/admin/rombel/import_excel', 'ImportsController@import_rombel');
	Route::get('/admin/guru', 'AdminController@guru');
	Route::post('/admin/guru/create', 'AdminController@guru_create');
	Route::get('/admin/guru/{id}/edit', 'AdminController@guru_edit');
	Route::post('/admin/guru/{id}/update', 'AdminController@guru_update');
	Route::get('/admin/guru/{id}/delete', 'AdminController@guru_delete');
	Route::get('/admin/mapel', 'AdminController@mapel');
	Route::post('/admin/mapel/create', 'AdminController@mapel_create');
	Route::get('/admin/mapel/{id}/edit', 'AdminController@mapel_edit');
	Route::post('/admin/mapel/{id}/update', 'AdminController@mapel_update');
	Route::get('/admin/mapel/{id}/delete', 'AdminController@mapel_delete');
	Route::get('/admin/tugas', 'AdminController@tugas');
	Route::post('/admin/tugas/create', 'AdminController@tugas_create');
	Route::get('/admin/tugas/{id}/edit', 'AdminController@tugas_edit');
	Route::post('/admin/tugas/{id}/update', 'AdminController@tugas_update');
	Route::get('/admin/tugas/{id}/delete', 'AdminController@tugas_delete');
	Route::get('/admin/materi', 'AdminController@materi');
	Route::post('/admin/materi/create', 'AdminController@materi_create');
	Route::get('/admin/materi/{id}/edit', 'AdminController@materi_edit');
	Route::post('/admin/materi/{id}/update', 'AdminController@materi_update');
	Route::get('/admin/materi/{id}/delete', 'AdminController@materi_delete');
	Route::get('/admin/nilai', 'AdminController@nilai');
	Route::post('/admin/nilai/create', 'AdminController@nilai_create');
	Route::get('/admin/nilai/{id}/edit', 'AdminController@nilai_edit');
	Route::post('/admin/nilai/{id}/update', 'AdminController@nilai_update');
	Route::get('/admin/nilai/{id}/delete', 'AdminController@nilai_delete');
	Route::get('/admin/user', 'AdminController@user');
	Route::post('/admin/user/create', 'AdminController@user_create');
	Route::get('/admin/user/{id}/edit', 'AdminController@user_edit');
	Route::post('/admin/user/{id}/update', 'AdminController@user_update');
	Route::get('/admin/user/{id}/delete', 'AdminController@user_delete');

});	

Route::group(['middleware' => ['auth', 'CheckRole:guru']], function(){
	Route::get('/guruuu', 'DashboardController@index_guru');
	Route::get('/guruuu/{slug}','SlugController@indexx')->name('guru.rombel');
	Route::post('/guruuu/{slug}/upload', 'GuruController@upload_materi');
	Route::post('/guruuu/{slug}/komen_materi', 'GuruController@komen_create');
	Route::get('/guruuu/{slug}/tugas', 'GuruController@index_tugas');
	Route::post('/guruuu/{slug}/upload_tugas', 'GuruController@upload_tugas');
	Route::get('/guruuu/{slug}/nilai', 'GuruController@index_nilai');
	Route::get('/guruuu/{slug}/nilai', 'GuruController@index_anggota');
});

Route::group(['middleware' => ['auth', 'CheckRole:siswa']], function(){
	Route::get('/siswaa', 'DashboardController@index_siswa');
	Route::get('/siswaa/{slug}','SlugController@index')->name('siswa.mapel');
	Route::post('/siswaa/{slug}/komen_materi', 'SiswaController@komen_create');

});