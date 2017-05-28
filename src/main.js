import Vue from 'vue';

import App from '@/App';

import localize from '@/localization/localize'
import store from '@/vuex/store'
import router from '@/router/routes';

new Vue({
  el: 'app',
  router,
  store,
  render: h => h(App)
});
