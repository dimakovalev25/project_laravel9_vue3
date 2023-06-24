import './bootstrap';
import {createApp} from 'vue';
import * as VueRouter from 'vue-router';
import Home from './pages/Home.vue'
import About from './pages/About.vue'
import IndexComponent from "@/components/IndexComponent.vue";


const routes = [
    {
        path: '/',
        name: 'home',
        component: Home
    },
    {
        path: '/about',
        name: 'about',
        component: About
    },
    {
        path: '/persons',
        name: 'persons',
        component: IndexComponent
    },
]

const router = VueRouter.createRouter({
    history: VueRouter.createWebHistory('/'),
    routes

})

import App from './App.vue';

const app = createApp(App);
app.use(router);
app.mount('#app');
