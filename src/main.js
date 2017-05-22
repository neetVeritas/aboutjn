import Vue from 'vue'
import VueLocalize from 'v-localize'

import App from './app.vue'

Vue.use()

const App = new Vue({
  router
  components: {
    Header,
    Footer,
    Loading,
    Author,
    Navbar
  }
}).$mount('app');
