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

    public function alumno() {
    	return $this->hasMany('App\Ayudantia', 'id_alumno');
    }

    public function profesor() {
    	return $this->hasMany('App\Ayudantia', 'id_profesor');
    }

    public $timestamps = false;
}
