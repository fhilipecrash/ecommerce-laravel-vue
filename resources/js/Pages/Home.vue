<template>
  <div class="w-screen h-screen flex flex-col items-center justify-center">
    <h1 class="text-2xl">Welcome to eCommerce</h1>
    <div class="flex flex-row">
      <Link href="/login" class="link-button">Log in</Link>
      <Link href="/register" class="link-button">Sign in</Link>
    </div>
  </div>
</template>

<style lang="postcss" scoped>
* {
  @apply text-white;
}
.link-button {
  @apply text-white text-center pt-1 m-2 border-2 h-10 w-20 rounded-md transition-colors hover:bg-white hover:text-slate-800 hover:border-none
}
</style>
