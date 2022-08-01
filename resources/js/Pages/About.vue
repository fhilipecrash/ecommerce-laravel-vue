<script lang="ts">
export default {  
  data() {
    return {
      greeting: 'About'
    }
  }
}
</script>

<template>
  <div class="h-screen w-screen flex flex-col items-center justify-center">
    <p class="text-2xl text-white">{{ greeting }}</p>
    <Link href="/" class="text-blue-400">Home</Link>
  </div>
</template>

<style lang="postcss" scoped>
* {
  @apply bg-slate-800;
}
</style>