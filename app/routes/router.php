<script type="text/javascript">
  const routes = [
    { path: '/', component: Home },
    { path: '/home', component: Home },
    { path: '/blog', component: Blog },
    { path: '/about', component: About }
  ];

  const router = new VueRouter({
    routes
  });
</script>