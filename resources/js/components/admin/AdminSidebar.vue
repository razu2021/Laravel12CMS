<script setup lang="ts">
import { ref } from 'vue';
import { Head, Link } from '@inertiajs/vue3'
import { route } from 'ziggy-js'
import {Gitlab, LayoutDashboard ,ChevronDown,Component,LayoutTemplate, Columns2 } from 'lucide-vue-next';
import AdminSeparetor from './ui/AdminSeparetor.vue';



// --- dropdown toggle option 

const openMenus = ref<{[key:string]: boolean}>({})
const toggleMenu = (key:string)=>{
  openMenus.value[key] =!openMenus.value[key]
}


</script>


<template>
<div class="h-screen flex bg-gray-300">

  <!-- Sidebar -->
  <aside class="w-64 bg-white border-r flex flex-col rounded-2xl m-2 shadow-2xl">

    <!-- Header -->
    <div class="h-14 flex items-center px-4 border-b font-semibold">
      <a href="" class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100">
        <span class=""><Gitlab></Gitlab></span>
       <span> Laravel Strater Kits</span>
      </a>
    </div>

    <!-- Menu -->
    <nav class=" flex-1 overflow-y-auto p-2 space-y-1">
      <a href="" class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-gray-100">
        <span class="w-4 h-4 flex items-center justify-center"><LayoutDashboard/> </span>
        <span class="text-sm">Dashboard</span>
      </a>
      <AdminSeparetor />

      <!-- ======= Dropdown menu start here  -->
      <div class="flex flex-col space-y-1">
        <!-- Parent Button -->
        <button
          @click="toggleMenu('category')" class="flex items-center justify-between w-full px-3 py-2 rounded-lg hover:bg-indigo-50 transition">
          <div class="flex items-center gap-3">
            <span class="w-4 h-4 flex items-center justify-center text-indigo-600"><Component /> </span>
            <span class="text-sm text-gray-700 font-medium">
               Category
            </span>
          </div>
          <!-- Arrow -->
          <span class="text-xs text-gray-400 transition-transform duration-200"
            :class="openMenus['category'] ? 'rotate-180 text-indigo-600' : 'rotate-0'"><ChevronDown /></span>
        </button>

        <!-- Dropdown Items -->
        <div class="ml-6 flex flex-col space-y-1 mt-1 overflow-hidden transition-all duration-300 ease-in-out"
          :style="openMenus['category'] ? 'max-height: 500px;' : 'max-height: 0;'">
          <Link :href="route('category_page.all')"class="px-3 py-1.5 text-sm text-gray-600 hover:text-indigo-700 hover:bg-indigo-50 rounded-md transition">
            All Category
          </Link>
          <Link :href="route('sub_category_page.all')" class="px-3 py-1.5 text-sm text-gray-600 hover:text-indigo-700 hover:bg-indigo-50 rounded-md transition">
            Sub Category
          </Link>
          <a :href="route('child_category_page.all')" class="px-3 py-1.5 text-sm text-gray-600 hover:text-indigo-700 hover:bg-indigo-50 rounded-md transition">
            Chid Category
          </a>
        </div>
      </div>
      <!-- ====== dropdown menu end here ====== -->
      <div class="flex flex-col space-y-1">
        <!-- Parent Button -->
        <button
          @click="toggleMenu('pages')" class="flex items-center justify-between w-full px-3 py-2 rounded-lg hover:bg-indigo-50 transition">
          <div class="flex items-center gap-3">
            <span class="w-4 h-4 flex items-center justify-center text-indigo-600"><Columns2 /> </span>
            <span class="text-sm text-gray-700 font-medium">
               All Pages 
            </span>
          </div>
          <!-- Arrow -->
          <span class="text-xs text-gray-400 transition-transform duration-200"
            :class="openMenus['pages'] ? 'rotate-180 text-indigo-600' : 'rotate-0'"><ChevronDown /></span>
        </button>

        <!-- Dropdown Items -->
        <div class="ml-6 flex flex-col space-y-1 mt-1 overflow-hidden transition-all duration-300 ease-in-out"
          :style="openMenus['pages'] ? 'max-height: 500px;' : 'max-height: 0;'">
          <a href="#"class="px-3 py-1.5 text-sm text-gray-600 hover:text-indigo-700 hover:bg-indigo-50 rounded-md transition">
            All Category
          </a>
          <a href="#" class="px-3 py-1.5 text-sm text-gray-600 hover:text-indigo-700 hover:bg-indigo-50 rounded-md transition">
            Sub Category
          </a>
          <a href="#" class="px-3 py-1.5 text-sm text-gray-600 hover:text-indigo-700 hover:bg-indigo-50 rounded-md transition">
            Chid Category
          </a>
        </div>
      </div>
      <!-- ====== dropdown menu end here ====== -->
      <div class="flex flex-col space-y-1">
        <!-- Parent Button -->
        <button
          @click="toggleMenu('sections')" class="flex items-center justify-between w-full px-3 py-2 rounded-lg hover:bg-indigo-50 transition">
          <div class="flex items-center gap-3">
            <span class="w-4 h-4 flex items-center justify-center text-indigo-600"><LayoutTemplate /> </span>
            <span class="text-sm text-gray-700 font-medium">
               Page Sections
            </span>
          </div>
          <!-- Arrow -->
          <span class="text-xs text-gray-400 transition-transform duration-200"
            :class="openMenus['sections'] ? 'rotate-180 text-indigo-600' : 'rotate-0'"><ChevronDown /></span>
        </button>

        <!-- Dropdown Items -->
        <div class="ml-6 flex flex-col space-y-1 mt-1 overflow-hidden transition-all duration-300 ease-in-out"
          :style="openMenus['sections'] ? 'max-height: 500px;' : 'max-height: 0;'">
          <a href="#"class="px-3 py-1.5 text-sm text-gray-600 hover:text-indigo-700 hover:bg-indigo-50 rounded-md transition">
            All Category
          </a>
          <a href="#" class="px-3 py-1.5 text-sm text-gray-600 hover:text-indigo-700 hover:bg-indigo-50 rounded-md transition">
            Sub Category
          </a>
          <a href="#" class="px-3 py-1.5 text-sm text-gray-600 hover:text-indigo-700 hover:bg-indigo-50 rounded-md transition">
            Chid Category
          </a>
        </div>
      </div>
      <!-- ====== dropdown menu end here ====== -->
<AdminSeparetor />
 







    </nav>

    <!-- Footer -->
    <div class="h-14 border-t px-4 flex items-center">
      Md Razu
    </div>

  </aside>

 

</div>

</template>
