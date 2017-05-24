// # libraries
import Vue from 'vue';
import Vuex from 'vuex';
import VueLocalize from 'v-localize';

// # configurations
import Localizations from './config/i18n.json';
import Particles from './config/particles.json';

// # plugins
const store = new Vuex.Store({
  state: {
    busy: false
  },
  mutations: {
    status (state) {
      state.busy = !state.busy;
    }
  }
});

Vue.use(VueLocalize, {
  ang_default: 'en',
  localizations: Localizations
});  // # install localization


import App from './App';
import router from './routes';

new Vue({
  router,
  store,
  render: h => h(App),
  components: { App },
  created: function() {
    particlesJS.load('view', Particles);
  }
}).$mount('app');
