<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    protected $table= 'archivos';
    protected $primaryKey= 'id';

    protected $fillable = [
   'carnetEstudiante','Descripcion','NombreDelArchivo','UrlArchivo'
    ];

    public function archivosEstudiante(){

        return $this->belongsTo('App\User','user_id','id');

    }
}
