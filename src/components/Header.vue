<script type="text/x-template" id="header-template">
  <header>
    <div class="header-wrapper">
      <h4 v-localize="'header.notification'" class=""></h4>
    </div>
  </header>
</script>

<style>
  header {
    position: absolute;
    display: block;
    width: 100%;
    height: <?php echo $header_height; ?>;
    background-color: <?php echo $color_atomic; ?>;
    opacity: 0.8;
    border-bottom: 3px solid <?php echo $color_cinder_dark; ?>;
  }

  header .header-wrapper h4 {
    text-align: center;
    position: relative;
    top: 1rem;
    color: <?php echo $color_ghost_white; ?>;
    font-family: <?php echo $font_logo; ?>;
  }

  header .header-menu li.header-title {
    font-family: 'Unica One', cursive;
    font-size: 32px;
    color: red;
  }
</style>

<script type="text/javascript">
  Vue.component('app-header', {
    template: '#header-template'
  });
</script>