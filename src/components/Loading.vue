<script type="text/x-template" id="loading-template">
  <transition
    name="custom-classes-transition"
    enter-active-class="animated zoomIn"
    leave-active-class="animated zoomOut"
  >
    <div v-if="store.state.busy" class="loading loading-wrapper">
      <div class="loading loading-container">
        <h3>
          <i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw"></i>
          <span class="sr-only">Loading...</span>
        </h3>
      </div>
    </div>
  </transition>
</script>

<style>
  .loading.loading-wrapper {
      position: fixed;
      z-index: 1000;
      background-color: #696969;
      opacity: 0.8;
      height: 100%;
      width: 100%;
  }
  .loading.loading-container {
      position: absolute;
      left:25%; top:40%;
      width: 50%;
      text-align: center;
      opacity: 0.5
  }
</style>

<script type="text/javascript">
  Vue.component('app-loader', {
    template: '#loading-template'
  });
</script>