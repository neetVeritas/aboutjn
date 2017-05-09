<style>
  @import url('https://fonts.googleapis.com/css?family=Advent+Pro|Mountains+of+Christmas:700');
  /*
    http://www.color-hex.com/color-palette/38226
  
    font-family: 'Advent Pro', sans-serif;
    font-family: 'Mountains of Christmas', cursive;
  */
  <?php require_once('variables.php'); ?>
  /* # Defaults */
  html, body {margin:0;padding:0;height:100%;}
  app {
    min-height: 100%;
  }
  /* # Helpers */
  .ico {
    display: inline-block;
  }
  .ico-left {
    padding-right: <?php echo $ico_dist; ?>;
  }
  .ico-right {
    padding-left: <?php echo $ico_dist; ?>;
  }
  .ico-fixed {
    padding-left: <?php echo $ico_dist; ?>;
    padding-right: <?php echo $ico_dist; ?>;
  }
  
  <?php // # Styles
    require_once('components/loading.style.php');
    require_once('components/header.style.php');
    require_once('components/footer.style.php');
    require_once('partials/home.style.php');
    require_once('partials/blog.style.php');
    require_once('partials/about.style.php');
  ?>
</style>