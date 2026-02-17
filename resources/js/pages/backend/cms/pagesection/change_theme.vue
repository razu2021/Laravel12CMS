<script setup lang="ts">
import { Head, Link, usePage } from '@inertiajs/vue3';
import { route } from 'ziggy-js';
import AdminLayout from '@/layouts/AdminLayout.vue';
import {heroThemes,serviceThemes, Theme } from '@/theme';

    const {data} = defineProps<{
        data:any,
    }>();


    import { ref } from 'vue';

const selectedTheme = ref('');


</script>



<template>
<Head title="Details Page"></Head>

<AdminLayout>
    <h1>Choose Hero Theme</h1>
   <div v-if="data.dynamic_route === 'hero'" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
    
    <label v-for="theme in heroThemes" :key="theme.key" class="border rounded-xl overflow-hidden shadow hover:shadow-xl transition relative cursor-pointer group">
      
      <!-- Preview Image -->
      <img :src="theme.preview" class="w-full h-40 object-cover group-hover:scale-105 transition-transform duration-300" />

      <!-- Card Footer -->
      <div class="p-4 flex justify-between items-center bg-white">
        <span class="font-semibold text-gray-800">{{ theme.name }}</span>
        <input type="radio" name="hero_theme" class="accent-indigo-600 w-5 h-5" v-model="selectedTheme" :value="theme.key">
      </div>

      <!-- Highlight Border if selected -->
      <div v-if="selectedTheme === theme.key" class="absolute inset-0 border-4 border-indigo-500 rounded-xl pointer-events-none"></div>
    </label>
  </div>
    <!--============  -->
    <div v-if="data.dynamic_route === 'service'" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
    
    <label v-for="theme in serviceThemes" :key="theme.key" class="border rounded-xl overflow-hidden shadow hover:shadow-xl transition relative cursor-pointer group">
      
      <!-- Preview Image -->
      <img :src="theme.preview" class="w-full h-40 object-cover group-hover:scale-105 transition-transform duration-300" />

      <!-- Card Footer -->
      <div class="p-4 flex justify-between items-center bg-white">
        <span class="font-semibold text-gray-800">{{ theme.name }}</span>
        <input type="radio" name="hero_theme" class="accent-indigo-600 w-5 h-5" v-model="selectedTheme" :value="theme.key">
      </div>

      <!-- Highlight Border if selected -->
      <div v-if="selectedTheme === theme.key" class="absolute inset-0 border-4 border-indigo-500 rounded-xl pointer-events-none"></div>
    </label>
  </div>

</AdminLayout>
</template>