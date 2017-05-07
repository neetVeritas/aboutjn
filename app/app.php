<?php // # styles

  require_once('assets/styles/main.php')
?>
<?php // # vuejs components

  require_once('components/partials/header.php');
  require_once('components/partials/footer.php');
  require_once('components/home.php');
  require_once('components/blog.php');
  require_once('components/about.php');
  require_once('routes/router.php');
?>

<app>
  <app-header></app-header>
  <router-view></router-view>
  <app-footer></app-footer>
</app>

<script type="text/javascript">
  const App = new Vue({
    router
  }).$mount('app');
</script>