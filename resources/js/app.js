/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require("./script");
require('intersection-observer');

window.Vue = require('vue');

import Vue from 'vue'
import router from './router.js'
import axios from 'axios'
import VueScrollTo from "vue-scrollto"
import VueObserveVisibility from 'vue-observe-visibility'
import VueAdsense from 'vue-adsense'

Vue.prototype.$http = axios;
Vue.use(VueScrollTo)
Vue.use(VueObserveVisibility)
Vue.component('adsense', VueAdsense)


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);

//Vue.component("truefalse-contents", require("./components/TruefalseContents.vue").default);
//Vue.component("toppage-contents", require("./components/Toppagecontents.vue").default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

new Vue({
  router: router,
 }).$mount('#app')