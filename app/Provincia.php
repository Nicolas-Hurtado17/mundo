<?php

namespace App;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App;
class Provincia extends Model
{

public $timestamp = false;
protected $fillable = [
    'nombre',
    'region_id'
];
public function region (){
    return $this->belongsTo("App\Region");
}
public function ciudad (){
    return $this->hasMany('App\Ciudad');
    }
}
