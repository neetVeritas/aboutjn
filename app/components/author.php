<script type="text/x-template" id="author-component">
  <div class="author-wrapper">
    <h1>{{ fname || 'N/A' }}</h1>
    <div class="author-image">
      <img class="author-image-src" />
    </div>
  </div>
</script>

<style>
</style>

<script type="text/javascript">
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