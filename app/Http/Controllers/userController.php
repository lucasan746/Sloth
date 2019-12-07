<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class userController extends Controller
{
  function listaUser()
  {
    $user=User::all();
    $vac=compact('user');
    return view ('perfil',$vac);
  }
  function usuario()
  {
    $user=User::find(1);
    $vac=compact('user');
    return view ('perfil',$vac);
  }
}
