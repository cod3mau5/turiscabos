import Vue from 'vue';
require('./bootstrap');

window.Vue = require('vue')

import Buefy from 'buefy';


 Vue.use(Buefy);



/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('reservation-list-component', require('./components/ReservationListComponent.vue').default);
Vue.component('example-component', require('./components/ExampleComponent.vue').default);




const app = new Vue({
    el: '#app',
});
