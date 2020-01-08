
const formPost = document.querySelector('#formPost');
const $seleccionArchivos = document.querySelector("#file-input"),
  $imagenPrevisualizacion = document.querySelector("#preimg");
const nombreimg = document.querySelector('#nombreimg');

$seleccionArchivos.addEventListener('change', ()=>{
  nombreimg.innerHTML = $seleccionArchivos.value;
  ;
});
$seleccionArchivos.addEventListener("change", () => {
  const archivos = $seleccionArchivos.files;
  if (!archivos || !archivos.length) {
    $imagenPrevisualizacion.src = "";
    return;
  }
  const primerArchivo = archivos[0];
  const objectURL = URL.createObjectURL(primerArchivo);
  $imagenPrevisualizacion.src = objectURL;
});
$seleccionArchivos.addEventListener('change', ()=>{
  if ($seleccionArchivos.value==='') {
    formPost.preventDefault();
  }
});
