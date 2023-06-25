import * as VueRouter from "vue-router";

const router = VueRouter.createRouter({
    history: VueRouter.createWebHistory('/'),
    routes: [
        {
            path: '/',
            name: 'home',
            component: () => import('./pages/Home.vue')
        },
        {
            path: '/about',
            name: 'about',
            component: () => import('./pages/About.vue')
        },
        {
            path: '/persons',
            name: 'persons',
            component: () => import('./components/IndexComponent.vue'),
        },
    ]

})

export default router
