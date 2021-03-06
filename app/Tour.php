<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    //
    protected $table = "tour";

    public function diemdi(){
    	return $this->belongsTo('App\Diemdi','id_diemdi','id');
    }

    public function khachsan(){
    	return $this->belongsTo('App\Khachsan','id_khachsan','id');
    }

    public function huongdanvien(){
    	return $this->belongsTo('App\Huongdanvien','id_huongdanvien','id');
    }

    public function anhtour(){
    	return $this->hasOne('App\Anhtour','id_tour','id');
    }

    public function dattour(){
    	return $this->hasMany('App\Dattour','id_tour','id');
    }
    public function toado(){
        return $this->hasMany('App\Toado','id_tour','id');
    }
    public function gmaps_geocache(){
        return $this->hasManyThrough('App\Gmaps_geocaches','App\Toado','id_tour','id_gmaps','id');
    }
}
