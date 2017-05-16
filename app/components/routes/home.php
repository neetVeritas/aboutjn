<script type="text/x-template" id="home-template">
  <div class="container">
    <h1 v-localize="'header.nav.home'"></h1>
    <button @click="$setLang('en')">English</button>
    <button @click="$setLang('sp')">Spanish</button>
    <button @click="$setLang('pr')">Portuguese</button>
    <button @click="store.commit('status')" class="button button-primary">Change loading status</button>
    <author fname="John Nolette" image="" github="https://github.com/neetVeritas" twitter="https://twitter.com/neet_jn"></author>
  </div>
</script>

<style>
</style>

<script type="text/javascript">
  const Home = Vue.component('Home', {
    template: '#home-template'
  });
</script>