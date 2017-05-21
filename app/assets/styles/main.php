<?php

  /* # Colors
    http://www.color-hex.com/color-palette/30086
    http://www.color-hex.com/color-palette/38288
  */

    $primary_color = '#c8c3cc';
    $default_color = '#e0e2e4';
    $info_color = '#5bc0de';
    $danger_color = '#d9534f';

    $color_cinder = '#292b2c';
    $color_cinder_dark = '#141516';
    $color_atomic = '#464a4c';
    $color_mid_grey = '#636c72';
    $color_alice_blue = '#eceeef';
    $color_ghost_white = '#f7f7f9';

    $color_chestnut = '#c14141';
    $color_heather = '#b5c1c9';
    $color_baltic_sea = '#393c40';
    $color_lynch = '#717b81';
    $color_celtic = '#2e3834';

  /* # Icons */
    $ico_dist = '5px';

  /* # Header */
    $header_height = '60px';

?>

<style>
  @import url('https://fonts.googleapis.com/css?family=Advent+Pro|Poiret+One|Unica+One|');
  /*
    font-family: 'Advent Pro', sans-serif; # general text
    font-family: 'Poiret One', cursive; # text bodies
    font-family: 'Unica One', cursive; # logo
  */
  * {
    font-family: 'Advent Pro', sans-serif;
  }
  html, body {
    margin:0;
    padding:0;
    min-height: 100%;
    background-color: <?php echo $color_cinder ?>;
  }
  app {
    position: absolute;
    top: 0; left: 0; bottom: 0; right: 0;
    display: flex;
    flex-direction: column;
  }
  section {
    display: block;
  }
  section#view {
    margin-top: <?php echo $header_height; ?>;
    width: 70%;
    flex: 1;
  }
  .particles-js-canvas-el {
    position: absolute;
    top: 0;
    z-index: -1;
  }
  /* # Helpers */
  .box {
    display: block;
  }
  .box.box-center {
    margin: auto;
  }
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
  .text-center {
    text-align: center;
  }
  .text-right {
    text-align: right;
  }
  .text-left {
    text-align: left;
  }
</style>