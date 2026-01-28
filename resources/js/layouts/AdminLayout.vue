<script setup>
import AdminFooter from '@/components/admin/AdminFooter.vue';
import AdminHeader from '@/components/admin/AdminHeader.vue';
import AdminSidebar from '@/components/admin/AdminSidebar.vue';
import { ref } from 'vue';
const sidebarCollapsed = ref(false)
const mobileSidebar = ref(false)
</script>



<template>
  <div class="h-screen flex overflow-hidden bg-gray-300">

    <!-- MOBILE OVERLAY -->
    <div
      v-if="mobileSidebar"
      class="fixed inset-0 bg-black/40 z-30 md:hidden"
      @click="mobileSidebar = false"
    ></div>

    <!-- SIDEBAR -->
    <AdminSidebar
      :collapsed="sidebarCollapsed"
      :class="[
        mobileSidebar ? 'translate-x-0' : '-translate-x-full md:translate-x-0'
      ]"
      class="fixed md:static z-40 transition-transform duration-300"
    />

    <!-- CONTENT AREA -->
    <div class="flex-1 flex flex-col overflow-hidden m-2 shadow-xl bg-white rounded-3xl">

      <!-- HEADER -->
      <AdminHeader
        @toggle-mobile="mobileSidebar = true"
        @toggle-desktop="sidebarCollapsed = !sidebarCollapsed"
      />

      <!-- PAGE CONTENT -->
      <main class="flex-1 overflow-y-auto p-4">
        <slot />
      </main>

      <!-- FOOTER -->
      <AdminFooter />
    </div>

  </div>
</template>