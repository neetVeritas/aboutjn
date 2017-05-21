<script type="text/x-template" id="footer-template">
  <footer>
    <div class="footer-wrapper">
      <div class="row">
        <div class="four columns">
          &nbsp;
        </div>
        <div class="four columns text-center">
          <ul>
            <li>
              <h5>Created with the amazing <i class="fa fa-bolt ico ico-fixed" style="color: orange;"></i> VueJS</h5>
            </li>
            <li>
              <h6>Designed with <i class="fa fa-heart ico ico-fixed" style="color: red;"></i> using SkeletonCSS</h6>
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
</script>

<style>
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

<script type="text/javascript">
  Vue.component('app-footer', {
    template: '#footer-template'
  });
</script>