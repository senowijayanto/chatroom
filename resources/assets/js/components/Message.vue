<template lang="html">
    <div class="">
      <li class="list-group-item" :class="className"><slot></slot></li>
      <small class="badge float-right" :class="badgeColor">You</small>
    </div>
</template>

<script>
export default {
  props: [
    'color'
  ],
  computed: {
    className() {
      return 'list-group-item-' + this.color
    },
    badgeColor() {
      return 'badge-'+this.color
    }
  }
}
</script>

<style lang="css">
</style>
