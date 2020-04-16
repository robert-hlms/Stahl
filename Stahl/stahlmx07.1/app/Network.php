<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Network extends Model
{
    //Tabla de redes sociales
    protected $table = 'networks';
    protected $primaryKey = 'id';

    //Datos que se llenan en la base de datos
    protected $fillable = [
    	'id', 'url', 'icon', 'idTitle'
    ];

    //Funcion que obtiene el Titulo al que pertenece
    public function title_obj(){
    	return $this->belongsTo('App\Title','idTitle','id');
    }
}
