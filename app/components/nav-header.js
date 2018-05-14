import Ember from 'ember'
import anime from 'ember-animejs'
import Component from '@ember/component'

export default Component.extend({
  didInsertElement() {
    Ember.$(window).on('load', () => {
      anime({
        targets: '.news-banner',
        points: '64 128 8.574 96 8.574 32 64 0 119.426 32 119.426 96',
        easing: 'easeInOutExpo'
      })
    })
  }
})
