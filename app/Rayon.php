<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rayon extends Model
{
    protected $table = "rayon";
    protected $fillable = ['rayon','pembimbing','thn_ajaran'];

    public function siswa(){
    	return $this->hasMany('App\Siswa','rayon_id');
    }
}
