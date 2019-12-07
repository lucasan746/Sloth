<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <link rel="stylesheet" href="/css/style.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <header>
      <nav class="navbar">
          <img src="images/icon-lazy.png" alt="iconoprincipal" class="logohome">
          <div class="iconosderecha">

            <form class="" action="users" method="get" enctype="multipart/form-data">
              @csrf
              <input type="search" name="search" value="" class="busqueda">
              <button type="submit" name="button" >buscar!</button>

            </form>

              <img src="images/iconos/usuario.png" alt="solicitudes" class="icon-solicitud">
              <img src="images/iconos/bocadillo.png" alt="mensajes" class="icon-mensaje">
              <img src="images/iconos/notificacion.png" alt="notificaciones" class="icon-notif">
              <img src="images/iconos/ajustes.png" alt="grupos" class="icon-config">
              <a href="finsesion.php"><img src="images/iconos/outblanco.png" alt="ajustes" class="icon-cierre"></a>

          </div>
      </nav>
    </header>
<br><br><br><br><br>
    @foreach ($users as $user)
      <a href="perfil/{{$user->id}}">{{$user->user}}</a> <br>
    @endforeach

  </body>
</html>
