import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export default new Vuex.Store({
  state: {
    busy: false
  },
  mutations: {
    status (state) {
      state.busy = !state.busy;
    }
  }
});
