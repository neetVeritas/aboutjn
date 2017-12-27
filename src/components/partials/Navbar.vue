<template>
  <nav>
    <div class="nav-left">
      <ul class="nav-menu">
        <li>
          <router-link to="/home" v-localize="{item: 'header.nav.home'}"></router-link>
        </li>
        <li>
          <router-link to="/blog" v-localize="{item: 'header.nav.blog'}"></router-link>
        </li>
        <li>
          <router-link to="/about" v-localize="{item: 'header.nav.about'}"></router-link>
        </li>
        <li>
          <router-link to="/resume" v-localize="{item: 'header.nav.resume'}"></router-link>
        </li>
      </ul>
    </div>
    <div class="nav-right">
      <ul class="nav-menu">
        <li class="nav-icon nav-icon-social">
          <a title="Twitter" href="https://twitter.com/neet_jn">
            <i class="fa fa-twitter-square"></i>
          </a>
        </li>
        <li class="nav-icon nav-icon-social">
          <a title="Github" href="https://github.com/neetVeritas">
            <i class="fa fa-github-square"></i>
          </a>
        </li>
      </ul>
    </div>
  </nav>
</template>

<script>
  export default {
    name: 'navbar'
  }
</script>

<style lang="scss" scoped>
  nav {
    padding: 1rem;
    & .nav-menu {
      @extend .unstyled;
      @extend .inline;
    }
  }
</style>
