import Vue from 'vue';
import Router from 'vue-router';

import Home from '@/components/routes/Home';
import Blog from '@/components/routes/Blog';
import About from '@/components/routes/About';
import NotFound from '@/components/routes/notFound';

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
