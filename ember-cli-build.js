'use strict';

const EmberApp = require('ember-cli/lib/broccoli/ember-app');

module.exports = function(defaults) {
  let app = new EmberApp(defaults, {
    nodeModulesToVendor: [
      'node_modules/spectre.css/dist'
    ]
  });

  app.import('vendor/spectre.css');

  return app.toTree();
};
