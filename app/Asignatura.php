<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    protected $table = 'asignatura';

    protected $primaryKey = 'id';

    protected $fillable = ['nombre_asignatura', 'descripcion_asignatura', 'cod_asignatura'];

    public function ayudantia() {
    	return $this->hasMany('App\Ayudantia');
    }

    public $timestamps = false;

}
