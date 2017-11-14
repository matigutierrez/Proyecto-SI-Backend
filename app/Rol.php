<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'rol';

    protected $primaryKey = 'id';

    protected $fillable = ['descripcion_rol'];

    public function usuario() {
    	return $this->hasMany('App\Usuario');
    }

    public $timestamps = false;
}
