import Vue from 'vue';
import Localize from 'v-localize';

Vue.use(Localize);

import localizations from './i18n.json';

let localize = Localize.config({
  default: 'en',
  available: ['en', 'sp', 'pr'],
  localizations
});

export default localize;
