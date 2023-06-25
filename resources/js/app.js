// import './bootstrap';
// import {createApp} from 'vue';
// import * as VueRouter from 'vue-router';
// import routes from './routes.js'
// import App from './App.vue';
//
// const router = VueRouter.createRouter({
//     history: VueRouter.createWebHistory('/'),
//     routes
//
// })
//
// const app = createApp(App);
// app.use(router);
// app.mount('#app');



import './bootstrap';
import {createApp} from 'vue';
import App from './App.vue';
import router from "@/router.js";


const app = createApp(App);
app.use(router);
app.mount('#app');



