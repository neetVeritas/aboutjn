'use strict'

const EmberApp = require('ember-cli/lib/broccoli/ember-app')

module.exports = function(defaults) {
  let app = new EmberApp(defaults, {
    nodeModulesToVendor: [
      'node_modules/animate.css',
      'node_modules/spectre.css/dist'
    ],
    sassOptions: {
      extension: 'scss'
    }
  })

  app.import('vendor/animate.min.css')
  app.import('vendor/spectre.css')

  return app.toTree()
}
