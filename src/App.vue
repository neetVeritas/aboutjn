<template>
  <div id="app">
    <canvas class="particles-js-canvas-el" />
    <loader />
    <app-header />
    <section id="view">
      <router-view />
    </section>
    <app-footer />
  </div>
</template>

<script>
  import Particles from 'particlesjs/dist/particles'

  import AppHeader from '@/components/Header'
  import AppFooter from '@/components/Footer'
  import Loader from '@/components/Loader'

  export default {
    name: 'app',
    components: {
      AppHeader, AppFooter, Loader
    },
    created() {
      const watcher = window.setInterval(function() {
        if (document.querySelector('#app')) {
          Particles.init({
            selector: '.particles-js-canvas-el',
            color: '#aaaaaa',
            maxParticles: 150,
            connectParticles: false
          })
          window.clearInterval(watcher)
        }
      }, 500)
    }
  }
</script>
