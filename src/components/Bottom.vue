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
              <h5 v-localize="{item: 'footer.created'}"></h5>
            </li>
            <li>
              <h6 v-localize="{item: 'footer.designed'}"></h6>
            </li>
          </ul>
        </div>
        <div class="four columns text-center">
          <ul>
            <li>
              aboutjn <i class="fa fa-copyright ico ico-left"></i> neetGroup <strong>2015-2017</strong>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
</template>

<script>
  export default {
    name: 'bottom'
  };
</script>

<style lang="scss" scoped>
  @import '~styles/variables.scss';

  footer {
    display: block;
    background-color: $color-cinder-dark;
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
