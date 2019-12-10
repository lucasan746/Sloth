<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\Post;

class postController extends Controller
{

    function agregarPost(request $form)
    {
      $ruta=$form->file('media')->store('public');
      $image=basename($ruta);
      $nuevoPost= new Post();
      $nuevoPost->text=$form["text"];
      $nuevoPost->imagenVideo=$image;
      $nuevoPost->user_id=$form["id"];
      $nuevoPost->save();
      return redirect('perfil/'.$form["id"]);

    }
    function borrarPost(request $form)
    {
      $unfollow=Post::find($form["id_post"]);
      $unfollow->delete();
      return redirect('perfil/'.$form["perfil"]);
    }

}
