<script setup>
import NavUser from '@/components/NavUser.vue'
import { ref } from 'vue'
import { route } from 'ziggy-js'
import { Link } from '@inertiajs/vue3'

const sidebarOpen = ref(true)
const mobileSidebar = ref(false)

const openMenu = ref(null)

const toggleMenu = (key) => {
  openMenu.value = openMenu.value === key ? null : key
}
</script>

<template>
  <div class="h-screen flex bg-gray-100 overflow-hidden">

    <!-- Mobile Overlay -->
    <div
      v-if="mobileSidebar"
      @click="mobileSidebar = false"
      class="fixed inset-0 bg-black/40 z-30 lg:hidden"
    />

    <!-- Sidebar -->
    <aside
      class="fixed lg:static z-40 h-full bg-gray-100 border-r transition-all duration-300
             flex flex-col"
      :class="[
        sidebarOpen ? 'w-64' : 'w-20',
        mobileSidebar ? 'left-0' : '-left-full lg:left-0'
      ]"
    >

      <!-- Logo -->
      <div class="h-16 flex items-center gap-3 px-4 border-b">
        <div class="w-9 h-9 rounded bg-black text-white flex items-center justify-center">
          ⚡
        </div>
        <span v-if="sidebarOpen" class="font-semibold text-lg">
          Laravel Starter Kit
        </span>
      </div>

      <!-- Menu -->
      <nav class="flex-1 overflow-y-auto px-3 py-4 space-y-1">

        <!-- Dashboard -->
        <a
          href="#"
          class="flex items-center gap-3 px-3 py-2 rounded-md
                 text-gray-700 hover:bg-gray-100 transition"
        >
          📊
          <span v-if="sidebarOpen">Dashboard</span>
        </a>

        <!-- Category Dropdown -->
        <div>
          <button
            @click="toggleMenu('category')"
            class="w-full flex items-center justify-between px-3 py-2
                   rounded-md text-gray-700 hover:bg-gray-100 transition"
          >
            <div class="flex items-center gap-3">
              🗂️
              <span v-if="sidebarOpen">Category</span>
            </div>
            <span
              v-if="sidebarOpen"
              class="transition"
              :class="openMenu === 'category' ? 'rotate-180' : ''"
            >
              ⌄
            </span>
          </button>

          <!-- Dropdown -->
          <div
            v-show="openMenu === 'category' && sidebarOpen"
            class="ml-10 mt-1 space-y-1"
          >
            <Link :href="route('category_page_all')" class="block px-3 py-1.5 rounded text-sm text-gray-600 hover:bg-gray-100">
              All Category
            </Link>
            <Link class="block px-3 py-1.5 rounded text-sm text-gray-600 hover:bg-gray-100" :href="route('category_page_add')">
              Add Category
            </Link>
          </div>
        </div>

      </nav>

      <!-- User -->
      <div class="border-t px-4 py-3 flex items-center gap-3">
        <div class="w-9 h-9 rounded-full bg-gray-300 flex items-center justify-center">
          MR
        </div>
        <div v-if="sidebarOpen">
          <p class="text-sm font-medium">Md Razu</p>
          <p class="text-xs text-gray-500">Admin</p>
        </div>
     
      </div>
    </aside>

    <!-- Main Area -->
    <div class="flex-1 flex flex-col bg-white overflow-hidden rounded-xl m-2 shadow-2xl">

      <!-- Header -->
      <header class="h-16  border-b flex items-center justify-between px-4">

        <div class="flex items-center gap-3">
          <!-- Mobile Toggle -->
          <button
            @click="mobileSidebar = true"
            class="lg:hidden text-xl"
          >
            ☰
          </button>

          <!-- Desktop Toggle -->
          <button
            @click="sidebarOpen = !sidebarOpen"
            class="hidden lg:block text-xl"
          >
            ☰
          </button>

          <h1 class="font-semibold text-lg">Dashboard</h1>
        </div>

        <div class="flex items-center gap-4">
          🔔
          ⚙️
        </div>
      </header>

      <!-- Page Content -->
      <main class="flex-1 overflow-y-auto p-6">
        <slot />
      </main>

    </div>
  </div>
</template>
