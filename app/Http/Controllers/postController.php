<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    }
}
