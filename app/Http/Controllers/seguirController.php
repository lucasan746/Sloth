<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Amigos;

class seguirController extends Controller
{
    function seguir(request $form)
    {
      $follow= new Amigos;
      $follow->user_id=$form["id_user"];
      $follow->amigo=$form["seguir"];
      $follow->save();
      // return view('perfil');
    }
    function dejarSeguir(request $form)
    {
      $unfollow=Amigos::find($form["id_amigo"]);
      $unfollow->delete();
    }
}
