<template>
  <TopBar>
    <div class="flex flex-col items-center justify-center h-auto w-screen">
      <h2>Dashboard</h2>
    </div>
  </TopBar>
</template>

<script setup lang="ts">
  import { defineProps } from 'vue'
  import { User } from '../Models/User'
  import TopBar from '../Components/TopBar.vue'

  const props = defineProps<{ user: User }>()
  localStorage.setItem('user', JSON.stringify(props.user))
</script>
