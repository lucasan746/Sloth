@extends('layouts.master')

@section('content')
  {{-- Perfil // Trae variable con un usuario ($perfil)  --}}
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
<perfil-component></perfil-component>
</section>

    {{-- Seccion derecha--}}
    <section class="seccionder position-fixed">

      <article class="publicidad">
        <div class="">
        <h4 class="titusugeridos">Publicidad</h4>
        <a href="http://santuarioigualdad.org"><img src="/images/home/publicidad3.jpg" alt="" width="100%" height="85%"></a>
      </div>
      </article>


      <article class="adopciones">
        <h4 class="titusugeridos">Publicidad</h4>
        <a href="http://reddeapoyocanino.org"><img src="/images/home/publicidad2.jpg" alt="fondo" width="100%" height="90%"></a>
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
