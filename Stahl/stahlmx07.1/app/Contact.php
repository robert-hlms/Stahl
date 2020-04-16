<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //Tabla de los contactos
    protected $table = 'contacts';
    protected $primaryKey = 'id';

    //Datos que se llenan en la base de datos
    protected $fillable = [
    	'id', 'name', 'email', 'subject', 'message',
    ];
}
