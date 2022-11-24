<template>
  <div class="w-screen h-screen flex flex-col items-center justify-center">
    <form class="flex flex-col items-center" @submit.prevent="handleForm()">
      <input
        class="default-input"
        type="text"
        v-model="form.email"
        placeholder="E-mail" />
      <span> {{ errors.email }} </span>
      <input
        class="default-input"
        type="password"
        v-model="form.password"
        placeholder="Password" />
      <span> {{ errors.password }} </span>
      <button class="default-btn">Log In</button>
    </form>
  </div>
</template>

<script setup lang="ts">
  import { Inertia } from '@inertiajs/inertia'
  import { reactive, defineProps } from 'vue'

  defineProps<{
    errors: {
      email: string
      password: string
    }
  }>()

  const form = reactive({
    email: null,
    password: null,
  })

  function handleForm() {
    Inertia.post('/login', form)
  }
</script>
