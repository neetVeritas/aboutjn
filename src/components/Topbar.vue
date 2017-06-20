<template>
  <header>
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
            <div class="locale-list">
              <ul class="locale-menu">
                <li>
                  <img src="src/assets/images/flag-us.png">
                  English
                </li>
                <li>
                  <img src="src/assets/images/flag-portugal.png">
                  Portuguese
                </li>
                <li>
                  <img src="src/assets/images/flag-span.png">
                  Spanish
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
</template>

<script>
  export default {
    name: 'topbar'
  };
</script>

<style lang="scss" scoped>
  @import '~styles/variables.scss';

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
