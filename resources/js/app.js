import Vue from 'vue'
import VueRouter from 'vue-router'
import '@fortawesome/fontawesome-free/css/all.css'
import 'vuetify/dist/vuetify.min.css'
import vuetify from './vuetify';
import App from '../views/App.vue'
import Home from './components/Home.vue'
import Projects from './components/Projects.vue'

Vue.use(VueRouter)

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'Home',
            component: Home,
        },
        {
            path: '/projects',
            name: 'Projects',
            component: Projects,
        },
    ],
});

const app = new Vue({
    el: '#app',
    components: { App },
    vuetify,
    router,
});
