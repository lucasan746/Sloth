<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\Post;

class postController extends Controller
{
    public function agregarPost(request $form)
    {
        $image = $form->file('media');
        $ruta=public_path().'/publicaciones';
        $fileName=uniqid().$image->getClientOriginalName();
        $image->move($ruta, $fileName);
        $nuevoPost= new Post();
        $nuevoPost->text=$form["text"];
        $nuevoPost->imagenVideo=$fileName;
        $nuevoPost->user_id=$form["id"];
        $nuevoPost->save();
        return redirect('perfil/'.$form["id"]);
    }
    public function borrarPost(request $form)
    {
        $unfollow=Post::find($form["id_post"]);
        $unfollow->delete();
        return redirect('perfil/'.$form["perfil"]);
    }
}
