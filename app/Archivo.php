<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    protected $table= 'archivos';
    protected $primaryKey= 'id';

    protected $fillable = [
   'Descripcion','NombreDelArchivo','UrlArchivo'
    ];

}