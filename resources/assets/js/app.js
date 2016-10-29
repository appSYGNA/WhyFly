require('./bootstrap');

Vue.component('plan', require('./components/Plan.vue'));
Vue.component('home', require('./components/Home.vue'));

const app = new Vue({
    el: '#app'
});
