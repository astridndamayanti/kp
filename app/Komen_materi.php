<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komen_materi extends Model
{
    protected $table = "Komen_materi";
    protected $fillable = ['materi_id','post','slug'];

    public function materi(){
    	return $this->belongsTo('App\Materi','materi_id','id');
    }

}
