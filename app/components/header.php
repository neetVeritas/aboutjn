<script type="text/x-template" id="header-template">
  <header>
    <div class="header-menu-wrapper">
      <ul class="header-menu">
        <li>
          This is for notifications...
        </li>
      </ul>
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
  }

  header .header-wrapper {  
  }

  header .header-menu {
    list-style: unstyled;
  }

  header .header-menu li {
    display: inline;
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