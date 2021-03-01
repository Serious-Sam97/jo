import Vue from 'vue'
import VueRouter from 'vue-router'
import '@fortawesome/fontawesome-free/css/all.css'
import 'vuetify/dist/vuetify.min.css'
import vuetify from './vuetify';
import App from '../views/App.vue'
import Home from './components/Home.vue'
import Projects from './components/Projects.vue'
import Contact from './components/Contact.vue';
import Config from './components/Config.vue';

Vue.use(VueRouter)

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'Projects',
            component: Projects,
        },
        {
            path: '/about',
            name: 'Home',
            component: Home,
        },
        {
            path: '/contact',
            name: 'Contact',
            component: Contact,
        },
        {
            path: '/rapture-city',
            name: 'Config',
            component: Config,
        },
    ],
});

const app = new Vue({
    el: '#app',
    components: { App },
    vuetify,
    router,
});
