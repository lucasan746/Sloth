<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport"
    content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Lato|Merienda+One|Merriweather|Montserrat&display=swap" rel="stylesheet">

    <title>Registro</title>
  </head>
<body class="fondooscuro" id="@php
 $id=chr(rand(ord("a"), ord("s")));
 echo $id;
@endphp">
    <header>
      <nav class="nav-forms">
        <a href="{{ url('/index') }}"><img src="images/icon-lazy.png" alt="icono"  class="iconoreg"></a>
          <a class="botoninic-p btn" role="button" href="{{ url('/register') }}">Registrate</a>
      </nav>
    </header>

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

        <button type="submit" name="enviar" class="botonlog btn">Iniciar sesión</button>
      </form>
    </article>
  </section>
</body>
</html>
