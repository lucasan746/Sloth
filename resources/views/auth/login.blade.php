@extends('layouts.app')

@section('content')
<<<<<<< HEAD
  <section class="cajadelogin" id="@php
   $id=chr(rand(ord("a"), ord("s")));
   echo $id;
  @endphp" >
=======
  <section class="cajadelogin" >

>>>>>>> 81ca7526de5e269872d9b1357eba336f807f32d8
    <article class="login">
      <h1 class="titulog2">Sloth</h1>

      <form class="iniciases" action="{{ route('login') }}" method="post">
        @csrf
        {{-- usuario --}}
        <label class="errorlogin1" for="email"{{ __('E-Mail Address') }}></label>
        <input class="inputusua form-control @error('email') is-invalid @enderror"type="email" name="email" placeholder="Nombre de usuario" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        {{-- contraseña --}}
        <label class="errorlogin2" for="Contraseña"></label>
        <input class="inputcontra @error('password') is-invalid @enderror" type="password" name="password" placeholder="Contraseña" required autocomplete="current-password">
        @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
        @enderror

        <br>

        <label class="recuerda" for="recordarus">Recordar Usuario</label>
        <input class="inputrecuerda"type="checkbox" name="remenber" {{ old('remember') ? 'checked' : '' }}>

        <button type="submit" name="enviar" class="botonlog">Iniciar Sesión</button>
      </form>
    </article>
  </section>
@endsection
