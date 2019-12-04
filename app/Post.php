<?php

namespace App;
use App\User;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $table="post";
    public $guarded=[];

    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
