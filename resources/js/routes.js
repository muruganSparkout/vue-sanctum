import Welcome from './components/WelcomeComponent.vue'
import Login from './components/auth/Login.vue'
import Register from './components/auth/Register.vue'

export default {
    mode: 'history',
    base: '/',
    fallback: true,
    routes: [
        {
            path: '/',
            component: Welcome,
            name: 'Welcome',
            meta: {requiresAuth: true}
        },
        {
            path: '/login',
            component: Login,
            name: 'login',
            meta: {guest: true}
        },
        {
            path: '/register',
            component: Register,
            name: 'register',
            meta: {guest: true}
        },
    ]
}
