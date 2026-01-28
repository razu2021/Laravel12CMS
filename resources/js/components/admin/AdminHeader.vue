<script setup>
defineEmits(['toggle-mobile', 'toggle-desktop'])
</script>

<template>
  <header
    class="h-14 bg-white border-b
           flex items-center justify-between
           px-4 md:px-6
           sticky top-0 z-20"
  >

    <!-- LEFT -->
    <div class="flex items-center gap-3">

      <!-- Mobile Toggle -->
      <button
        class="md:hidden p-2 rounded-lg
               hover:bg-gray-100 transition"
        @click="$emit('toggle-mobile')"
      >
        ☰
      </button>

      <!-- Desktop Toggle -->
      <button
        class="hidden md:flex p-2 rounded-lg
               hover:bg-gray-100 transition"
        @click="$emit('toggle-desktop')"
      >
        ☰
      </button>

      <!-- Title / Breadcrumb placeholder -->
      <div class="leading-tight">
        <h1 class="text-sm font-semibold text-gray-800">
          Dashboard
        </h1>
        <p class="text-xs text-gray-500">
          Overview
        </p>
      </div>
    </div>

    <!-- RIGHT -->
    <div class="flex items-center gap-3">

      <!-- Notification -->
      <button
        class="relative p-2 rounded-lg
               hover:bg-gray-100 transition"
      >
        🔔
        <span
          class="absolute -top-1 -right-1
                 h-4 w-4 rounded-full
                 bg-red-500 text-white
                 text-[10px]
                 flex items-center justify-center"
        >
          3
        </span>
      </button>

      <!-- User -->
      <div
        class="flex items-center gap-2
               px-2 py-1 rounded-lg
               hover:bg-gray-100 transition
               cursor-pointer"
      >
        <div
          class="h-8 w-8 rounded-full
                 bg-indigo-600 text-white
                 flex items-center justify-center
                 text-xs font-semibold"
        >
          MR
        </div>

        <span class="hidden sm:block text-sm text-gray-700">
          Md Razu
        </span>
      </div>

    </div>

  </header>
</template>
