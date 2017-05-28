import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import Home from '@/components/routes/Home';
import Blog from '@/components/routes/Blog';
import About from '@/components/routes/About';
import NotFound from '@/components/routes/notFound';

export default new VueRouter({
  routes: [
    { path: '/', component: Home },
    { path: '/home', component: Home },
    { path: '/blog', component: Blog },
    { path: '/about', component: About },
    { path: '*', component: NotFound }
  ]
});
