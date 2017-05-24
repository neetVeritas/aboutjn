<template>
  <app>
    <loader></loader>
    <header></header>
    <section id="view">
      <router-view></router-view>
    </section>
    <footer></footer>
  </app>
</template>

<script>
  import Header from '@/components/Header';
  // import Footer from '@/components/Footer';
  // import Loading from '@/components/Loading';
  // import Navbar from '@/components/Navbar';
  // import Author from '@/components/Author';

  export default {
    name: 'app',
    components: {
      Header
    }
  };
</script>
