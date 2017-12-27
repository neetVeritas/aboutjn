<template>
  <div class="locale-list">
    <a class="locale-tab" href="#" v-localize="{item: 'localize.hover', attr:'title'}">
      <img :src="'/src/assets/images/flags/' + locales[locale].flag"></img>
      <span v-localize="{ item: 'localize.languages.' + locales[locale].name }"></span>
    </a>
    <ul class="locale-menu">
      <li v-for="(dat, loc) in locales">
        <a @click="$locale(loc)" class="locale-tab" href="#" v-localize="{item: 'localize.hover', attr:'title'}">
          <img :src="'/src/assets/images/flags/' + locales[loc].flag"></img>
          <span v-localize="{ item: 'localize.languages.' + locales[loc].name }"></span>
        </a>
      </li>
    </ul>
  </div>
</template>

<script>
  export default {
    name: 'locale-selector',
    props: ['locale'],
    data() {
      return {
        locales: {
          'en-US': {
            'name': 'english',
            'flag': 'flag-us.png'
          },
          'sp-LA': {
            'name': 'spanish',
            'flag': 'flag-sp.png'
          },
          'pr-BR': {
            'name': 'portuguese',
            'flag': 'flag-pr.png'
          },
          'ar-SA': {
            'name': 'arabic',
            'flag': 'flag-ar.png'
          }
        }
      }
    }
  }
</script>

<style lang="scss" scoped>
  @import '~styles/variables.scss';

  .locale-list {
    .locale-tab {
      display: inline-block;
      background-color: $color-cinder;
      img {
        display: inline-block;
        border-radius: 100%;
        width: 3rem;
      }
    }
    .local-menu {
      background-color: $color-cinder-dark;
      z-index: 100;
    }
  }
</style>
