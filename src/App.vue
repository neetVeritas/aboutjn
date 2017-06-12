<template>
  <div id="app">
    <loader></loader>
    <topbar></topbar>
    <section id="view">
      <router-view></router-view>
    </section>
    <bottom></bottom>
  </div>
</template>

<script>
  import particles from '@/config/particles.json';

  import Topbar from '@/components/Topbar';
  import Bottom from '@/components/Bottom';
  import Loader from '@/components/Loader';

  export default {
    name: 'app',
    components: {
      Topbar, Bottom, Loader
    },
    created: () => {
      let watcher = window.setInterval(function() {
        if (document.querySelector('#view')) {
          particlesJS('view', particles);
          window.clearInterval(watcher);
        }
      }, 500);
    }
  };
</script>
