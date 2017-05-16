<script type="text/x-template" id="footer-template">
  <footer>
    <div class="container">
      <div class="row">
        <div class="one-fourth column">
          <h6>test</h6>
        </div>
        <div class="one-fourth column">
          1/3
        </div>
        <div class="one-fourth column">
          1/3
        </div>
      </div>
    </div>
  </footer>
</script>

<style>
  footer {
    display: block;
    position: absolute;
    height: 10%;
    top: 90%;
    width: 100%;
    background-color: red;
  }
</style>

<script type="text/javascript">
  Vue.component('app-footer', {
    template: '#footer-template'
  });
</script>