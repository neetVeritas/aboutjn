<template>
  <header>
    <navbar />
    <div class="header-wrapper">
      <div class="row">
        <div class="six columns">
          <div class="menu-left">
            <ul>
            </ul>
          </div>
        </div>
        <div class="six columns">
          <div class="menu-right">
            <locale-selector :locale="$root.$locale()" />
          </div>
        </div>
      </div>
    </div>
  </header>
</template>

<script>
  import Navbar from '@/components/partials/Navbar'
  import LocaleSelector from '@/components/partials/LocaleSelector'

  export default {
    name: 'app-header',
    components: {
      Navbar,
      LocaleSelector
    }
  }
</script>

<style lang="scss" scoped>
  header {
    position: absolute;
    display: block;
    width: 100%;
    height: $header-height;
    background-color: $color-cinder;
    opacity: 0.8;
    border-bottom: 3px solid $color-cinder-dark;
  }

  header .header-wrapper h4 {
    text-align: center;
    position: relative;
    top: 1rem;
    color: $color-ghost-white;
    font-family: $font-logo;
  }

  header .header-menu li.header-title {
    font-family: $font-title;
    font-size: 32px;
    color: red;
  }
</style>
