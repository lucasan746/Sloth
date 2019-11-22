<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    public $guarded=[];

    public function user()
    {
      return $this->hasOne('App\Usuarios','user_id');
    }
}
