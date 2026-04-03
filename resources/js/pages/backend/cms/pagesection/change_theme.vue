<script setup lang="ts">
import { Head, Link, useForm, usePage } from '@inertiajs/vue3';
import { route } from 'ziggy-js';
import AdminLayout from '@/layouts/AdminLayout.vue';
import { computed, ref } from 'vue';
import {abouteThemes,breadcrumbThemes,countryThemes,contactFormThemes,ctaThemes,heroThemes,faqThemes,folloqusThemes,googlemapsThemes,
  imageGalleryThemes,
  partnerThemes,
  serviceThemes, Theme } from '@/theme';

const props= defineProps<{
    data: {
        id: number,
        slug: string,
        section_key : string,
        dynamic_route : string,
    }
}>()



const activeTheme = computed(()=>{
  switch(props.data.dynamic_route){
      case 'about':
        return abouteThemes
      
      case 'breadcrumb':
        return breadcrumbThemes

      case 'country':
        return countryThemes
      
      case 'contact_form':
        return contactFormThemes
      
      case 'cta':
        return ctaThemes
      
      case 'faq':
        return faqThemes
      
      case 'followus':
        return folloqusThemes

      case 'google_map':
        return googlemapsThemes

      case 'hero':
        return heroThemes

      case 'imagegallery':
        return imageGalleryThemes

      case 'paratner':
        return partnerThemes


      default:
        return []
  }
})



//========= theme update code here 

// ✅ remember data
const form  = useForm(
  {
    id: props.data.id,
    slug :props.data.slug,
    theme: props.data.section_key ?? '',
  })




const updateTheme = (key:string) => {
  form.theme = key
  form.patch(route('page_section.theme_update'), {
    preserveScroll:true
  })

}





</script>



<template>
<Head title="Details Page"></Head>
<AdminLayout>
 <h1 class="pb-2 "> Select Futured Theme </h1>
   <div v-if="activeTheme.length" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
    <label v-for="theme in activeTheme" :key="theme.key" class="border rounded-xl overflow-hidden shadow hover:shadow-xl transition relative cursor-pointer group">
      <!-- Preview Image -->
      <img :src="theme.preview" class="w-full h-40 object-cover group-hover:scale-105 transition-transform duration-300" />
      <!-- Card Footer -->
      <div class="p-4 flex justify-between items-center bg-white">
        <span class="font-semibold text-gray-800">{{ theme.name }}</span>
        <input 
            type="radio"
            name="theme"
            class="accent-indigo-600 w-5 h-5"
            :value="theme.key"
            v-model="form.theme"
            @change="updateTheme(theme.key)">
      </div>
      <!-- Highlight Border if selected -->
      <div v-if="form.theme === theme.key" class="absolute inset-0 border-4 border-indigo-500 rounded-xl pointer-events-none"></div>
    </label>
  </div>
  <!-- ======== About THEME END HERE ========= -->



  









</AdminLayout>
</template>