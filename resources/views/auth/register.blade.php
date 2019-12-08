@php
$pais = [
"Arg" => "Argentina",
"Bol" => "Bolivia",
"Chi" => "Chile",
"Col" => "Colombia",
"Cos" => "Costa Rica",
"Cub" => "Cuba",
"Ecu" => "Ecuador",
"Sal" => "El Salvador",
"Esp" => "España",
"Gua" => "Guatemala",
"Hon" => "Honduras",
"Mex" => "México",
"Nic" => "Nicaragua",
"Pan" => "Panamá",
"Par" => "Paraguay",
"Pue" => "Puerto Rico",
"Per" => "Perú",
"Dom" => "República Dominicana",
"Uru" => "Uruguay",
"Ven" => "Venezuela"

];

$dia = array(1,2,3,4,5,6,7,8,9,10,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31);

$mes =[
 "Ene" => "Enero",
 "Feb" => "Febrero",
 "Mar" => "Marzo",
 "Abr" => "Abril",
 "May" => "Mayo",
 "Jun" => "Junio",
 "Jul" => "Julio",
 "Ago" => "Agosto",
 "Sep" => "Septiembre",
 "Oct" => "Octubre",
 "Nov" => "Noviembre",
 "Dic" => "Diciembre"

];
$año= array(2006,2005,2004,2003,2002,2001,2000,1999,1998,1997,1996,1995,1994,1993,1992,1991,1990,1989,1988,1987,1986,1985,1984,1983,1982,1981,1980,1979,1978,1977,1976,1975,1974,1973,1972,1971,1970,1969,1968,1967,1966,1965,1964,1963,1962,1961,1960,1959,1958,1957,1956,1955,1954,1953,1952,1951,1950,1949,1948,1947,1946,1945,1944,1943,1942,1941,1940,1939,1938,1937,1936,1935,1934,1933,1932,1931,1930,1929,1928,1927,1926,1925,1924,1923,1922,1921,1920);

@endphp
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
          <a class="botoninic-p btn" role="button" href="{{ url('/login') }}">Inicia sesión</a>
      </nav>
    </header>

<section class="cajareg"  >
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-5">
            <div class="card mt-3">
                <h5 class="card-title">{{ __('Tus datos') }}</h5>

                <div class="card-body ">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control @error('name') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>

                                @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="apellido" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

                            <div class="col-md-6">
                                <input id="apellido" type="text" class="form-control @error('apellido') is-invalid @enderror" name="apellido" value="{{ old('apellido') }}" required autocomplete="apellido" autofocus>

                                @error('apellido')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="usuario" class="col-md-4 col-form-label text-md-right">{{ __('Nombre de usuario') }}</label>

                            <div class="col-md-6">
                                <input id="usuario" type="text" class="form-control @error('usuario') is-invalid @enderror" name="usuario" value="{{ old('usuario') }}" required autocomplete="usuario" autofocus>

                                @error('usuario')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo electrónico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="contraseña" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="contraseña" type="password" class="form-control  @error('password') is-invalid @enderror" name="contraseña" required autocomplete="contraseña">

                                @error('contraseña')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="confcontra" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="confcontra" type="password" class="form-control" name="confcontra" required autocomplete="confcontra">
                            </div>
                        </div>

  <div class="form-group row">
                          <label for="genero" class="col-md-4 col-form-label text-md-right">{{ __('Genero') }}</label>
                       <div class="input-group col-lg-4  ">
                          <select class="custom-select" id="sexo" name="sexo" aria-label="Example select with button addon">
                            <option selected>Hombre</option>
                            <option value="1">Mujer</option>
                            <option value="2">Otro</option>

                          </select>
                        </div>
  </div>

                         <div class="row">

                         <div class="input-group col-lg-4">
                           <select class="custom-select" id="dia" name="dia" aria-label="Example select with button addon">
                             <option selected>Dia</option>
                             @foreach ($dia as  $dia)
                           <option value="">{{ $dia}}</option>
                         @endforeach

                           </select>
                         </div>

                       <div class="input-group col-lg-4">
                         <select class="custom-select" id="mes" name="mes" aria-label="Example select with button addon">
                           <option selected>Mes</option>

                           @foreach ($mes as  $mes)
                         <option value="">{{ $mes}}</option>
                       @endforeach
                         </select>
                       </div>

                     <div class="input-group col-lg-4">
                       <select class="custom-select" id="año" name="año" aria-label="Example select with button addon">
                         <option selected>Año</option>
                         @foreach ($año as  $año)
                       <option value="">{{ $año}}</option>
                     @endforeach
                       </select>
                     </div>


                     <div class="input-group col-lg-8">
                       <select class="custom-select" id="pais" name="pais" aria-label="Example select with button addon">
                         <option selected>Pais</option>
                         @foreach ($pais as  $pais)
                       <option value="">{{ $pais}}</option>
                     @endforeach
                       </select>
                     </div>
                     <div class="input-group">
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="fotoperfil" name="fotoperfil" aria-describedby="subefoto" lang="es">
    <label class="custom-file-label" for="sube foto">Elige una foto</label>
  </div>

</div>
                          </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">
                                    {{ __('Siguiente') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


</section>
</body>
</html>
