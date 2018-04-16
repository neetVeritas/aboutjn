import EmberRouter from '@ember/routing/router'
import config from './config/environment'

const Router = EmberRouter.extend({
  location: config.locationType,
  rootURL: config.rootURL
})

Router.map(function() {
  this.route('about')
  this.route('cv')
  this.route('projects')
  this.route('employ')
  this.route('home')
  this.route('blog')
})

export default Router
