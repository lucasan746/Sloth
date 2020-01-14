
let formulario= document.forms[0];
let inputs=formulario.elements;
let inputNombre=inputs[1];
let inputApellido= inputs[2];
let inputUser=inputs[3];
let inputEmail=inputs[4];
let inputContra=inputs[5];
let inputConfCon=inputs[6];
let inputGenero=inputs[7];
let selectPaises = document.getElementById('pais');
let divProv = document.getElementById('provAr');
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
  let validacion= false;
  formulario.onchange=function() {
    if (inputUser.value.length==''||regexEmail.test(inputEmail.value)==false||inputContra.value.length<=8||inputConfCon.value!=inputContra.value) {
      validacion=false;
    }
    else {
      validacion=true;
    }
  }
inputNombre.onchange=function(){
    if (inputNombre.value.length<=2) {
      inputNombre.setAttribute('class','form-control is-invalid');
      if (errorNomb.textContent=='') {
        let mensajeNombre= document.createTextNode('El nombre es demasiado corto');
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
        let mensajeApellido=document.createTextNode('El apellido es demasiado corto');
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
        let mensajeEm= document.createTextNode('El email es inválido');
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
        let mensajeCon = document.createTextNode('La contraseña debe tener 8 caracteres');
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
        let mensajeCofCon = document.createTextNode('La contraseña no coincide');
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
  function save() {
    if (validacion==true) {
      document.for.submit();
    }
    else {
      console.log('errores');
    }
  }

  // APi

  fetch('https://restcountries.eu/rest/v2')
    .then(function(datos){
      return datos.json();
    })
    .then(function(paises){
      for (pais of paises) {
        let optionPais = document.createElement('option');
        optionPais.setAttribute('value', pais.alpha2Code);
        let nombrePais = document.createTextNode(pais.name);
        optionPais.appendChild(nombrePais);
        selectPaises.appendChild(optionPais);
      }
    });

    selectPaises.onchange = function(){
      let paisElegido = selectPaises.options[selectPaises.selectedIndex].value;
      console.log(paisElegido);
      if (paisElegido == "AR") {
        let selectProvincia = document.createElement('select');
        selectProvincia.setAttribute('class','custom-select');
        // selectProvincia.classList.toggle('custom-select');
        selectProvincia.classList.toggle('provincia');
        fetch("https://apis.datos.gob.ar/georef/api/provincias")
        .then(function(respuesta){
          return respuesta.json();
        })
        .then(function(data){
          for (provincia of data.provincias) {
            var optionProvincia = document.createElement('option');
            var textoProvincia = document.createTextNode(provincia.nombre);
            optionProvincia.appendChild(textoProvincia);
            optionProvincia.setAttribute('value', provincia.id)
            console.log(optionProvincia);
            selectProvincia.appendChild(optionProvincia);
            divProv.appendChild(selectProvincia);
          }
        })
      }
      else {
        let provincia = document.querySelector('.provincia');
        provincia.parentNode.removeChild(provincia);
      }
    }
