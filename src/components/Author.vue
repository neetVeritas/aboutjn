<script type="text/x-template" id="author-component">
  <div class="author-wrapper">
    <div class="author-image">
      <img :src="image" class="author-image-src" />
    </div>
    <h1>{{ fname || 'N/A' }}</h1>
    <h2></h2>
  </div>
</script>

<script>
  export default {
    data () {
      return {
        msg: 'Hello from vue-loader!'
      }
    }
  };
  Vue.component('author', {
    props: [
      'fname',
      'image',
      'github',
      'twitter'
    ],
    template: '#author-component'
  });
</script>

<style>
  .author-wrapper {
    width: 50%;
    text-align: center;
    margin: auto;
    background-color: <?php echo $color_ghost_white; ?>;
    border: 1px solid <?php echo $color_celtic; ?>;
    box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
  }
  .author-image {
    width: 50%;
    margin: auto;
  }
  .author-image img.author-image-src {
    width: 100%;
    border-radius: 100%;
  }
</style>
