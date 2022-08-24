<template>
  <div
    class="h-16 w-screen bg-slate-900 items-center flex flex-row p-3 shadow-xl">
    <Link href="#" class="top-bar-button">Home</Link>
    <Link href="#" class="top-bar-button">Products</Link>
    <Link href="#" class="top-bar-button">Support</Link>
  </div>
  <div>
    <slot />
  </div>
</template>

<style lang="postcss" scoped>
  * {
    @apply text-white;
  }
  h2 {
    @apply text-2xl;
  }
  .top-bar-button {
    @apply text-lg ml-8 bg-slate-900 font-display;
  }
</style>
