<template>
  <div id="app">
    <canvas class="particles-js-canvas-el" />
    <loader></loader>
    <topbar></topbar>
    <section id="view">
      <router-view></router-view>
    </section>
    <bottom></bottom>
  </div>
</template>

<script>
  import Particles from 'particlesjs/dist/particles'
  import particles from '@/config/particles.json'

  import Topbar from '@/components/Topbar'
  import Bottom from '@/components/Bottom'
  import Loader from '@/components/Loader'

  export default {
    name: 'app',
    components: {
      Topbar, Bottom, Loader
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
