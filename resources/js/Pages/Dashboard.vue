<script lang="ts" setup>
  import User from '../Models/User'

  const props = defineProps<{ user: User }>()

  provide('user', props.user)
</script>

<template>
  <TopBar>
    <div class="flex flex-col items-center justify-center h-auto w-screen">
      <h2>Dashboard</h2>
    </div>
  </TopBar>
</template>
