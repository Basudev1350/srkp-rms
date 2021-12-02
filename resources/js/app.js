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
    const rawMaterials = new Vue({
        el: '#rawMaterials',
        router: new VueRouter(routes)
    }); 
    const productAssembly = new Vue({
        el: '#productAssembly',
        router: new VueRouter(routes)
    });     
    const productwiseReport = new Vue({
        el: '#productwiseReport',
        router: new VueRouter(routes)
    }); 
    const menuwiseReport = new Vue({
        el: '#menuwiseReport',
        router: new VueRouter(routes)
    }); 
 }