<script setup lang="ts">
defineProps<{ collapsed?: boolean }>()
</script>

<template>
  <nav class="flex flex-col h-full p-2 gap-1">

    <!-- Logo -->
    <div class="h-12 flex items-center justify-center font-bold">
      <span v-if="collapsed">⚡</span>
      <span v-else>Laravel Starter Kit</span>
    </div>

    <!-- Menu -->
    <a class="menu-item">
      📊 <span v-if="!collapsed">Dashboard</span>
    </a>

    <a class="menu-item">
      📁 <span v-if="!collapsed">All Category</span>
    </a>

    <div class="mt-auto menu-item">
      👤 <span v-if="!collapsed">Md Razu</span>
    </div>

  </nav>
</template>

<style scoped>

</style>
