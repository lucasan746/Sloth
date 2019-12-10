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
  function seguir($id)
  {
    $perfil=User::find($id);
    $vac=compact('perfil');
    return view ('perfil',$vac);
  }
  public function search(request $form) {
  $users = User::where('user', 'like', '%'.$form["search"].'%')->orderBy('id', 'desc');
  $vac=compact('users');
  return view('users',$vac);
}
}
