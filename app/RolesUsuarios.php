<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RolesUsuarios extends Model
{

	protected $table= 'roles_usuarios';
protected $primaryKey= 'id';

    protected $fillable = [
        'NombreRol'
    ];


    public function usuarios(){

       return $this->hasMany('App\User');

    }
}
