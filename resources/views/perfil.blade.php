@extends('layouts.app')

@section('content')
<img src="{{ $user->fotoperfil }}" alt="fotodeperfil">
<h1>Nombre de usuario: {{ $user->user }}</h1>
<h2>Email: {{$user->email}}</h2>


@endsection
