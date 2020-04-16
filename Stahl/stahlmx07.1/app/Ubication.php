<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubication extends Model
{
    //Tabla donde se encuentra la ubicacion
    protected $table = 'ubications';
    protected $primaryKey = 'id';

    //Datos que se llenan en la base de datos
    protected $fillable = [
    	'id', 'street', 'colony', 'located', 'idTitle'
    ];

    //Funcion que obtiene el Titulo al que pertenece
    public function title_obj(){
    	return $this->belongsTo('App\Title','idTitle','id');
    }
}
