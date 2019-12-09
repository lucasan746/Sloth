@extends('layouts.master')

@section('content')
  {{-- Perfil amigo --}}
  <div class="row">


  <div class=" card col-6  border-secondary">


  <div class="card mb-3 row " style="max-width: 700px;">
  <div class="row ">
    <div class="col-md-4  mt-3">
      <img src="/storage/{{ $perfil->fotoperfil }}" alt="fotodeperfil" width="200px" height="200px" class="imgperfil">
  </div>
    <div class="col-md-8 ">
      <div class="card-body">
        <h5 class="card-title">{{ $perfil->user }}</h5>
        <p class="card-text">Agrega una breve presentación para que las personas sepan más sobre ti.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>

@php
$amigos=Auth::user()->amigos;
@endphp
@foreach ($amigos as $amigo)
@if ($amigo->amigo!=$perfil->id)
@php
  $follow=false;
@endphp
@else
  @php
  $follow=$amigo->id;
  break;
  @endphp
@endif
@endforeach
@if (Auth::user()->id===$perfil->id)
<form class="" action="/publicacion" method="post" enctype="multipart/form-data">
  {{csrf_field()}}
  <label for="text">Que quieres compartir?</label>
  <br>
  <textarea name="text" rows="8" cols="80"></textarea>
  <br>
  <label for="img">Sube una foto o video</label>
  <input type="file" name="media" value="">
  <br>
  <input type="hidden" name="id" value="{{Auth::user()->id}}">
  <button type="submit" name="button">Publicar!</button>
</form>
@else
@if (isset($follow))
  <p>Ya sigues a este usuario</p>
  <form class="" action="/unfollow" method="post"  enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id_amigo" value="{{$follow}}">
    <input type="hidden" name="seguir" value="{{$perfil->id}}">
    <button type="submit" name="button">Dejar de seguir</button>
  </form>
  @else
    <form class="" action="/follow" method="post"  enctype="multipart/form-data">
      @csrf
      <input type="hidden" name="id_user" value="{{Auth::user()->id}}">
      <input type="hidden" name="seguir" value="{{$perfil->id}}">
      <button type="submit" name="button">Seguir a este usuario</button>
    </form>
@endif
@endif
<div class="card mb-3">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>
<div class="card mb-3">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>
<div class="card mb-3">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
  </div>
</div>
</div>

<div class="card col-2 border-secondary">
<h5 class="card-header col-md">Usuarios sugeridos</h5>
  <div class="card w-50">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Button</a>
  </div>
</div>
<div class="card w-50">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Button</a>
  </div>
</div>
<div class="card w-50">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Button</a>
  </div>
</div>
</div>






</div>

@endsection
