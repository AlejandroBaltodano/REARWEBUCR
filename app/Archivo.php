<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    protected $table= 'archivos';
    protected $primaryKey= 'id';

    protected $fillable = [
   'user_id','Descripcion','NombreDelArchivo','UrlArchivo'
    ];

    public function archivosEstudiante(){

        return $this->belongsTo('App\User','user_id','id');

    }
}
