import Vue from 'vue';

import App from '@/App';
import Topbar from '@/components/Topbar';
import Bottom from '@/components/Bottom';
import Loading from '@/components/Loading';
import Navbar from '@/components/Navbar';
import Author from '@/components/Author';

import localize from '@/localization/localize'
import store from '@/vuex/store'
import routes from '@/router/routes';

new Vue({
  routes,
  store,
  components:{
    App,
    Topbar,
    Bottom,
    Loading,
    Navbar,
    Author
  },
}).$mount('app');
