<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombre'=>['required','string','max:255'],
            'apellido'=>['required','string','max:255'],
            'usuario' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'contraseña' => ['required', 'string', 'min:8', 'confirmed'],
            'contraseña_confirmation'=>['required_with:contraseña|same:contraseña|min:8'],
            'pais'=>['required','string','max:3'],
            'dia'=>['required','integer'],
            'mes'=>['required','integer'],
            'año'=>['required','integer'],

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
      $request=request();
      $ruta=$request->file('fotoperfil');
      $image=basename($ruta);
      $fecha=$data['dia']."/".$data['mes']."/".$data["año"];
        return User::create([
            'nombre' => $data['nombre'],
            'apellido'=>$data['apellido'],
            'user'=>$data['usuario'],
            'sexo'=>$data['sexo'],
            'email' => $data['email'],
            'password' => Hash::make($data['contraseña']),
            'pais'=> $data["pais"],
            'fotoperfil'=>$image,
            'fecha'=>$fecha

        ]);
    }
}
