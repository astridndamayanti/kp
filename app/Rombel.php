<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rombel extends Model
{
    protected $table = "rombel";
    protected $fillable = ['rombel','thn_ajaran','slug'];    

    public function siswa(){
    	return $this->hasMany('App\Siswa','rombel_id');
    }

    public function mapel(){
    	return $this->hasMany('App\Mapel','rombel_id');
    }

    public function materi(){
    	return $this->hasMany('App\Materi','rombel_id');
    }

    public function tugas(){
        return $this->hasMany('App\tugas','rombel_id');
    }

}
