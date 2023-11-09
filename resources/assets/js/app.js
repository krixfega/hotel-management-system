import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './routes';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history', // Use HTML5 history mode for clean URLs
    routes,
});

const app = new Vue({
    el: '#app',
    router, // Attach the router instance to the Vue instance
    // Your Vue instance configuration goes here
});
