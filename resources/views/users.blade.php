@extends('layouts.master')

@section('content')
    @foreach ($users as $user)


        <div class="card">
<a class="busquedas" href="perfil/{{$user->id}}">
          <div class="container">
            <h4 class="titit"><b>{{$user->user}}</b></h4>
            <img class="imgbusq"src="/storage/{{$user->fotoperfil}}" alt="">
          </div>
          </a>
        </div>
<br><br>
    @endforeach
@endsection
