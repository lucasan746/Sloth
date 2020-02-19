@extends('layouts.master')

@section('content')
        <div class="card-group">
    @foreach ($users as $user)

    <div class="card m-2">
      <a href="perfil/{{$user->id}}"><img src="/fotos/{{$user->fotoperfil}}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{$user->user}}</h5>
        <p class="card-text">{{$user->nombre." ".$user->apellido}}</p>
      </div></a>
    </div>

    @endforeach
      </div>
@endsection
