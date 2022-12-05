<template>
  <TopBar>
    <div class="flex flex-col items-center justify-center h-auto w-screen">
      <form @submit.prevent="handleForm()">
        <input
          type="text"
          class="default-input"
          placeholder="Name"
          v-model="form.name" />

        <input
          type="number"
          class="default-input"
          placeholder="Price"
          v-model="form.price" />

        <input
          type="number"
          class="default-input"
          placeholder="Quantity"
          v-model="form.quantity" />

        <input
          type="text"
          class="default-input"
          placeholder="Description"
          v-model="form.description" />

        <button type="submit" class="default-btn">Add</button>
      </form>
    </div>
  </TopBar>
</template>

<script setup lang="ts">
  import { User } from '../Models/User'
  import TopBar from '../Components/TopBar.vue'
  import { reactive } from 'vue'
  import { Inertia } from '@inertiajs/inertia'

  const form = reactive({
    name: '',
    price: 0.0,
    quantity: 0,
    description: '',
  })

  const props = defineProps<{ user: User }>()
  localStorage.setItem('user', JSON.stringify(props.user))

  function handleForm() {
    Inertia.post('/api/products', form)
  }
</script>
