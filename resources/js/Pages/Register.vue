<script lang="ts">
  export default {
    setup() {
      const form = reactive({
        name: null,
        email: null,
        password: null,
      })

      function handleForm() {
        Inertia.post('/register', form)
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
    <form class="flex flex-col items-center" @submit.prevent="handleForm()">
      <input type="text" placeholder="Username" v-model="form.name" />
      <span> {{ errors.name }} </span>
      <input type="email" placeholder="Email" v-model="form.email" />
      <span> {{ errors.email }} </span>
      <input type="password" placeholder="Password" v-model="form.password" />
      <span> {{ errors.password }} </span>
      <button
        type="submit"
        class="text-white border-2 h-10 w-20 rounded-md transition-colors hover:bg-white hover:text-slate-800 hover:border-none">
        Sign up
      </button>
    </form>
  </div>
</template>

<style lang="postcss" scoped>
  input {
    @apply border-2 border-gray-600 bg-gray-600 m-1 rounded text-white p-3;
  }
  span {
    @apply text-red-600;
  }
</style>
