<script setup>
defineEmits(['toggle-mobile', 'toggle-desktop'])
</script>

<template>
  <header class="h-14 bg-white border-b flex items-center justify-between px-4">

    <div class="flex items-center gap-2">
      <!-- Mobile -->
      <button class="md:hidden" @click="$emit('toggle-mobile')">
        ☰
      </button>

      <!-- Desktop -->
      <button class="hidden md:block" @click="$emit('toggle-desktop')">
        ☰
      </button>

      <h1 class="font-semibold text-gray-700">Dashboard</h1>
    </div>

    <div class="flex items-center gap-2">
      <span class="text-sm text-gray-500">Md Razu</span>
      <div class="h-8 w-8 rounded-full bg-gray-300"></div>
    </div>

  </header>
</template>
