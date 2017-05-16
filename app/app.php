<?php // # Styles
  require_once('assets/styles/main.php')
?>

<?php // # Components
  require_once('components/loading.php');
  require_once('components/header.php');
  require_once('components/navbar.php');
  require_once('components/footer.php');
  require_once('components/author.php');
  require_once('components/routes/home.php');
  require_once('components/routes/blog.php');
  require_once('components/routes/about.php');
  require_once('components/routes/notFound.php');
  require_once('routes/router.php');
?>

<!-- App entry point -->
<app id="main">
  <app-header></app-header>
  <app-loading></app-loading>
    <section id="view">
      <router-view></router-view>
    </section>
  </div>
  <app-footer></app-footer>
</app>

<!-- App init -->
<script type="text/javascript">
  const store = new Vuex.Store({
    state: {
      busy: false
    },
    mutations: {
      status (state) {
        state.busy = !state.busy;
      }
    }
  });
  $.get(`app/config/i18n.json?t=${new Date().getTime().toString()}`, function(data) {
    console.log(data)
    Vue.use(VueLocalize, {
      lang_default: 'en',
      localizations: data
    }); // # install localize plugin
    const App = new Vue({
      store,
      router,
      created: function() {
        particlesJS.load('main', 'app/config/particles.json', function() {
          console.log('Particles have been loaded successfully.');
        });
      }
    }).$mount('app');
  });
</script>