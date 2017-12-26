module.exports = function (config) {
  config.set({
    basePath: '',
    browsers: ['Electron'],
    frameworks: ['jasmine', 'vue-component'],
    files: [
      '../dist/build.js'
    ],
    reporters: ['progress', 'coverage'],
    preprocessors: {
      '../dist/build.js': ['coverage']
    },
    coverageReporter: {
      reporters: [
        {type: 'html', dir: '../coverage/'},
        {type: 'lcovonly', dir: '../coverage/'},
        {type: 'json', dir: '../coverage/'}
      ]
    },
    port: 9876,
    colors: true,
    logLevel: config.LOG_INFO,
    autoWatch: true,
    singleRun: true
  })
}
