import Vue from 'vue';

import App from '@/App';
import '@/assets/styles/main.scss';

import i18n from '@/localize';
import store from '@/vuex';
import router from '@/router';

new Vue({
  i18n,
  store,
  router,
  render: h => h(App)
}).$mount('app');
