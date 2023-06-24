import './bootstrap';
import {createApp} from 'vue';
import * as VueRouter from 'vue-router';
import Home from './pages/Home.vue'
import About from './pages/About.vue'

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
        component: () => import('./components/IndexComponent.vue'),
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
