// # libraries
import Vue from 'vue';
import VueLocalize from 'v-localize';

// # configurations
import Localizations from './config/i18n.json';
import Particles from './config/particles.json';

import router from './routes';

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

const App = new Vue({
  router,
  store,
  components: {
    Header,
    Footer,
    Loading,
    Author,
    Navbar
  },
  created: function() {
    particlesJS.load('view', Particles);
  }
}).$mount('app');
