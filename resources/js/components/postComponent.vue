<template>
  <div class=" cajaposteo ">
    <form class="" method="post" enctype="multipart/form-data" v-on:submit.prevent="newPost()">
      <h4 class="card-header ">Crea una publicación</h4>
        <textarea v-model='texto' class="col-12 border-light p-3" name="text" rows="3" cols="80" placeholder="¿Qué estas pensando?"></textarea>
        <img :src="imagen" alt="" height="200px" width="200px">
        <div class="image-upload ">
  <label for="file-input">

    <img  src="/images/iconos/iconfile-2.png" alt ="foto" title ="foto" >
  </label>
      <input @change="obtenerImagen" id="file-input" name="media" type="file"/>
      <input type="hidden" name="id" value="">
    <button class="botonpost btn btn-primary" type="submit" name="button">Publicar</button>
</div>
</form>
  </div>
</template>

<script>
    export default {
      data(){
        return {
          imagenMini:'',
          publicacion:{
            texto:'',
            imagen: ''
          }
        }
      },
      methods:{
        obtenerImagen(e){
          let file = e.target.files[0];
          console.log(file);
          this.cargarImagen(file);
        },
        cargarImagen(file){
          let reader = new FileReader();
          reader.onload = (e) => {
            this.imagenMini = e.target.result;
          }
          reader.readAsDataUrl(file);
        },
        newPost(){
            let formData = new formData();
            formData.append('texto',this.texto);
            formData.append('imagen',this.imagen);
            axios.post('posteo',formData)
            .then(response=>{
              console.log(response.data);
            })
      }
    },
      computed:{
        imagen(){
          return this.imagenMini;
        }
      }
  //       mounted() {
  //           console.log('Component mounted.')
  //       },
  //       methods: {
  //
  // },
  //   newPost(){
  //     let posteo = {
  //       id:'2',
  //       text: this.text,
  //       imagen: this.imagen
  //     };
  //     this.$emit('new', posteo);
  //     this.text = '';
  // },
  //       }
    }
</script>
