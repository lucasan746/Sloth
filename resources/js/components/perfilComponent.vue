<template id="">
  <div class="">
    <post-component @new='addPost'></post-component>
    <publi-component v-for="(posteo,index) in posteos"  :key="posteo.id"
    :posteo="posteo" @delete='eliminarPost(index)'></publi-component>
  </div>
</template>
<script>
    export default {
      data(){
        return {
          posteos:[{
           }
          ]
        }
      },
        mounted() {
            console.log('Component mounted.')
        },
        methods:{
          addPost(posteo){
            this.posteos.push(posteo);
          },
          eliminarPost(index){
            this.posteos.splice(index,1);
          }
        }
    }
</script>
