<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ayudantia extends Model
{
    protected $table = 'ayudantia';

    protected $primaryKey = 'id';

    protected $fillable = ['cantidad_horas', 'remuneracion', 'asignatura_id', 'alumno_id', 'profesor_id'];

    public function asignatura() {
    	return $this->belongsTo('App\Asignatura');
    }

    public function profesor() {
    	return $this->belongsTo('App\Usuario', 'profesor_id');
    }

    public function alumno() {
    	return $this->belongsTo('App\Usuario', 'alumno_id');
    }

    public $timestamps = false;
}
