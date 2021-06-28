<?php

namespace App;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{

   public $timestamps = false;
   protected $fillable =[
      'nombre',
     
   ];
   public function provincia (){
      return $this->hasMany('App\Provincia');
      }
}
