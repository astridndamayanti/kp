<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $table = "mapel";
    protected $fillable = ['guru_id','rombel_id','mapel','slug'];

    public function materi(){
    	return $this->hasMany('App\Materi','mapel_id');
    }

    public function tugas(){
        return $this->hasMany('App\Tugas','mapel_id');
    }


    public function guru(){
    	return $this->belongsTo('App\Guru','guru_id','id');
    }

    public function rombel(){
    	return $this->belongsTo('App\Rombel','rombel_id','id');
    }
}
