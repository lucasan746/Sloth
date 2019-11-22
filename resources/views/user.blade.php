<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @foreach ($user as $ku)
{{$ku->nombre}}
    @endforeach
  </body>
</html>
