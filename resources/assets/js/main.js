import './bootstrap';
import Vue from 'vue';
import Vuex from 'vuex';
import VueRouter from 'vue-router';
import router from './routes';
import storeFactory from './store.js';
import ElementUI from 'element-ui';
import VueCarousel from 'vue-carousel';

import 'element-ui/lib/theme-chalk/index.css';

Vue.use(ElementUI);
Vue.use(Vuex);
Vue.use(VueRouter);
Vue.use(VueCarousel);

const store = storeFactory();

import ProgressBar from './components/questions/Progress';
import SideMenu from './components/global/SideMenu'
import RequestCallbackForm from './components/global/RequestCallbackForm'
import LeadsTable from './components/dashboard/LeadsTable';

Vue.component('progress-bar', ProgressBar);
Vue.component('side-menu', SideMenu);
Vue.component('request-callback', RequestCallbackForm);
Vue.component('leads-table', LeadsTable);

const app = new Vue({
    el: '#app',
    router,
    store,

    methods: {
        setA1c(value) {
            localStorage.setItem('a1c', value);
        }
    }
});
