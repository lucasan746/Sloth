console.log('tema');
let barra = document.querySelector('.navhome');
let barraphone = document.querySelector('.navphone');
let perfil = document.querySelector('.perfilderecha');
let fotoperfil = document.querySelector('.imgperfil');
let boton =document.querySelector('#botonpost');
let posteo = document.querySelector('.cajaposteo');
let cajaperfil = document.querySelector('.cajaperfil');
let perfilamigo = document.querySelector('.perfilamigo');
let botonHome =document.querySelector('#formPost');
let botonBorrar =document.querySelector('#botonBorrar');
let camera = document.querySelector('.image-upload img');
let seguir =document.querySelector('#seguir');
document.querySelector('.lights').onclick = function(event){
  event.preventDefault();
  if (localStorage.theme=='true') {
    localStorage.theme=false;
    if (camera) {
      camera.src='/images/iconos/iconfile-2.png';
    }
  }
  else {
    localStorage.theme = true;
    if (camera) {
      camera.src='/images/iconos/camera.png';
    }
  }

  console.log(localStorage.theme);
  barra.classList.toggle('pink');
  barraphone.classList.toggle('pink');
  if (perfil) {
  perfil.classList.toggle('perfil-tema');
  botonHome.classList.toggle('pink');
  }
  if (boton) {
    fotoperfil.classList.toggle('pink');
    boton.classList.toggle('pink');
    botonBorrar.classList.toggle('pink');
  }
  if (posteo) {
    posteo.classList.toggle('pink');
  }
  if (cajaperfil) {
    cajaperfil.classList.toggle('pink');
  }
  if (perfilamigo) {
    perfilamigo.classList.toggle('pink');
  }
  if (seguir) {
    seguir.classList.toggle('pink');
  }
}


if (localStorage.theme=='true') {
    if (camera) {
      camera.src='/images/iconos/camera.png';
    }
  barra.classList.toggle('pink');
  barraphone.classList.toggle('pink');
  if (perfil) {
  perfil.classList.toggle('perfil-tema');
  botonHome.classList.toggle('pink');
  }
  if (boton) {
    fotoperfil.classList.toggle('pink');
    boton.classList.toggle('pink');
    botonBorrar.classList.toggle('pink');
  }
  if (posteo) {
    posteo.classList.toggle('pink');
  }
  if (cajaperfil) {
    cajaperfil.classList.toggle('pink');
  }
  if (seguir) {
    seguir.classList.toggle('pink');
  }
  if (perfilamigo) {
    perfilamigo.classList.toggle('pink');
  }

}
console.log(cajaperfil);
