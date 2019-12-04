@extends('layouts.app')

@section('content')

  {{-- Publicaciones --}}
@foreach ($posteos as $post)
  <section class="seccionizq">

  <article class="perfilamigo">
    <header class="headerperfil">
      <a href="#"><img src="/storage/{{$post->imagenVideo}}" alt="" width="50px" height="48px"></a>
      <a class="nombreperfil"href="#"><h4>{{$post->user->user}}</h4></a>
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
  <li>
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
      <textarea name="name" rows="3" cols="80" placeholder="Añade un comentario"></textarea>
      <button  type="submit" name="button"><h4>Publicar</h4></button>
    </form>
  </section>
  </div>
  </article>
@endforeach

  <br><br>

  {{-- Seccion izquierda--}}
  <section class="seccionder">
    <div class="perfilderecha">
    </div>
    <article class="sugeridos">
      <h4 class="titusugeridos">Sugeridos para ti</h4>
      <ul>
        <img class="img" src="images/home/iconom.jpg" alt="icono"width="50px" height="48px">
        <a href=""><h4>Lechuga_verde</h4></a>
        <br>
        <img class="img" src="images/home/iconom1.jpg" alt="icono"width="50px" height="48px">
        <a href="user@user.com"><h4>Satan.21</h4></a>
        <br>
        <img class="img" src="images/home/iconom2.jpg" alt="icono"width="50px" height="48px">
        <a href="user@user.com"><h4>Copito_Hs</h4></a>
        <br>
        <img class="img" src="images/home/iconom3.jpg" alt="icono"width="50px" height="48px">
        <a href="user@user.com"><h4>Bolita.000</h4></a>
        <br>
        <img class="img" src="images/home/iconom.jpg" alt="icono"width="50px" height="48px">
        <a href="user@user.com"><h4>Lechuga_verde</h4></a>
        <br>
        <img class="img" src="images/home/iconom1.jpg" alt="icono"width="50px" height="48px">
        <a href="user@user.com"><h4>Satan.21</h4></a>
        <br>
        <img class="img" src="images/home/iconom2.jpg" alt="icono"width="50px" height="48px">
        <a href="user@user.com"><h4>Copito_Hs</h4></a>
        <br>
        <img class="img" src="images/home/iconom3.jpg" alt="icono"width="50px" height="48px">
        <a href="user@user.com"><h4>Bolita.000</h4></a>
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
        <li><a href="preguntas.php">FAQ</a></li>
      </ul>
    </footer>
  </section>

@endsection
