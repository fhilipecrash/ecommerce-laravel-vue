<script lang="ts" setup>
  const props = defineProps<{
    errors: {
      name: string
      email: string
      password: string
    }
  }>()

  const form = reactive({
    name: null,
    email: null,
    password: null,
  })

  function handleForm() {
    Inertia.post('/register', form)
  }
</script>

<template>
  <div class="h-screen w-screen flex flex-col items-center justify-center">
    <form class="flex flex-col items-center" @submit.prevent="handleForm()">
      <input
        class="default-input"
        type="text"
        placeholder="Username"
        v-model="form.name" />
      <span> {{ props.errors.name }} </span>
      <input
        class="default-input"
        type="email"
        placeholder="Email"
        v-model="form.email" />
      <span> {{ props.errors.email }} </span>
      <input
        class="default-input"
        type="password"
        placeholder="Password"
        v-model="form.password" />
      <span> {{ props.errors.password }} </span>
      <button type="submit" class="default-btn">Sign up</button>
    </form>
  </div>
</template>

<style lang="postcss" scoped>
  span {
    @apply text-red-600;
  }
</style>
