import Vue from 'vue';
import Router from 'vue-router';

import Home from './views/Home';
import Blog from './views//Blog';
import About from './views//About';
import NotFound from './views//notFound';

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
