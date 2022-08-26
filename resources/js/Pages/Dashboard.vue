<script lang="ts" setup>
  import User from '../Models/User'

  const props = defineProps<{ user: User }>()
  localStorage.setItem('user', JSON.stringify(props.user))
</script>

<template>
  <TopBar>
    <div class="flex flex-col items-center justify-center h-auto w-screen">
      <h2>Dashboard</h2>
    </div>
  </TopBar>
</template>
