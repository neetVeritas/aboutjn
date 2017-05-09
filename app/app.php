<?php // # Styles
  require_once('assets/styles/main.php')
?>

<!-- App entry point -->
<app>
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
  $.getJSON('app/config/i18n.json', function(data) {
    Vue.use(VueLocalize, {
      lang_default: 'en',
      localizations: data
    });
    const App = new Vue({
      router
    }).$mount('app');
  });
</script>