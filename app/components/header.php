<script type="text/x-template" id="header-template">
<header>
  <div class="header-menu-wrapper">
    <ul class="header-menu">
      <li class="header-title">
        About<span class="header-title-featured">JNM</span>
      </li>
      <li>foobar</li>
    </ul>
  </div>
  <nav>
    <div class="nav-left">
      <ul class="nav-menu">
        <li>
          <router-link to="/home" v-localize="'header.nav.home'"></router-link>
        </li>
        <li>
          <router-link to="/blog" v-localize="'header.nav.blog'"></router-link>
        </li>
        <li>
          <router-link to="/about" v-localize="'header.nav.about'"></router-link>
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
</header>
</script>
<script type="text/javascript">
  Vue.component('app-header', {
    template: '#header-template'
  });
</script>