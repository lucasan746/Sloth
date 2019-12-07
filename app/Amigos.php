<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Amigos extends Model
{
  public $table="amigos";
  public $guarded=[];

  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
