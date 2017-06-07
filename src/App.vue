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
  import Topbar from '@/components/Topbar';
  import Bottom from '@/components/Bottom';
  import Loader from '@/components/Loader';
  import Navbar from '@/components/Navbar';

  import particles from '@/config/particles.json';

  export default {
    name: 'app',
    components: {
      Topbar,
      Bottom,
      Loader,
      Navbar
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
