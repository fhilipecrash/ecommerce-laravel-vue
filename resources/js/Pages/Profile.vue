<script lang="ts" setup>
  import User from '../Models/User'

  const props = defineProps<{ user: User }>()
  if (props.user) {
    localStorage.setItem('user', JSON.stringify(props.user))
  }

  const user = JSON.parse(localStorage.getItem('user') as string) as User

  const form = reactive({
    name: null,
    password: null,
  })

  function updateProfile() {
    ray(form)
    Inertia.put('/profile', form)
  }
</script>

<template>
  <TopBar>
    <form
      @submit.prevent="updateProfile()"
      class="flex flex-col items-center justify-center h-full w-screen p-6">
      <ic-baseline-account-circle class="text-9xl" />
      <div class="flex flex-col text-center">
        <label for="username">Username</label>
        <input
          type="text"
          id="username"
          class="default-input"
          :placeholder="user?.name"
          v-model="form.name" />
      </div>
      <div class="flex flex-col text-center">
        <label for="password">Password</label>
        <input
          type="password"
          id="password"
          class="default-input"
          placeholder="********"
          v-model="form.password" />
      </div>
      <div class="flex flex-row justify-center">
        <button class="larger-btn">Update Profile</button>
      </div>
    </form>
  </TopBar>
</template>
