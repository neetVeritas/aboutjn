'use strict'

const EmberApp = require('ember-cli/lib/broccoli/ember-app')

module.exports = function(defaults) {
  let app = new EmberApp(defaults, {
    nodeModulesToVendor: [
      'node_modules/spectre.css/dist',
      'node_modules/foundation-icons'
    ],
    sassOptions: {
      extension: 'scss'
    }
  })

  app.import('vendor/spectre.css')
  app.import('vendor/foundation-icons.css')

  return app.toTree()
}
