@extends('layouts.master')

@section('content')
  {{-- Perfil amigo --}}
<img src="/storage/{{ $perfil->fotoperfil }}" alt="fotodeperfil">
<h1>Nombre de usuario: {{ $perfil->user }}</h1>
<h2>Email: {{$perfil->email}}</h2>
{{-- Seguir usuarios --}}
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

@endsection
