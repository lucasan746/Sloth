@extends('layouts.master')

@section('content')
  {{-- Perfil  --}}
  <div class="row justify-content-center col-9">

    <section class="seccionizq ">
      <div class="row  cajaperfil  ">
        <div class="col-4 mt-3 mb-3 desperfil" >
          <img src="/storage/{{ $perfil->fotoperfil }}" alt="fotodeperfil" width="200px" height="200px" class="imgperfil">
      </div>

          <div class="col-7 m-auto dataperfil">
            <h5 class="card-title">{{ $perfil->user }}</h5>
            <p class="card-text">Agrega una breve presentación para que las personas sepan más sobre ti.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>

      </div>

      @php
      $amigos=Auth::user()->amigos;
      @endphp
      @foreach ($amigos as $amigo)
      @if ($amigo->amigo==$perfil->id)
      @php
      $follow=$amigo->id;
        break;
      @endphp
      @else
      @php
      $follow=false;
      @endphp
      @endif
      @endforeach
      @if (Auth::user()->id===$perfil->id)

      <div class=" cajaposteo ">
        <form class="" action="/publicacion" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          <h4 class="card-header ">Crea una publicación</h4>
            <textarea class="col-12 border-light p-3" name="name" rows="3" cols="80" placeholder="¿Qué estas pensando?"></textarea>

            <div class="image-upload ">
      <label for="file-input">

        <img src="/images/iconos/iconfile-2.png" alt ="foto" title ="foto" >
      </label>
          <input id="file-input" name="media" type="file"/>
          <input type="hidden" name="id" value="{{Auth::user()->id}}">
        <button class="botonpost btn btn-primary" type="submit" name="button">Publicar</button>
  </div>
        </form>


      @else
      @isset($amigo->id)
      @if ($follow==$amigo->id)
      <p>Ya sigues a este usuario</p>
      <form class="" action="/unfollow" method="post"  enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id_amigo" value="{{$follow}}">
        <input type="hidden" name="seguir" value="{{$perfil->id}}">
        <button class="btn btn-primary" type="submit" name="button">Dejar de seguir</button>
      </form>
      @else
        <form class="" action="/follow" method="post"  enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="id_user" value="{{Auth::user()->id}}">
          <input type="hidden" name="seguir" value="{{$perfil->id}}">
          <button class="btn btn-primary" type="submit" name="button">Seguir a este usuario</button>
        </form>
      @endif
      @endisset
      @if (isset($amigo->id))
      @else
      <form class="" action="/follow" method="post"  enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id_user" value="{{Auth::user()->id}}">
        <input type="hidden" name="seguir" value="{{$perfil->id}}">
        <button class="btn btn-primary" type="submit" name="button">Seguir a este usuario</button>
      </form>
      @endif
      @endif
      </div>
    </section>
      {{-- @foreach ($posteos as $post)
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
  </section> --}}
  @php
    // $al=rand(1,count($posteos));
    // $al2=rand(1,count($posteos));
    // $al3=rand(1,count($posteos));
  @endphp

    {{-- Seccion derecha--}}
    <section class="seccionder position-fixed">

      <article class="sugeridos">
        <div class="">
        <h4 class="titusugeridos">Sugerencias para ti</h4>
        <a href="#"><h4 class="linksuge">Ver todo</h4></a>
      </div>
      </article>


      <article class="adopciones">
        <h4 class="titusugeridos">Publicidad</h4>
        <a href="#"><img src="/images/home/adopcion.png" alt="fondo" width="100%"></a>
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
  </div>

@endsection
