import Vue from 'vue';
import Localize from 'v-localize';

Vue.use(Localize);

import localizations from './i18n.json';

export default Localize.config({
  debug: false,
  mode: 'hot',
  default: 'en-US',
  available: ['en-US', 'sp-LA', 'pr-BR', {
    locale: 'ar-SA',
    orientation: 'rtl',
    font: {
      size: 'smaller'
    }
  }],
  localizations
});
