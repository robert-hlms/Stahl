<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //Tabla de imagenes
    protected $table = 'images';
    protected $primaryKey = 'id';

    //Datos que se llenan en la base de datos
    protected $fillable = [
    	'id', 'url', 'title', 'description', 'idTitle'
    ];

    //Funcion que obtiene el Titulo al que pertenece
    public function title_obj(){
    	return $this->belongsTo('App\Title','idTitle','id');
    }
}
