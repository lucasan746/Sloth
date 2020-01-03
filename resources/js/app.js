
require('./bootstrap');

window.Vue = require('vue');

Vue.component('post-component', require('./components/postComponent.vue').default);
Vue.component('publi-component', require('./components/publicacionComponent.vue').default);
Vue.component('perfil-component', require('./components/perfilComponent.vue').default);

const app = new Vue({
    el: '#app',
});
