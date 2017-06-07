import Vue from 'vue';
import Router from 'vue-router';

import Home from '@/router/components/Home';
import Blog from '@/router/components/Blog';
import About from '@/router/components/About';
import NotFound from '@/router/components/notFound';

Vue.use(Router);

export default new Router({
  routes: [
    { path: '/', component: Home },
    { path: '/home', component: Home },
    { path: '/blog', component: Blog },
    { path: '/about', component: About },
    { path: '*', component: NotFound }
  ]
});
