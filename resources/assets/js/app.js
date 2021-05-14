import './bootstrap';
import Vue from 'vue';
import Vuex from 'vuex';
import VueRouter from 'vue-router';
import router from './router.old';
import storeFactory from './store.js';

Vue.use(Vuex);
Vue.use(VueRouter);

const store = storeFactory();

Vue.component('tt-clouds', require('./components/Clouds.vue'));

const app = new Vue({
    el: '#app',
    router,
    store,
    mounted() {
        setTimeout(function () {
            let animations = $('.animated');

            $.each(animations, function () {
                $(this).attr('class', 'animated');
            });
        }, 10000);
    }
});
