<script type="text/x-template" id="header-template">
  <header>
    <div class="header-left">
      <ul class="header-menu">
        <li>
          <router-link to="/home">Home</router-link>
        </li>
        <li>
          <router-link to="/blog">Blog</router-link>
        </li>
        <li>
          <router-link to="/about">About</router-link>
        </li>
      </ul>
    </div>
    <div class="header-right">
      <ul class="header-menu">
      
      </ul>
    </div>
  </header>
</script>
<script type="text/javascript">
  Vue.component('app-header', {
    template: '#header-template',
  })
</script>