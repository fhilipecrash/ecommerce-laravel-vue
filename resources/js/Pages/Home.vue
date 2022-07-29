<script lang="ts">
import { Link } from "@inertiajs/inertia-vue3";

export default {
  components: {
    Link
  },
}
</script>

<template>
  <div class="h-screen w-screen flex flex-col items-center justify-center">
    <form class="flex flex-col items-center">
      <input type="text">
      <input type="email">
      <input type="password">
      <button
        type="submit"
        class="text-white border-2 h-10 w-20 rounded-md transition-colors hover:bg-white hover:text-slate-800 hover:border-none"
      >
        Sign up
      </button>
    </form>
    <Link href="/about" class="text-blue-400">About</Link>
  </div>
</template>

<style lang="postcss" scoped>
* {
  @apply bg-slate-800;
}
input {
  @apply border-2 border-gray-600 bg-gray-600 m-3 rounded text-white p-3;
}
</style>