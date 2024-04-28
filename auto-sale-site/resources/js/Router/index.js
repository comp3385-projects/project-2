import { createRouter, createWebHistory } from 'vue-router';


const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes: [
        {
            path: '/',
            name: 'home',
            component: () => import('../Pages/HomeView.vue')
        },
        {
            path: '/about',
            name: 'about',
            component: () => import('../Pages/AboutView.vue')
        },
        {
            path: '/register',
            name: 'register',
            component: () => import('../Pages/RegisterView.vue')
        },
        {
            path: '/login',
            name: 'login',
            component: () => import('../Pages/LoginView.vue')
        }
    ]
})

export default router;