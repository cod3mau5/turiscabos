import Vue from 'vue';
import store from './store'
require('./bootstrap');

window.Vue = require('vue')
import Buefy from 'buefy';
Vue.use(Buefy);

Vue.component('reservation-list-component', require('./components/ReservationListComponent.vue').default);
Vue.component('create-reservation', require('./components/CreateReservation.vue').default);

const app = new Vue({
    el: '#app',
    store,
});
