
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import Vuex from 'Vuex'


Vue.use(Vuex);

const store = new Vuex.Store({
    state:{
        item:{teste:"funcionou"}
    },
    mutations:{
        setItem(state,obj){
            state.item = obj
        }
    }
})

Vue.component('painel-component', require('./components/Painel.vue'));
Vue.component('topo-component', require('./components/Topo.vue'));
Vue.component('caixa-component', require('./components/Caixa.vue'));
Vue.component('pagina-component', require('./components/Pagina.vue'));
Vue.component('tabela-component', require('./components/TabelaLista.vue'));
Vue.component('migalhas-component', require('./components/Migalhas.vue'));
Vue.component('modal-component', require('./components/Modal/Modal.vue'));
Vue.component('modallink-component', require('./components/Modal/ModalLink.vue'));
Vue.component('formulario-component', require('./components/Formulario.vue'));
Vue.component('formulario-component', require('./components/Formulario.vue'));

/*  componentes site */

Vue.component('nav-component', require('./components/Site/Navbar.vue'));
Vue.component('slide-component', require('./components/Site/Slide.vue'));
Vue.component('noticias-component', require('./components/Site/Noticias.vue'));
Vue.component('footer-component', require('./components/Site/Footer.vue'));

const app = new Vue({
    el: '#app',
    store,
    mounted(){
        document.getElementById('app').style.display ="block";
    }
});
