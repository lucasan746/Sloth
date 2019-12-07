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
          <a class="botoninic-p btn" role="button" href="{{ url('/login') }}">Iniciar sesión</a>
      </nav>
    </header>

<section class="cajareg"  >
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-5">
            <div class="card mt-3">
                <div class="card-header">{{ __('Tus datos') }}</div>

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
                                <input id="usuario" type="text" class="form-control @error('usuario') is-invalid @enderror" name="usuari" value="{{ old('usuario') }}" required autocomplete="usuario" autofocus>

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
                                <input id="contraseña" type="password" class="form-control @error('password') is-invalid @enderror" name="contraseña" required autocomplete="contraseña">

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
                        <div class="btn-group" role="group" aria-label="Basic example">
                        <label for="confcontra" class="col-md-4 col-form-label text-md-right">{{ __('Genero') }}</label>
                       <div class=""> <button type="button" class="btn btn-secondary">Hombre</button> </div>

                        <div class=""><button type="button" class="btn btn-secondary">Mujer</button> </div>

                        <div class=""><button type="button" class="btn btn-secondary">Otro</button> </div>
                         </div>


                         <div class="row">

                         <div class="input-group col-lg-4">
                           <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                             <option selected>Dia</option>
                             <option value="1">One</option>
                             <option value="2">Two</option>
                             <option value="3">Three</option>
                           </select>
                         </div>

                       <div class="input-group col-lg-4">
                         <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                           <option selected>Mes</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                         </select>
                       </div>

                     <div class="input-group col-lg-4">
                       <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                         <option selected>Año</option>
                         <option value="1">One</option>
                         <option value="2">Two</option>
                         <option value="3">Three</option>
                       </select>
                     </div>
                     <div class="input-group col-lg-8">
                       <select class="custom-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                         <option selected>Pais</option>
                         <option value="1">One</option>
                         <option value="2">Two</option>
                         <option value="3">Three</option>
                       </select>
                     </div>
                     <div class="input-group">
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
    <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
  </div>
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Button</button>
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
