<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = "guru";
    protected $fillable = ['nip','nama','jk','no_telp','user_id'];    

    public function siswa(){
    	return $this->hasMany('App\Siswa','guru_id');
    }

    public function mapel(){
    	return $this->hasMany('App\Mapel', 'guru_id');
    }
}
