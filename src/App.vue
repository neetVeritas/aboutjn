<template>
  <div>
    <loader></loader>
    <topbar></topbar>
    <section id="view">
      <router-view></router-view>
    </section>
    <bottom></bottom>
  </div>
</template>

<script>
  export default {
    name: 'app'
  };
</script>
