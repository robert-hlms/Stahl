<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    //Tabla de los titulos
    protected $table = 'titles';
    protected $primaryKey = 'id';

    //Datos que se llenan en la base de datos
    protected $fillable = [
    	'id', 'title', 'description'
    ];

    //Funcion que obtiene las imagenes
    public function images(){
    	return $this->hasMany('App\Image','idTitle');
    }

    //Funcion que obtiene las redes
    public function networks(){
    	return $this->hasMany('App\Network','idTitle');
    }

    //Funcion que obtiene la ubicacion
    public function ubication(){
    	return $this->hasOne('App\Ubication','idTitle');
    }
}
