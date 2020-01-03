<template id="">
  <!-- <article class="perfilamigo">
      <header class="headerperfil">
        <a href="usuarios"><img src="/storage/0a9d6ac3926cf7f3547b567bfd06a574.jpg" alt="" width="50px" height="48px"></a>
        <a class=""href=""><h4></h4></a>

            <input type="hidden" name="id_post" value="">
            <input type="hidden" name="perfil" value="">
            <button v-on:click='deletePost()' class="botonpost btn btn-primary" type="" name="button">Borrar</button>
      </header>
    <div class="imagenpefiles">
      <img src="{{this.imagen}}" alt="" width="100%" >
    </div>
    <div class="descrip">
    <section>
      <div class="iconslikes">
        <img class="icon-like" src="/images/iconos/like.png" alt="" width="30px">
        <img class="icon-comm" src="/images/iconos/comment.png" alt="" width="30px">
        <img class="icon-share" src="/images/iconos/share.png" alt="" width="30px">
      </div>
    </section>
    <div class="descrip1">
    <ul type="none">
    <li class="li-usuario">
    <h4>{{posteo.usuario}}</h4>
    <span>{{posteo.text}}</span>
    </li>
    <li>
    <a class="linkmascoment" href="#">Ver más comentarios</a>
    </li>
    <br>
    <li>
      <a class="nombrecoment"  href="#"><h4>Mayaa</h4></a>
      <p>Pensativo,todo un modelo.</p>
    </li>
    <li>
      <a class="nombrecoment" href="#"><h4>Mataco_rebelde</h4></a>
      <p>Genial foto amigo!</p>
    </li>
    </ul>
    </div>
    <section class="hacer-comentario">
      <form class="" action="home.php" method="post">
        <textarea name="name" rows="3" cols="80" placeholder="Añade un comentario" class="p-3"></textarea>
        <button  type="submit" name="button"><h4>Publicar</h4></button>
      </form>
    </section>
    </div>
    </article> -->

</template>

<script>
    export default {
      props:['posteo'],
      data(){
        return{
        };
      },
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
          deletePost(){
            this.$emit('delete');
          }
        }
    }
</script>
