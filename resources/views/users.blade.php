<!DOCTYPE html>
    @foreach ($users as $user)
      <a href="perfil/{{$user->id}}">{{$user->user}}</a> <br>
    @endforeach
