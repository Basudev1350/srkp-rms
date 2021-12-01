require('./bootstrap');
window.Vue = require('vue');
import VueRouter from 'vue-router';
import routes from './routes';
import Vue from "vue";

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