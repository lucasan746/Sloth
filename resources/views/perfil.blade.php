@extends('layouts.app')

@section('content')
  {{-- Perfil amigo --}}
<img src="{{ $perfil->fotoperfil }}" alt="fotodeperfil">
<h1>Nombre de usuario: {{ $perfil->user }}</h1>
<h2>Email: {{$perfil->email}}</h2>
{{-- Seguir usuarios --}}
@php
  $amigos=$perfil->amigos;
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
@if (isset($follow))
  <p>Ya sigues a este usuario</p>
  <form class="" action="/unfollow" method="post"  enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id_amigo" value="{{$follow}}">
    <button type="submit" name="button">Dejar de seguir</button>
  </form>
  @else
    <form class="" action="/follow" method="post"  enctype="multipart/form-data">
      @csrf
      <input type="hidden" name="id_user" value="{{$perfil->id}}">
      <input type="hidden" name="seguir" value="{{$perfil->id}}">
      <button type="submit" name="button">Seguir a este usuario</button>
    </form>
@endif
@endsection
