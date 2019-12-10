@extends('layouts.master')

@section('content')
  {{-- Postear algo --}}


  {{-- Publicaciones --}}
<div class="row justify-content-around col-9">

  <section class="seccionizq">
    <div class=" cajaposteo ">
      <form class="" action="/publicacion" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <h4 class="card-header ">Crea una publicación</h4>
          <textarea class="col-12 border-light p-3" name="text" rows="3" cols="80" placeholder="¿Qué estas pensando?"></textarea>

          <div class="image-upload ">
    <label for="file-input">

      <img src="/images/iconos/iconfile-2.png" alt ="foto" title ="foto" >
    </label>
        <input id="file-input" name="media" type="file"/>
        <input type="hidden" name="id" value="{{Auth::user()->id}}">
      <button class="botonpost btn btn-primary" type="submit" name="button">Publicar</button>
</div>


      </form>

    </div>
    @foreach ($posteos as $post)
@foreach (Auth::user()->amigos as $usu )


@if ($usu->amigo==$post->user_id)


  <article class="perfilamigo ">
    <header class="headerperfil">
      <a href="perfil/{{$post->user->id}}"><img src="/storage/{{$post->user->fotoperfil}}" alt="" width="50px" height="48px"></a>
      <a class="nombreperfil"href="perfil/{{$post->user->id}}"><h4>{{$post->user->user}}</h4></a>
    </header>
  <div class="imagenpefiles">
    <img src="/storage/{{$post->imagenVideo}}" alt="" width="100%" >
  </div>
  <div class="descrip">
  <section>
    <div class="iconslikes">
      <img class="icon-like" src="images/iconos/like.png" alt="" width="30px">
      <img class="icon-comm" src="images/iconos/comment.png" alt="" width="30px">
      <img class="icon-share" src="images/iconos/share.png" alt="" width="30px">
    </div>
  </section>
  <div class="descrip1">
  <ul type="none">
  <li class="li-usuario">
  <h4>{{$post->user->user}}</h4>
  <span>{{$post->text}}</span>
  </li>
  <li>
  <a class="linkmascoment" href="#">Ver más comentarios</a>
  </li>
  <br>
  <li>
    <a class="nombrecoment"  href="#"><h4>Mayaa</h4></a>
    <p>Pensativo,todo un modelo.</p>
  </li>
  <li>
    <a class="nombrecoment" href="#"><h4>Mataco_rebelde</h4></a>
    <p>Genial foto amigo!</p>
  </li>
  </ul>
  </div>
  <br>
  <section class="hacer-comentario">
    <form class="" action="home.php" method="post">
      <textarea name="name" rows="3" cols="80" placeholder="Añade un comentario" class="p-3"></textarea>
      <button  type="submit" name="button"><h4>Publicar</h4></button>
    </form>
  </section>
  </div>
</article>
<br><br>
@endif
@endforeach
  @endforeach
</section>
@php
  $al=rand(1,count($posteos));
  $al2=rand(1,count($posteos));
  $al3=rand(1,count($posteos));
@endphp

  {{-- Seccion derecha--}}
  <section class="seccionder position-fixed">
    <div class="perfilderecha">
      <img src="/storage/{{Auth::user()->fotoperfil}}" alt="fotoperfil" class="fotoperfilderecha">
      <h4>{{Auth::user()->user}}</h4>
      <p class="textperfil"><small class="text-muted">En linea</small></p>
    </div>
    <article class="sugeridos">
      <div class="">
      <h4 class="titusugeridos">Sugerencias para ti</h4>
      <a href="#"><h4 class="linksuge">Ver todo</h4></a>
      </div>



      <div class="perfilsuge">
      <ul>
        <img class="img" src="/storage/{{$posteos[$al2]->user->fotoperfil}}" alt="icono"width="50px" height="48px">
        <a href="perfil/{{$posteos[$al2]->user->id}}"><h4>{{$posteos[$al2]->user->user}}</h4></a>
        <p class="textsuge"><small class="text-muted">En linea</small></p>
          </div>
      </ul>
      <div class="perfilsuge">
      <ul>
        <img class="img" src="/storage/{{$posteos[$al]->user->fotoperfil}}" alt="icono"width="50px" height="48px">
        <a href="perfil/{{$posteos[$al]->user->id}}"><h4>{{$posteos[$al]->user->user}}</h4></a>
        <p class="textsuge1"><small class="text-muted">En linea</small></p>
          </div>
      </ul>
      <div class="perfilsuge">
      <ul>
        <img class="img" src="/storage/{{$posteos[$al3]->user->fotoperfil}}" alt="icono"width="50px" height="48px">
        <a href="perfil/{{$posteos[$al3]->user->id}}"><h4>{{$posteos[$al3]->user->user}}</h4></a>
        <p class="textsuge2"><small class="text-muted">En linea</small></p>
          </div>
      </ul>
    </article>


    <article class="adopciones">
      <h4 class="titusugeridos">Publicidad</h4>
      <a href="#"><img src="images/home/adopcion.png" alt="fondo" width="100%"></a>
    </article>
    <footer>
      <ul class="foothome">
        <li><a href="#">Contacto</a></li>
        <li><a href="#">Legales</a></li>
        <li><a href="#">Ayuda</a></li>
        <li><a href="#">Privacidad</a></li>
        <li><a href="{{route('preguntas')}}">FAQ</a></li>
      </ul>
    </footer>
  </section>
</div>
@endsection
