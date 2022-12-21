<template>
  <div class="h-screen w-screen flex flex-col items-center justify-center">
    <form class="flex flex-col items-center" @submit.prevent="handleForm()">
      <input
        class="default-input"
        type="text"
        placeholder="Username"
        v-model="form.name" />
      <span> {{ errors.name }} </span>
      <input
        class="default-input"
        type="email"
        placeholder="Email"
        v-model="form.email" />
      <span> {{ errors.email }} </span>
      <input
        class="default-input"
        type="password"
        placeholder="Password"
        v-model="form.password" />
      <span> {{ errors.password }} </span>
      <button type="submit" class="default-btn">Sign up</button>
    </form>
  </div>
</template>

<script setup lang="ts">
  import { Inertia } from '@inertiajs/inertia'
  import { reactive } from 'vue'

  defineProps<{
    errors: {
      name: string,
      email: string,
      password: string,
    }
  }>()

  const form = reactive({
    name: '',
    email: '',
    password: '',
  })
  function handleForm() {
    Inertia.post('/api/users', form)
  }
</script>

<style scoped lang="postcss">
  span {
    @apply text-red-600;
  }
</style>
