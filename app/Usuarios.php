<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Usuarios extends Model
{
    public $table="users";
    public $guarded=[];
    public function mascotas()
    {
      return $this->hasMany('App\Mascotas','user_id');
    }
    public function post()
    {
      return $this->hasMany('App\Post','user_id');
    }
}
