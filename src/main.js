import Vue from 'vue';

import App from '@/App';
import '@/assets/styles/main.scss';

import localize from '@/localize';
import store from '@/vuex';
import router from '@/router';

new Vue({
  store,
  router,
  render: h => h(App)
}).$mount('app');
