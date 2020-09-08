<template>
  <svg class="icon" :class="[name]" aria-hidden="true">
    <use :xlink:href="iconName"></use>
  </svg>
</template>

<script>
  export default {
    props: [
      'name'
    ],
    components: {},
    data () {
      return {}
    },
    computed: {
      iconName () {
        return '#' + this.name
      }
    },
    methods: {},
    watch: {}
    // beforeCreate () {},
    // created () {},
    // beforeMount () {},
    // mounted () {},
    // beforeUpdate () {},
    // updated () {},
    // activated () {},
    // deactivated () {},
    // beforeDestroy () {},
    // destroyed () {}
  }
</script>

<style lang="less" scoped>
  .icon {
    width: 1em; height: 1em;
    vertical-align: -0.15em;
    fill: currentColor;
    overflow: visible;
    transition: transform 0.3s;
    &.rotate180 {
      transform:rotate(180deg);
    }
  }
</style>
