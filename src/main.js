import Vue from 'vue';

import App from '@/App';

import localize from '@/localization/localize'
import router from '@/router/routes';
import store from '@/vuex/store';

new Vue({
  el: 'app',
  router,
  store,
  render: h => h(App)
});
