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
            'user' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'contraseña' => ['required', 'string', 'min:8', 'confirmed'],
            'contraseña_confirmation'=>['required_with:contraseña|same:contraseña|min:8'],
            'fotoperfil'=>['required','file','image'],
        ]);

      $this->validate($data);
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
      $image = $request->file('fotoperfil');
      $ruta=public_path().'/fotos';
      $fileName=uniqid().$image->getClientOriginalName();
      $image->move($ruta,$fileName);
      $fecha=$data['dia']."/".$data['mes']."/".$data["año"];
      if (strlen($data['nombre'])==0) {
        $data['nombre']='User';
      }
      if (strlen($data['apellido'])==0) {
        $data['apellido']='Profile';
      }
        return User::create([
            'nombre' => $data['nombre'],
            'apellido'=>$data['apellido'],
            'user'=>$data['user'],
            'sexo'=>$data['sexo'],
            'email' => $data['email'],
            'password' => Hash::make($data['contraseña']),
            'pais'=> $data["pais"],
            'fotoperfil'=>$fileName,
            'fecha'=>$fecha

        ]);
    }
}
