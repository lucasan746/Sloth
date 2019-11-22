<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuarios;
class userController extends Controller
{
  function listaUser()
  {
    $user=Usuarios::all();
    $vac=compact('user');
    return view ('user',$vac);
  }
}
