/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import 'bootstrap';
import 'swiper';
import VueAxios from 'vue-axios';
import axios from 'axios';
import VueCompositionAPI from '@vue/composition-api';

require('./bootstrap');

window.Vue = require('vue').default;

Vue.use(VueAxios, axios, VueCompositionAPI);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 */

Vue.component('oceandata', require('./components/site/OceanData.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#moa-app',
});
