@php
// $pais = [
// "Arg" => "Argentina",
// "Bol" => "Bolivia",
// "Chi" => "Chile",
// "Col" => "Colombia",
// "Cos" => "Costa Rica",
// "Cub" => "Cuba",
// "Ecu" => "Ecuador",
// "Sal" => "El Salvador",
// "Esp" => "España",
// "Gua" => "Guatemala",
// "Hon" => "Honduras",
// "Mex" => "México",
// "Nic" => "Nicaragua",
// "Pan" => "Panamá",
// "Par" => "Paraguay",
// "Pue" => "Puerto Rico",
// "Per" => "Perú",
// "Dom" => "República Dominicana",
// "Uru" => "Uruguay",
// "Ven" => "Venezuela"
//
// ];

$dia = array(1,2,3,4,5,6,7,8,9,10,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31);

$mes =[
 "1" => "Enero",
 "2" => "Febrero",
 "3" => "Marzo",
 "4" => "Abril",
 "5" => "Mayo",
 "6" => "Junio",
 "7" => "Julio",
 "8" => "Agosto",
 "9" => "Septiembre",
 "10" => "Octubre",
 "11" => "Noviembre",
 "12" => "Diciembre"

];
$año= array(2006,2005,2004,2003,2002,2001,2000,1999,1998,1997,1996,1995,1994,1993,1992,1991,1990,1989,1988,1987,1986,1985,1984,1983,1982,1981,1980,1979,1978,1977,1976,1975,1974,1973,1972,1971,1970,1969,1968,1967,1966,1965,1964,1963,1962,1961,1960,1959,1958,1957,1956,1955,1954,1953,1952,1951,1950,1949,1948,1947,1946,1945,1944,1943,1942,1941,1940,1939,1938,1937,1936,1935,1934,1933,1932,1931,1930,1929,1928,1927,1926,1925,1924,1923,1922,1921,1920);

@endphp
<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Lato|Merienda+One|Merriweather|Montserrat&display=swap" rel="stylesheet">
      <link rel="shortcut icon" href="../images/icon-lazy.png">
    <title>Registro</title>
</head>

<body class="fondooscuro" id="@php
 $id=chr(rand(ord("a"), ord("s")));
 echo $id;
@endphp">
    <header>
        <nav class="nav-forms">
            <a href="{{ url('/') }}"><img src="images/icon-lazy.png" alt="icono" class="iconoreg"></a>
            <a class="boton-form btn" role="button" href="{{ url('/login') }}">Inicia sesión</a>
        </nav>
    </header>

    <section class="cajareg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-6 cardreg" id="register">
                    <div class="card mt-3">
                        <h5 class="card-header headerreg col-md-12">{{ __('Unete a Sloth!') }}</h5>
                        <div class="card-body cardbodyreg ">
                            <form id="formulario" name="for"method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row justify-content-around" id="none">
                                    <div class="form-group col-6">
                                      {{-- Nombre --}}

                                        <label for="nombre" class="col-form-label text-md-right">{{ __('Nombre') }}</label>
                                        <input id="nombre" type="text" class="form-control @error('name') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" autocomplete="nombre" autofocus>
                                        @error('nombre')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <p id="errorNomb"  class="invalid-feedback"></p>
                                    </div>
                                    {{-- apellido --}}

                                    <div class="form-group col-6 ">
                                        <label for="apellido" class="col-form-label text-md-right">{{ __('Apellido') }}</label>
                                        <input id="apellido" type="text" class="form-control @error('apellido') is-invalid @enderror" name="apellido" value="{{ old('apellido') }}" autocomplete="apellido" autofocus>
                                        @error('apellido')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <p id="errorAp" class="invalid-feedback"></p>
                                    </div>
                                </div>
                                {{-- Usuario --}}

                                <div class="row justify-content-around">
                                    <div class="form-group col-12 col-md-6">
                                        <label for="usuario" class="col-form-label text-md-right">{{ __('Nombre de usuario') }}</label>
                                        <input id="user" type="text" class="form-control @error('usuario') is-invalid @enderror" name="user" value="{{ old('usuario') }}" required autocomplete="usuario" autofocus>
                                        @error('user')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <p id="errorUser"  class="invalid-feedback"></p>
                                    </div>
                                    {{-- email --}}

                                    <div class="form-group col-12 col-md-6">
                                        <label for="email" class="col-form-label text-md-right">{{ __('Correo electrónico') }}</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <p id="errorEm" class="invalid-feedback"></p>
                                    </div>
                                </div>
                                {{-- Contraseña --}}

                                <div class="row justify-content-around">
                                    <div class="form-group col-12 col-md-6">
                                        <label for="contraseña" class="col-form-label text-md-right">{{ __('Contraseña') }}</label>
                                        <input id="contraseña" type="password" class="form-control  @error('contraseña') is-invalid @enderror" name="contraseña" required autocomplete="contraseña">
                                        @error('contraseña')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <p id="errorCon" class="invalid-feedback"></p>
                                    </div>
                                    <div class="form-group col-12 col-md-6">
                                        <label for="confcontra" class="col-form-label text-md-right">{{ __('Confirmar contraseña') }}</label>
                                        <input id="confcontra" type="password" class="form-control @error('contraseña_confirmation') is-invalid @enderror" name="contraseña_confirmation" required autocomplete="confcontra">
                                        @error('contraseña_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <p id="errorConCon" class="invalid-feedback"></p>
                                    </div>
                                </div>

                                {{-- Sexo  --}}
                                <div class="row justify-content-around" id="none">

                                    <div class="form-group row col-5 ">
                                        <label for="genero" class="col-form-label text-md-right">{{ __('Genero') }}</label>

                                        <select class="custom-select" id="sexo" name="sexo" aria-label="Example select with button addon">
                                            <option selected value="H">Hombre</option>
                                            <option value="M">Mujer</option>
                                            <option value="O">Otro</option>

                                        </select>

                                    </div>
                                    <div class="form-group row col-7">
                                        <label for="pais" class="col-form-label text-md-right">{{ __('Nacionalidad') }}</label>
                                        <select class="custom-select @error('pais') is-invalid @enderror" id="pais" name="pais" aria-label="Example select with button addon">

                                        </select>
                                        <div  id="provAr" >

                                        </div>
                                    </div>
                                </div>
                                <label id="none" for="cumpleanos" class="col-form-label text-md-right">{{ __('Cumpleaños') }}</label>
                                <div class="row justify-content-around" id="none">

                                    <div class="form-group row col-4">


                                        <select class="custom-select @error('dia') is-invalid @enderror" id="dia" name="dia" aria-label="Example select with button addon">
                                            <option selected>Dia</option>
                                            @foreach ($dia as $dia)
                                            <option value="{{$dia}}">{{ $dia}}</option>
                                            @endforeach

                                        </select>
                                    </div>

                                    <div class="form-group row col-4">
                                        <select class="custom-select @error('mes') is-invalid @enderror" id="mes" name="mes" aria-label="Example select with button addon">
                                            <option selected>Mes</option>

                                            @foreach ($mes as $id => $mes)
                                            <option value="{{$id}}">{{ $mes}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                    <div class="form-group row col-4">
                                        <select class="custom-select @error('año') is-invalid @enderror" id="año" name="año" aria-label="Example select with button addon">
                                            <option selected>Año</option>
                                            @foreach ($año as $año)
                                            <option value="{{$año}}">{{ $año}}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>

                                <div class="input-group">
                                    <div class="custom-file divfotoreg">
                                        <input type="file" class="custom-file-input" id="fotoperfil" name="fotoperfil" aria-describedby="subefoto" lang="es" required>
                                        <label class="custom-file-label" for="sube foto">¡Sube una foto!</label>
                                    </div>

                                </div>
                        </div>
                        <div class="form-group row ">
                            <div class="col-md-6">
                                <button onclick="save()" id="sub" type="submit" class="btn btn-secondary btn-lg btn-block botonform">
                                    {{ __('Registrate') }}
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
    <script src="js/form.js" charset="utf-8"></script>
</body>

</html>
