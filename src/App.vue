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

<style lang="scss" scoped>
  @import '~styles/variables.scss';

  div#app {
    position: absolute;
    top: 0; left: 0; bottom: 0; right: 0;
    display: flex;
    flex-direction: column;
  }

  section {
    display: block;
  }

  section#view {
    margin: auto;
    margin-top: $header-height;
    width: 70%;
    flex: 1;
  }

  .particles-js-canvas-el {
    position: absolute;
    top: 0;
    z-index: -1;
  }
</style>
