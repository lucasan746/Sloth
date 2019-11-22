<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $table->"post";
    public $guarded->[];

    public function user()
    {
      return $this->hasOne('App\Usuarios','user_id');
    }
}
