<template>
  <nav>
    <div class="nav-left">
      <ul class="nav-menu">
        <li>
          <router-link to="/home" v-html="$t('header.nav.home')"></router-link>
        </li>
        <li>
          <router-link to="/blog" v-localize="$t('header.nav.blog')"></router-link>
        </li>
        <li>
          <router-link to="/about" v-localize="$t('header.nav.about')"></router-link>
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
