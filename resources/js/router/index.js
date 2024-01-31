import { createRouter, createWebHistory } from "vue-router";
import isAuthenticated from '../middleware/isAuthenticated';
import notFound from '../components/error-404.vue';
import login from '../Components/Pages/Unauthenticated/Login.vue';
import register from '../Components/Pages/Unauthenticated/Register.vue';
import home from '../Components/Pages/Authenticated/Home.vue';


const routes = [
    {
        path : '/',
        component : () => import('../Components/unauthenticated.vue'),
        children : [
            {
                path : '',
                name : 'login',
                component : login
            },
            {
                path : 'register',
                name : 'register',
                component : register
            }
        ]
    },
    {
        path : '/',
        component : () => import('../Components/authenticated.vue'),
        children : [
            {
                path : 'home',
                name: 'home',
                component : home,
                meta: { requiresAuth: true },
            },
        ]
            
    },


    {
        path : '/:pathMatch(.*)*',
        component : notFound
    }
]

const router = createRouter({
    history: createWebHistory(),
    routes
});

router.beforeEach(async (to, from, next) => {
    if (to.meta.requiresAuth) {
        // Check if the user is authenticated based on your logic
        const authenticated = await isAuthenticated();
    
        if (!authenticated) {
            console.log('Unauthorized');
            // Redirect to login page if not authenticated
            next({ name: 'login' });
        } else {
            // Continue to the next route if authenticated
            next();
        }
    } else {
        // Continue to non-authenticated routes
        next();
    }
});
  


export default router
