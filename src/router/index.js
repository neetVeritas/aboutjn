import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)

export default new Router({
  routes: [
    { path: '/', component: require('@/router/views/Home') },
    { path: '/home', component: require('@/router/views/Home') },
    { path: '/blog', component: require('@/router//views/Blog') },
    { path: '/about', component: require('@/router/views/About') },
    { path: '/resume', component: require('@/router/views/Resume') },
    { path: '*', component: require('@/router/views/NotFound') }
  ]
});
