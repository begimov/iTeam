
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import store from './store'

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Base components
Vue.component('youtube-player', require('./components/base/Ytplayer.vue'));
Vue.component('free-magnet', require('./components/base/FreeMagnet.vue'));
Vue.component('modal-window', require('./components/base/ModalWindow.vue'));

// Static company pages related components
Vue.component('mission-philosophy', require('./components/static/company/services/Mission.vue'));
Vue.component('company-services', require('./components/static/company/services/Services.vue'));
Vue.component('company-projects', require('./components/static/company/projects/Projects.vue'));
Vue.component('company-project', require('./components/static/company/projects/Project.vue'));

// User dashboard
Vue.component('user-dashboard', require('./components/users/Dashboard.vue'));
Vue.component('order-card', require('./components/users/orders/OrderCard.vue'));
// Payments
Vue.component('order-payment', require('./components/users/orders/Payment.vue'));
Vue.component('walletone-payment', require('./components/users/orders/payments/WalletOne.vue'));
Vue.component('invoice-payment', require('./components/users/orders/payments/Invoice.vue'));
// Paid product materials
Vue.component('product', require('./components/users/products/Product.vue'));

// Tests
Vue.component('iteam-test', require('./components/tests/Test.vue'));
Vue.component('certification-test', require('./components/tests/tests/CertificationTest.vue'));

const app = new Vue({
    el: '#app',
    store
});
