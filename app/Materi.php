<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materi extends Model
{
    protected $table = "materi";
    protected $fillable = ['mapel_id','rombel_id','catatan','file'];

    public function mapel(){
    	return $this->belongsTo('App\Mapel','mapel_id','id');
    }

    public function komen_materi(){
    	return $this->hasMany('App\komen_materi','Materi_id');
    }

    public function rombel(){
    	return $this->hasMany('App\Rombel','rombel_id');
    }

}
