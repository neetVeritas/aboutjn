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
  import Loading from '@/components/Loading';
  import Navbar from '@/components/Navbar';
  import Author from '@/components/Author';

  export default {
    name: 'app',
    components: {
      Topbar,
      Bottom,
      Loading,
      Navbar,
      Author
    }
  };
</script>
