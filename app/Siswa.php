<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = "siswa";
    protected $fillable = ['nis','nama','rayon_id','rombel_id','jk','user_id'];

    public function rayon(){
    	return $this->belongsTo('App\Rayon','rayon_id','id');
    }

    public function rombel(){
    	return $this->belongsTo('App\Rombel','rombel_id','id');
    }

    public function user(){
    	return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
	