<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';

    protected $primaryKey = 'id';

    protected $fillable = ['nombre', 'rut', 'correo', 'apellido_p', 'apellido_m', 'matricula', 'carrera_id', 'rol_id'];

    public function rol() {
    	return $this->belongsTo('App\Rol');
    }

    public function carrera() {
    	return $this->belongsTo('App\Carrera');
    }

    public $timestamps = false;
}
