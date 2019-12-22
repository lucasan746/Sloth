
let formulario= document.forms[0];
let inputs=formulario.elements;
let inputNombre=inputs[1];
let inputApellido= inputs[2];
let inputUser=inputs[3];
let inputEmail=inputs[4];
let inputContra=inputs[5];
let inputConfCon=inputs[6];
let inputGenero=inputs[7];
let inputPais=inputs[8];
let inputDia=inputs[9];
let inputMes=inputs[10];
let inputAño=inputs[11];
let inputFoto=inputs[12];
let botonEnviar=inputs[13];
let errorNombre=document.getElementById('errorNomb');
let errorAp=document.getElementById('errorAp');
let errorEm=document.getElementById('errorEm');
let errorCon=document.getElementById('errorCon');
let errorConCon=document.getElementById('errorConCon');
let regexEmail=(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/);
  console.log( inputNombre);

  inputNombre.onchange=function(){
    if (inputNombre.value.length<=2) {
      inputNombre.setAttribute('class','form-control is-invalid');
      if (errorNomb.textContent=='') {
        let mensajeNombre= document.createTextNode('Es demasiado corto');
        errorNomb.appendChild(mensajeNombre);
      }

    }
    else {
      inputNombre.setAttribute('class','form-control is-valid');
    }

  }
  inputApellido.onchange=function(){
    if (inputApellido.value.length<=2) {
      inputApellido.setAttribute('class','form-control is-invalid');
      if (errorAp.textContent=='') {
        let mensajeApellido=document.createTextNode('es demasiado corto');
        console.log(inputApellido);
        errorAp.appendChild(mensajeApellido);
      }
    }
    else {
      inputApellido.setAttribute('class','form-control is-valid')
    }

  }
  inputUser.onchange=function(){
    if (inputUser.value.length=='') {
      inputUser.setAttribute('class','form-control is-invalid');
      if (errorUser.textContent=='') {
        let mensajeUser=document.createTextNode('Debe escribir un nombre de usuario');
        errorUser.appendChild(mensajeUser);
      }
    }
    else {
      inputUser.setAttribute('class','form-control is-valid');
    }
  }

  inputEmail.onchange=function(){
    if (regexEmail.test(inputEmail.value)==false) {
      inputEmail.setAttribute('class','form-control is-invalid');
      if (errorEm.textContent=='') {
        let mensajeEm= document.createTextNode('El email es invalido');
        errorEm.appendChild(mensajeEm)
      }
    }
    else {
      inputEmail.setAttribute('class','form-control is-valid');
    }

  }
  inputContra.onchange=function(){
    if (inputContra.value.length<=8) {

      inputContra.setAttribute('class','form-control is-invalid');
      if (errorCon.textContent=='') {
        let mensajeCon = document.createTextNode('La contraseña debe tener como minimo 8 caracteres');
        errorCon.appendChild(mensajeCon);
      }
    }
    else {
      inputContra.setAttribute('class','form-control is-valid');
    }
  }


  inputConfCon.onchange=function(){
    if (inputConfCon.value!=inputContra.value) {
      inputConfCon.setAttribute('class','form-control is-invalid');
      if (errorConCon.textContent=='') {
        let mensajeCofCon = document.createTextNode('Las contraseñas no coinciden');
        errorConCon.appendChild(mensajeCofCon);
      }

    }
    else {
      inputConfCon.setAttribute('class', 'form-control is-valid');
    }
  }
  formulario.onsubmit=function(e){
    e.preventDefault();
  }

  // APi
  let selectProv = document.getElementById('selectProv');

  // function mostrarProvincia() {
  //   fetch('https://apis.datos.gob.ar/georef/api/provincias')
  //   .then(function(datos) {
  //     return datos.json();
  //   })
  //   .then(function(datos){
  //     let provincias =datos.provincias;
  //     for (provincia of provincias) {
  //       let optionProvincia = document.createElement('option');
  //       let nombreProvincia = provincia.nombre;
  //       document.createTextNode(provincia.nombre);
  //       optionProvincia.appendChild(nombreProvincia);
  //       optionProvincia.setAttribute('value',provincia.id);
  //       selectProv.appendChild(optionProvincia);
  //     }
  //   })
  // }
  // mostrarProvincia();
