import './bootstrap';
import Vue from 'vue';
import Vuex from 'vuex';
import VueRouter from 'vue-router';
import router from './routes';
import storeFactory from './store.js';
import VueAnalytics from 'vue-analytics'
import ElementUI from 'element-ui';
import VueCarousel from 'vue-carousel';

import 'element-ui/lib/theme-chalk/index.css';

Vue.use(ElementUI);
Vue.use(Vuex);
Vue.use(VueRouter);
Vue.use(VueCarousel);
Vue.use(VueAnalytics, {
    id: 'UA-114824705-1',
    router
});

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
    store
});
