<?php // # Styles
  require_once('assets/styles/main.php')
?>

<!-- App entry point -->
<app>
  <div class="loading loading-wrapper">
    <div class="loading loading-container">
      <i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw"></i>
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  <app-header></app-header>
  <router-view></router-view>
  <app-footer></app-footer>
</app>

<?php // # Components
  require_once('components/header.php');
  require_once('components/footer.php');
  require_once('components/routes/home.php');
  require_once('components/routes/blog.php');
  require_once('components/routes/about.php');
  require_once('components/routes/not.found.php');
  require_once('routes/router.php');
?>

<!-- App init -->
<script type="text/javascript">
  $.getJSON('app/config/i18.json', function(data) {
    $('div.loading').addClass('animated zoomOut'); // # hide loading screen
    Vue.use(VueLocalize, {
      lang_default: 'en',
      localizations: data
    }); // # install localize plugin
    const App = new Vue({
      router
    }).$mount('app');
  }); // # instantiate app
</script>