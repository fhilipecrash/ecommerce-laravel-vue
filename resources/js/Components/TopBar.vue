<script lang="ts" setup>
  import User from '../Models/User'

  const user = JSON.parse(localStorage.getItem('user') as string) as User
</script>

<template>
  <div
    class="h-16 w-screen justify-between items-center p-4 flex flex-row shadow-xl">
    <div>
      <Link href="/dashboard" class="top-bar-button">Home</Link>
      <Link href="/dashboard/products" class="top-bar-button">Products</Link>
      <Link href="/dashboard/support" class="top-bar-button">Support</Link>
    </div>
    <div class="flex flex-row justify-end p-3">
      <Link href="/profile" class="flex flex-row">
        <ic-baseline-account-circle class="text-2xl" />
        <span class="text-white text-xl px-1">{{ user?.name }}</span>
      </Link>
    </div>
  </div>
  <div>
    <slot />
  </div>
</template>

<style lang="postcss" scoped>
  * {
    @apply text-white bg-slate-900;
  }
  h2 {
    @apply text-2xl;
  }
  .top-bar-button {
    @apply text-lg m-4 font-display hover:text-blue-400;
  }
</style>
