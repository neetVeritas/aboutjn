<template>
  <footer>
    <div class="footer-wrapper">
      <div class="row">
        <div class="four columns">
          &nbsp;
        </div>
        <div class="four columns text-center">
          <ul>
            <li>
              <h5 v-localize="'footer.created'"></h5>
            </li>
            <li>
              <h6 v-localize="'footer.designed'"></h6>
            </li>
          </ul>
        </div>
        <div class="four columns text-center">
          <ul>
            <li>
              aboutjn <i class="fa fa-copyright ico ico-left"> neetGroup <strong>2015-2017</strong>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
</template>

<script>
  export default {
    name: 'footer'
  };
</script>

<style scoped>
  footer {
    display: block;
    background-color: <?php echo $color_cinder_dark; ?>;
    width: 100%;
    color: #fff;
    opacity: 0.7;
  }
  footer ul {
    list-style: none;
  }
  .footer-wrapper {
    padding: 15px;
  }
</style>
