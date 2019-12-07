@extends('layouts.app')

@section('content')
  <section class="cajadelogin" id="@php
   $id=chr(rand(ord("a"), ord("s")));
   echo $id;
  @endphp" >
    <article class="login">
      <h1 class="titulog2">Sloth</h1>

      <form class="iniciases" action="{{ route('login') }}" method="post"  enctype="multipart/form-data">
        @csrf
        {{-- usuario --}}
        <label class="errorlogin1" for="email"{{ __('E-Mail Address') }}></label>
        <input class="inputusua form-control @error('login') is-invalid @enderror"type="login" name="login" placeholder="Nombre de usuario" value="{{ old('login') }}" required autocomplete="login" autofocus>
        @error('login')
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
