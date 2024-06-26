import { createRouter, createWebHistory } from 'vue-router';
import PublicLayout from '../Layouts/PublicLayout.vue';

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes: [
        {
            path: '/',
            name: 'home',
            component: () => import('../Pages/HomeView.vue'),
            meta: { layout: PublicLayout, }
        },
        {
            path: '/about',
            name: 'about',
            component: () => import('../Pages/AboutView.vue'),
            meta: { layout: PublicLayout, }
        },
        {
            path: '/register',
            name: 'register',
            component: () => import('../Components/RegisterView.vue'),
            meta: { layout: PublicLayout, }
        },
        {
            path: '/login',
            name: 'login',
            component: () => import('../Components/LoginView.vue'),
            meta: { layout: PublicLayout, }
        },
        {
            path: '/cars/new',
            name: 'new',
            component: () => import('../Components/CarForm.vue'),
            meta: { layout: PublicLayout, }
        },
    ]
})

export default router;
