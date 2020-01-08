<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Lato|Roboto+Condensed&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="../images/icon-lazy.png">
    <title>Sloth</title>
  </head>
  <body class="home">
    <header>
      <nav class="navhome">


          <div class="iconosderecha">
  <a href="{{route('home')}}"> <img src="../images/icon-lazy.png" alt="iconoprincipal" class="logohome"></a>
            <form class="" action="{{route('usuarios')}}" method="get" enctype="multipart/form-data">
              @csrf
              <input type="search" name="search" value="" class="busqueda">
              <button type="submit" name="button" hidden >buscar!</button>

            </form>
            <div class="control lights">
  <a href="#"><img src="https://img.icons8.com/color/48/000000/sloth.png"></a>
</div>
             <a class="icon" href="#"><img src="../images/iconos/usuario.png" alt="solicitudes" class="icon-solicitud"></a>
          <a class="icon" href="#"><img src="../images/iconos/bocadillo.png" alt="mensajes" class="icon-mensaje"></a>
              <a class="icon" href="#">  <img src="../images/iconos/notificacion.png" alt="notificaciones" class="icon-notif"></a>
            <a class="icon" href="#"><img src="../images/iconos/ajustes.png" alt="grupos" class="icon-config"></a>

              <a class="icon" href="perfil/{{Auth::user()->id}}"><img src="/storage/{{Auth::user()->fotoperfil}}" alt="fotoperfil" class="icon-foto"></a>
              <a class="icon" href="{{ route('logout') }}" onclick="event.preventDefault();
              document.getElementById('logout-form').submit();"><img src="../images/iconos/outblanco.png" alt="ajustes" class="icon-cierre"></a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>

          </div>
      </nav>
    </header>
    <br><br><br><br><br>
    <nav class="navphone">


        <div class="iconosderecha">
           <a href="#"><img src="../images/iconos/usuario.png" alt="solicitudes" class="icon-solicitud"></a>
        <a href="#"><img src="../images/iconos/bocadillo.png" alt="mensajes" class="icon-mensaje"></a>
            <a href="#">  <img src="../images/iconos/notificacion.png" alt="notificaciones" class="icon-notif"></a>
          <a href="#"><img src="../images/iconos/ajustes.png" alt="grupos" class="icon-config"></a>

            <a href="perfil/{{Auth::user()->id}}"><img src="/storage/{{Auth::user()->fotoperfil}}" alt="fotoperfil" class="icon-foto"></a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"><img src="../images/iconos/outblanco.png" alt="ajustes" class="icon-cierre"></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

        </div>
    </nav>
  @yield('content')
  <script
			  src="https://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			  crossorigin="anonymous">
</script>
  <script src="../js/theme.js" charset="utf-8"></script>
  <script src="../js/post.js" charset="utf-8"></script>
  </body>
</html>
