import Vue from 'vue';
import VueLocalize from 'v-localize';

import localizations from './i18n.json';

Vue.use(VueLocalize, {
  lang_default: 'en',
  localizations: localizations
});
