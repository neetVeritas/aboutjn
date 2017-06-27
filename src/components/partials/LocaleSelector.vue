<template>
  <div class="locale-list">
    <a href="#" v-localize="{item: 'localize.hover', attr:'title'}">
      <img class="locale-bubble" :src="'/src/assets/images/flags/' + locales[locale].flag"></img>
      <span class="locale-label" v-localize="{ item: 'localize.languages.' + locales[locale].name }"></span>
    </a>
    <!--<ul class="locale-menu">
      <li>
        <img class="locale-bubble" :src="'/src/assets/images/flags' + locales[$locale()].flag"></img>
        <span class="locale-label" v-localize="{item: locales[$locale()].name}"></span>
      </li>
    </ul>-->
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
            'flag': 'flag-br.png'
          },
          'ar-SA': {
            'name': 'arabic',
            'flag': 'flag-ar-png'
          }
        }
      }
    }
  }
</script>

<style lang="scss" scoped>

</style>