require('./bootstrap');
window.Vue = require('vue');
import VueRouter from 'vue-router';
import routes from './routes';
import navbar from './components/layouts/navigation.vue';
import navbar2 from './components/layouts/nav.vue';
import message from './components/layouts/messageCenter.vue';
import notification from './components/layouts/notificationCenter.vue';
import Vue from "vue";

Vue.component('navbar', navbar);
Vue.use(VueRouter);

newFunction();

function newFunction()
 {
    //dashboard.blade.php id
    const dashboard = new Vue({
        el: '#dashboard',
        router: new VueRouter(routes)
        });
        
 }