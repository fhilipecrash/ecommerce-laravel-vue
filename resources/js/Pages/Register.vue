<script lang="ts">
import { Inertia } from '@inertiajs/inertia';
import { reactive } from 'vue';

export default {
  setup() {
    const form = reactive({
      name: null,
      email: null,
      password: null,
    });

    function handleForm() {
      Inertia.post('/register', form);
    }

    return { form, handleForm }
  },
  props: {
    errors: {
      type: Object,
    },
  },
}
</script>

<template>
  <div class="h-screen w-screen flex flex-col items-center justify-center">
    <div
      v-for="(error, index) in errors"
      :key="index"
      class="flex flex-col text-red-500 p-2"
    >
      {{ error }}
    </div>
    <form class="flex flex-col items-center" @submit.prevent="handleForm()">
      <input type="text" placeholder="Username" v-model="form.name">
      <input type="email" placeholder="Email" v-model="form.email">
      <input type="password" placeholder="Password" v-model="form.password">
      <button
        type="submit"
        class="text-white border-2 h-10 w-20 rounded-md transition-colors hover:bg-white hover:text-slate-800 hover:border-none"
      >
        Sign up
      </button>
    </form>
  </div>
</template>

<style lang="postcss" scoped>
* {
  @apply bg-slate-800;
}
input {
  @apply border-2 border-gray-600 bg-gray-600 m-1 rounded text-white p-3;
}
</style>