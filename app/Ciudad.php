<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
 
public $timestamp = false;
protected $fillable = [
    'nombre',
    'provincia_id'
];
public function provincia (){
    return $this->belongsTo("App\Provincia");
}
public function calle (){
    return $this->hasMany('App\Calle');
    }
}
