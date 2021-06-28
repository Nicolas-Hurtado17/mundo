<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calle extends Model
{

    public $timestamp = false;
    protected $fillable = [
        'nombre',
        'ciudad_id'
    ];
    public function ciudad (){
        return $this->belongsTo("App\Ciudad");
    }
}
