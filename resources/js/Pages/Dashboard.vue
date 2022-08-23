<script lang="ts" setup>
  const props = defineProps<{ user: string }>()
  ray(`Vue ${props.user}`)
</script>

<template>
  <div class="flex flex-col items-center justify-center h-screen w-screen">
    <h2>Dashboard</h2>
    <p>You are logged in! {{ props.user }}</p>
  </div>
</template>

<style lang="postcss" scoped>
  * {
    @apply text-white;
  }
  h2 {
    @apply text-2xl;
  }
</style>
