<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    protected $table = "tugas";
    protected $fillable = ['id','mapel_id','rombel_id','judul','catatan','file','deadline'];

    public function mapel(){
    	return $this->belongsTo('App\Mapel','mapel_id','id');
    }

    public function rombel(){
    	return $this->hasMany('App\Rombel','rombel_id');
    }
}
