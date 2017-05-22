import Vue from 'vue'
import VueLocalize from 'v-localize'

import App from './app.vue'

Vue.use(VueLocalize,
{

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
    particlesJS.load('view', `app/config/particles.json?t=${new Date().getTime().toString()}`, function() {
      console.log('Particles have been loaded successfully.');
    });
  }
}).$mount('app');
