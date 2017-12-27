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
  import Navbar from '@/components/Navbar'
  import AppFooter from '@/components/Footer'
  import Loader from '@/components/Loader'

  export default {
    name: 'app',
    components: {
      AppHeader, Navbar, AppFooter, Loader
    },
    created() {
      const watcher = window.setInterval(function() {
        if (document.querySelector('#app')) {
          Particles.init({
            selector: '.particles-js-canvas-el',
            color: '#ffffff'
          })
          window.clearInterval(watcher)
        }
      }, 500)
    }
  };
</script>
