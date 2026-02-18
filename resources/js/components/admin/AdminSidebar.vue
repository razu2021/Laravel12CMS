<script setup lang="ts">
import { ref } from 'vue';
import { Head, Link } from '@inertiajs/vue3'
import { route } from 'ziggy-js'
import {Gitlab, LayoutDashboard ,ChevronDown,Component,LayoutTemplate, Columns2, SlidersVertical, MailPlus, ContactIcon, SignatureIcon, PickaxeIcon, LockIcon, WebhookIcon, LucidePieChart } from 'lucide-vue-next';
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
      <AdminSeparetor title="Contant Management" />

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
          <Link :href="route('all_pages.categorypage')"class="px-3 py-1.5 text-sm text-gray-600 hover:text-indigo-700 hover:bg-indigo-50 rounded-md transition">
             Category Pages
          </Link>
          <Link :href="route('all_pages.Subcategorypage')" class="px-3 py-1.5 text-sm text-gray-600 hover:text-indigo-700 hover:bg-indigo-50 rounded-md transition">
            Sub Category Pages
          </Link>
          <Link :href="route('all_pages.Child_Category_page')" class="px-3 py-1.5 text-sm text-gray-600 hover:text-indigo-700 hover:bg-indigo-50 rounded-md transition">
            Chid Category Pages 
          </Link>
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
          <a :href="route('page_section.all')"class="px-3 py-1.5 text-sm text-gray-600 hover:text-indigo-700 hover:bg-indigo-50 rounded-md transition">
            All Section
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
  <AdminSeparetor title="Site Settings"/>
    <div class="flex flex-col space-y-1">
        <!-- Parent Button -->
        <button
          @click="toggleMenu('site_contact')" class="flex items-center justify-between w-full px-3 py-2 rounded-lg hover:bg-indigo-50 transition">
          <div class="flex items-center gap-3">
            <span class="w-4 h-4 flex items-center justify-center text-indigo-600"><ContactIcon /> </span>
            <span class="text-sm text-gray-700 font-medium">
              Contact Infromation
            </span>
          </div>
          <!-- Arrow -->
          <span class="text-xs text-gray-400 transition-transform duration-200"
            :class="openMenus['site_contact'] ? 'rotate-180 text-indigo-600' : 'rotate-0'"><ChevronDown /></span>
        </button>

        <!-- Dropdown Items -->
        <div class="ml-6 flex flex-col space-y-1 mt-1 overflow-hidden transition-all duration-300 ease-in-out"
          :style="openMenus['site_contact'] ? 'max-height: 500px;' : 'max-height: 0;'">
          <a href="#" class="px-3 py-1.5 text-sm text-gray-600 hover:text-indigo-700 hover:bg-indigo-50 rounded-md transition">
            Contact Email
          </a>
          <a href="#" class="px-3 py-1.5 text-sm text-gray-600 hover:text-indigo-700 hover:bg-indigo-50 rounded-md transition">
            Contact Phone
          </a>
          <a href="#" class="px-3 py-1.5 text-sm text-gray-600 hover:text-indigo-700 hover:bg-indigo-50 rounded-md transition">
            Address
          </a>
          <a href="#" class="px-3 py-1.5 text-sm text-gray-600 hover:text-indigo-700 hover:bg-indigo-50 rounded-md transition">
            Social Media
          </a>
        </div>
      </div>
      <!-- ====== dropdown menu end here ====== -->
    <div class="flex flex-col space-y-1">
        <!-- Parent Button -->
        <button
          @click="toggleMenu('email_noti')" class="flex items-center justify-between w-full px-3 py-2 rounded-lg hover:bg-indigo-50 transition">
          <div class="flex items-center gap-3">
            <span class="w-4 h-4 flex items-center justify-center text-indigo-600"><MailPlus /> </span>
            <span class="text-sm text-gray-700 font-medium">
             Email & Notification
            </span>
          </div>
          <!-- Arrow -->
          <span class="text-xs text-gray-400 transition-transform duration-200"
            :class="openMenus['email_noti'] ? 'rotate-180 text-indigo-600' : 'rotate-0'"><ChevronDown /></span>
        </button>

        <!-- Dropdown Items -->
        <div class="ml-6 flex flex-col space-y-1 mt-1 overflow-hidden transition-all duration-300 ease-in-out"
          :style="openMenus['email_noti'] ? 'max-height: 500px;' : 'max-height: 0;'">
          <a href="#" class="px-3 py-1.5 text-sm text-gray-600 hover:text-indigo-700 hover:bg-indigo-50 rounded-md transition">
            Email Configaretion
          </a>
          <a href="#" class="px-3 py-1.5 text-sm text-gray-600 hover:text-indigo-700 hover:bg-indigo-50 rounded-md transition">
            Admin Email
          </a>
          <a href="#" class="px-3 py-1.5 text-sm text-gray-600 hover:text-indigo-700 hover:bg-indigo-50 rounded-md transition">
            Send Email
          </a>
          <a href="#" class="px-3 py-1.5 text-sm text-gray-600 hover:text-indigo-700 hover:bg-indigo-50 rounded-md transition">
            Notice Board
          </a>
          <a href="#" class="px-3 py-1.5 text-sm text-gray-600 hover:text-indigo-700 hover:bg-indigo-50 rounded-md transition">
            Announcment
          </a>
        </div>
      </div>
      <!-- ====== dropdown menu end here ====== -->
    <div class="flex flex-col space-y-1">
        <!-- Parent Button -->
        <button
          @click="toggleMenu('auth_set')" class="flex items-center justify-between w-full px-3 py-2 rounded-lg hover:bg-indigo-50 transition">
          <div class="flex items-center gap-3">
            <span class="w-4 h-4 flex items-center justify-center text-indigo-600"><SignatureIcon /> </span>
            <span class="text-sm text-gray-700 font-medium">
             Authentication
            </span>
          </div>
          <!-- Arrow -->
          <span class="text-xs text-gray-400 transition-transform duration-200"
            :class="openMenus['auth_set'] ? 'rotate-180 text-indigo-600' : 'rotate-0'"><ChevronDown /></span>
        </button>

        <!-- Dropdown Items -->
        <div class="ml-6 flex flex-col space-y-1 mt-1 overflow-hidden transition-all duration-300 ease-in-out"
          :style="openMenus['auth_set'] ? 'max-height: 500px;' : 'max-height: 0;'">
          <a :href="route('page_section.all')"class="px-3 py-1.5 text-sm text-gray-600 hover:text-indigo-700 hover:bg-indigo-50 rounded-md transition">
            All Section
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
          @click="toggleMenu('gen_setting')" class="flex items-center justify-between w-full px-3 py-2 rounded-lg hover:bg-indigo-50 transition">
          <div class="flex items-center gap-3">
            <span class="w-4 h-4 flex items-center justify-center text-indigo-600"><SlidersVertical /> </span>
            <span class="text-sm text-gray-700 font-medium">
              General Settings
            </span>
          </div>
          <!-- Arrow -->
          <span class="text-xs text-gray-400 transition-transform duration-200"
            :class="openMenus['gen_setting'] ? 'rotate-180 text-indigo-600' : 'rotate-0'"><ChevronDown /></span>
        </button>

        <!-- Dropdown Items -->
        <div class="ml-6 flex flex-col space-y-1 mt-1 overflow-hidden transition-all duration-300 ease-in-out"
          :style="openMenus['gen_setting'] ? 'max-height: 500px;' : 'max-height: 0;'">
          <a href="#" class="px-3 py-1.5 text-sm text-gray-600 hover:text-indigo-700 hover:bg-indigo-50 rounded-md transition">
           Site Information
          </a>
          <a href="#" class="px-3 py-1.5 text-sm text-gray-600 hover:text-indigo-700 hover:bg-indigo-50 rounded-md transition">
            Pre Loader
          </a>
          <a href="#" class="px-3 py-1.5 text-sm text-gray-600 hover:text-indigo-700 hover:bg-indigo-50 rounded-md transition">
            Import Faveicons
          </a>
          <a href="#" class="px-3 py-1.5 text-sm text-gray-600 hover:text-indigo-700 hover:bg-indigo-50 rounded-md transition">
            Custom CSS 
          </a>
          <a href="#" class="px-3 py-1.5 text-sm text-gray-600 hover:text-indigo-700 hover:bg-indigo-50 rounded-md transition">
            Custom Script 
          </a>
          <a href="#" class="px-3 py-1.5 text-sm text-gray-600 hover:text-indigo-700 hover:bg-indigo-50 rounded-md transition">
            Manage header
          </a>
          <a href="#" class="px-3 py-1.5 text-sm text-gray-600 hover:text-indigo-700 hover:bg-indigo-50 rounded-md transition">
            Manage footer
          </a>
          <a href="#" class="px-3 py-1.5 text-sm text-gray-600 hover:text-indigo-700 hover:bg-indigo-50 rounded-md transition">
            Copy Ritght 
          </a>
        </div>
      </div>
      <!-- ====== dropdown menu end here ====== -->
    <div class="flex flex-col space-y-1">
        <!-- Parent Button -->
        <button
          @click="toggleMenu('maintenance')" class="flex items-center justify-between w-full px-3 py-2 rounded-lg hover:bg-indigo-50 transition">
          <div class="flex items-center gap-3">
            <span class="w-4 h-4 flex items-center justify-center text-indigo-600"><PickaxeIcon /> </span>
            <span class="text-sm text-gray-700 font-medium">
              Maintenance 
            </span>
          </div>
          <!-- Arrow -->
          <span class="text-xs text-gray-400 transition-transform duration-200"
            :class="openMenus['maintenance'] ? 'rotate-180 text-indigo-600' : 'rotate-0'"><ChevronDown /></span>
        </button>

        <!-- Dropdown Items -->
        <div class="ml-6 flex flex-col space-y-1 mt-1 overflow-hidden transition-all duration-300 ease-in-out"
          :style="openMenus['maintenance'] ? 'max-height: 500px;' : 'max-height: 0;'">
          <a href="#" class="px-3 py-1.5 text-sm text-gray-600 hover:text-indigo-700 hover:bg-indigo-50 rounded-md transition">
           Maintenance mode
          </a>
          <a href="#" class="px-3 py-1.5 text-sm text-gray-600 hover:text-indigo-700 hover:bg-indigo-50 rounded-md transition">
            Cache clear
          </a>
          <a href="#" class="px-3 py-1.5 text-sm text-gray-600 hover:text-indigo-700 hover:bg-indigo-50 rounded-md transition">
            Debug mode
          </a>
          <a href="#" class="px-3 py-1.5 text-sm text-gray-600 hover:text-indigo-700 hover:bg-indigo-50 rounded-md transition">
            System info
          </a>
          <a href="#" class="px-3 py-1.5 text-sm text-gray-600 hover:text-indigo-700 hover:bg-indigo-50 rounded-md transition">
            Version info 
          </a>
         
        </div>
      </div>
      <!-- ====== dropdown menu end here ====== -->
    <div class="flex flex-col space-y-1">
        <!-- Parent Button -->
        <button
          @click="toggleMenu('privecy_polcy')" class="flex items-center justify-between w-full px-3 py-2 rounded-lg hover:bg-indigo-50 transition">
          <div class="flex items-center gap-3">
            <span class="w-4 h-4 flex items-center justify-center text-indigo-600"><LockIcon /> </span>
            <span class="text-sm text-gray-700 font-medium">
              Legal & Policy
            </span>
          </div>
          <!-- Arrow -->
          <span class="text-xs text-gray-400 transition-transform duration-200"
            :class="openMenus['privecy_polcy'] ? 'rotate-180 text-indigo-600' : 'rotate-0'"><ChevronDown /></span>
        </button>

        <!-- Dropdown Items -->
        <div class="ml-6 flex flex-col space-y-1 mt-1 overflow-hidden transition-all duration-300 ease-in-out"
          :style="openMenus['privecy_polcy'] ? 'max-height: 500px;' : 'max-height: 0;'">
          <a href="#" class="px-3 py-1.5 text-sm text-gray-600 hover:text-indigo-700 hover:bg-indigo-50 rounded-md transition">
            Privacy Policy
          </a>
          <a href="#" class="px-3 py-1.5 text-sm text-gray-600 hover:text-indigo-700 hover:bg-indigo-50 rounded-md transition">
            Terms & Conditions
          </a>
          <a href="#" class="px-3 py-1.5 text-sm text-gray-600 hover:text-indigo-700 hover:bg-indigo-50 rounded-md transition">
            Cookie Policy
          </a>
        </div>
      </div>
      <!-- ====== dropdown menu end here ====== -->
    <div class="flex flex-col space-y-1">
        <!-- Parent Button -->
        <button
          @click="toggleMenu('api_setting')" class="flex items-center justify-between w-full px-3 py-2 rounded-lg hover:bg-indigo-50 transition">
          <div class="flex items-center gap-3">
            <span class="w-4 h-4 flex items-center justify-center text-indigo-600"><WebhookIcon /> </span>
            <span class="text-sm text-gray-700 font-medium">
              API Settings
            </span>
          </div>
          <!-- Arrow -->
          <span class="text-xs text-gray-400 transition-transform duration-200"
            :class="openMenus['api_setting'] ? 'rotate-180 text-indigo-600' : 'rotate-0'"><ChevronDown /></span>
        </button>

        <!-- Dropdown Items -->
        <div class="ml-6 flex flex-col space-y-1 mt-1 overflow-hidden transition-all duration-300 ease-in-out"
          :style="openMenus['api_setting'] ? 'max-height: 500px;' : 'max-height: 0;'">
          <a href="#" class="px-3 py-1.5 text-sm text-gray-600 hover:text-indigo-700 hover:bg-indigo-50 rounded-md transition">
           Google Maps API
          </a>
          <a href="#" class="px-3 py-1.5 text-sm text-gray-600 hover:text-indigo-700 hover:bg-indigo-50 rounded-md transition">
            reCAPTCHA key
          </a>
          <a href="#" class="px-3 py-1.5 text-sm text-gray-600 hover:text-indigo-700 hover:bg-indigo-50 rounded-md transition">
           Payment gateway keys
          </a>
          <a href="#" class="px-3 py-1.5 text-sm text-gray-600 hover:text-indigo-700 hover:bg-indigo-50 rounded-md transition">
           SMS API
          </a>
          <a href="#" class="px-3 py-1.5 text-sm text-gray-600 hover:text-indigo-700 hover:bg-indigo-50 rounded-md transition">
          Third-party webhook URL
          </a>
        </div>
      </div>
      <!-- ====== dropdown menu end here ====== -->
    <div class="flex flex-col space-y-1">
        <!-- Parent Button -->
        <button
          @click="toggleMenu('any_trac')" class="flex items-center justify-between w-full px-3 py-2 rounded-lg hover:bg-indigo-50 transition">
          <div class="flex items-center gap-3">
            <span class="w-4 h-4 flex items-center justify-center text-indigo-600"><LucidePieChart /> </span>
            <span class="text-sm text-gray-700 font-medium">
              Analytics & Tracking
            </span>
          </div>
          <!-- Arrow -->
          <span class="text-xs text-gray-400 transition-transform duration-200"
            :class="openMenus['any_trac'] ? 'rotate-180 text-indigo-600' : 'rotate-0'"><ChevronDown /></span>
        </button>

        <!-- Dropdown Items -->
        <div class="ml-6 flex flex-col space-y-1 mt-1 overflow-hidden transition-all duration-300 ease-in-out"
          :style="openMenus['any_trac'] ? 'max-height: 500px;' : 'max-height: 0;'">
          <a href="#" class="px-3 py-1.5 text-sm text-gray-600 hover:text-indigo-700 hover:bg-indigo-50 rounded-md transition">
           Google Analytics ID
          </a>
          <a href="#" class="px-3 py-1.5 text-sm text-gray-600 hover:text-indigo-700 hover:bg-indigo-50 rounded-md transition">
           Google Tag Manager
          </a>
          <a href="#" class="px-3 py-1.5 text-sm text-gray-600 hover:text-indigo-700 hover:bg-indigo-50 rounded-md transition">
            Meta Pixel
          </a>
          <a href="#" class="px-3 py-1.5 text-sm text-gray-600 hover:text-indigo-700 hover:bg-indigo-50 rounded-md transition">
           Custom header scripts
          </a>
          <a href="#" class="px-3 py-1.5 text-sm text-gray-600 hover:text-indigo-700 hover:bg-indigo-50 rounded-md transition">
            Custom footer scripts
          </a>
        </div>
      </div>
      <!-- ====== dropdown menu end here ====== -->


























    </nav>

    <!-- Footer -->
    <div class="h-14 border-t px-4 flex items-center">
      Md Razu
    </div>

  </aside>

 

</div>

</template>
