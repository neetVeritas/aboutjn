<template>
  <div class="container">
    <h1>{{ $t('header.nav.home') }}</h1>
    <button @click="$setLang('en')">English</button>
    <button @click="$setLang('sp')">Spanish</button>
    <button @click="$setLang('pr')">Portuguese</button>
    <button @click="$store.commit('status')" class="button button-primary">Change loading status</button>
    <author fname="John Nolette" image="src/assets/images/author.jpg" github="https://github.com/neetVeritas" twitter="https://twitter.com/neet_jn"></author>
  </div>
</template>

<script>
  import Author from '@/components/Author';

  export default {
    name: 'Home',
    components: { Author }
  };
</script>
