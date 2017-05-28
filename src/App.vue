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

  export default {
    name: 'app',
    components: {
      Topbar,
      Bottom,
      Loader,
      Navbar
    }
  };
</script>
