<style>
  @import url('https://fonts.googleapis.com/css?family=Advent+Pro|Poiret+One|Unica+One|');
  /*
    http://www.color-hex.com/color-palette/30086
  
    font-family: 'Advent Pro', sans-serif; # general text
    font-family: 'Poiret One', cursive; # text bodies
    font-family: 'Unica One', cursive; # logo
  */
  <?php require_once('variables.php'); ?>
  /* # Defaults */
  * { font-family: 'Advent Pro', sans-serif; }
  html, body {margin:0;padding:0;height:100%;}
  body {
    background-color: #292b2c;
  }
  app {
    min-height: 100%;
  }
  section {
    display: block;
  }
  section#view {
    position: absolute;
    top: 25%;
    background-color: #fff;
    width: 70%;
    left: 15%;
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
</style>