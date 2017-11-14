<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $table = 'carrera';

    protected $primaryKey = 'id';

    protected $fillable = ['nombre_carrera', 'cod_carrera'];

    public function usuario() {
    	return $this->hasMany('App\Usuario');
    }

    public $timestamps = false;

}
