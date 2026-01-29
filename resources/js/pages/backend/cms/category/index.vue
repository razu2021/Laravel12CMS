<script setup lang="ts">
import { useConfirmDelete } from '@/composables/useConfirmDelete';
import Button from '@/components/ui/button/Button.vue';
import { Checkbox } from '@/components/ui/checkbox';
import { Filter, Download,SquarePlus, Trash,SquarePen, Eye, Delete, ShieldCheck, ShieldMinus, DownloadCloud, DeleteIcon } from 'lucide-vue-next';
import {
  DropdownMenu,
  DropdownMenuContent,
  DropdownMenuItem,
  DropdownMenuLabel,
  DropdownMenuSeparator,
  DropdownMenuTrigger,
  DropdownMenuGroup
} from '@/components/ui/dropdown-menu'
import { type BreadcrumbItem } from '@/types';
import { Head, Link, router } from '@inertiajs/vue3';
import { route } from 'ziggy-js';
import AdminLayout from '@/layouts/AdminLayout.vue';
import { computed, ref } from 'vue';
const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Create Category Page',
        href: route('category_page.all'),
    },
];

const props = defineProps({
    alldata:Array
})




import { useBulkSelection } from '@/composables/useBulkSelection';



/// sweet alert use 
 const {confirmDelete} = useConfirmDelete();


const {selectedIds, isAnySelected, toggleSelectAll, bulkAction} = useBulkSelection()



</script>

<template>
    <Head title="Dashboard"></Head>

   <AdminLayout>

    

    <div class="container mx-auto mt-5 space-y-4 bg-white p-5 rounded-xl border border-gray-100 shadow-lg">
      <div class="leading-tight">
      <h1 class="text-sm font-semibold text-gray-800">
        Database Record Management
      </h1>
      <p class="text-xs text-gray-500">
        You can easily manage your data below with actions like <span class="font-medium text-gray-700">Create, Edit, View, Delete, Restore, Activate, Deactivate</span>, and more.
      </p>
    </div>
    <hr class="my-3 border-gray-200">
    <!-- Top Actions / Filters -->

<div
  class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 p-5 bg-white rounded-2xl border border-gray-100"
>
  <!-- LEFT: Search + Filter -->
  <div class="flex flex-wrap items-center gap-3 w-full lg:w-auto">
    <!-- Search Input -->
    <div class="relative flex-1 min-w-[200px]">
      <input
        type="text"
        placeholder="Search data..."
        class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-gray-200 text-sm
               focus:ring-2 focus:ring-blue-100 focus:border-blue-500 transition"
      />
      <svg
        class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400"
        fill="none" stroke="currentColor" viewBox="0 0 24 24"
      >
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M21 21l-4.35-4.35m1.85-5.15a7 7 0 11-14 0 7 7 0 0114 0z" />
      </svg>
    </div>

    <!-- Filter Dropdown -->
    <div class="relative group min-w-[120px]">
      <button
        class="flex items-center justify-between gap-2 px-4 py-2.5 rounded-xl
               border border-gray-200 bg-white text-sm font-medium
               text-gray-700 shadow-sm hover:bg-blue-50 hover:text-blue-600 transition w-full"
      >
        Filter
        <svg
          class="w-4 h-4 transition-transform duration-200 group-hover:rotate-180"
          fill="none" stroke="currentColor" viewBox="0 0 24 24"
        >
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M19 9l-7 7-7-7" />
        </svg>
      </button>

      <!-- Dropdown Items -->
      <div
        class="absolute left-0 mt-2 w-48 rounded-xl bg-white
               border border-gray-100 shadow-xl
               opacity-0 invisible scale-95
               group-hover:opacity-100 group-hover:visible group-hover:scale-100
               transition-all duration-200 z-50"
      >
        <ul class="py-2 text-sm">
          <li class="px-4 py-2 hover:bg-blue-50 hover:text-blue-600 cursor-pointer">📅 Latest</li>
          <li class="px-4 py-2 hover:bg-blue-50 hover:text-blue-600 cursor-pointer">⭐ Popular</li>
          <li class="px-4 py-2 hover:bg-blue-50 hover:text-blue-600 cursor-pointer">💰 Price</li>
        </ul>
      </div>
    </div>
  </div>

  <!-- RIGHT: Action Buttons -->
  <div class="flex flex-wrap justify-end items-center gap-2 w-full lg:w-auto">

    <!-- Bulk Delete -->
    <Transition
      enter-active-class="transition transform duration-300 ease-out"
      enter-from-class="opacity-0 scale-75 -translate-y-4"
      enter-to-class="opacity-100 scale-105 translate-y-0"
      leave-active-class="transition transform duration-200 ease-in"
      leave-from-class="opacity-100 scale-100 translate-y-0"
      leave-to-class="opacity-0 scale-90 translate-y-2"
    >
      <Button 
        v-show="selectedIds.length > 0"
        @click="bulkAction('delete', props.alldata)"
        class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded shadow-lg flex items-center gap-2 w-full sm:w-auto"
      >
        <DeleteIcon class="w-4 h-4"/> Delete
      </Button>
    </Transition>
    <Transition
      enter-active-class="transition transform duration-300 ease-out"
      enter-from-class="opacity-0 scale-75 -translate-y-4"
      enter-to-class="opacity-100 scale-105 translate-y-0"
      leave-active-class="transition transform duration-200 ease-in"
      leave-from-class="opacity-100 scale-100 translate-y-0"
      leave-to-class="opacity-0 scale-90 translate-y-2"
    >
      <Button 
        v-show="selectedIds.length > 0"
        @click="bulkAction('delete', props.alldata)"
        class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded shadow-lg flex items-center gap-2 w-full sm:w-auto"
      >
        <DeleteIcon class="w-4 h-4"/> Delete
      </Button>
    </Transition>
    <Transition
      enter-active-class="transition transform duration-300 ease-out"
      enter-from-class="opacity-0 scale-75 -translate-y-4"
      enter-to-class="opacity-100 scale-105 translate-y-0"
      leave-active-class="transition transform duration-200 ease-in"
      leave-from-class="opacity-100 scale-100 translate-y-0"
      leave-to-class="opacity-0 scale-90 translate-y-2"
    >
      <Button 
        v-show="selectedIds.length > 0"
        @click="bulkAction('delete', props.alldata)"
        class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded shadow-lg flex items-center gap-2 w-full sm:w-auto"
      >
        <DeleteIcon class="w-4 h-4"/> Delete
      </Button>
    </Transition>
    <!-- Bulk action button end here  -->

    <!-- Recycle -->
    <Button
      class="px-3 py-2.5 text-red-500 rounded-xl bg-white shadow-xl border border-red-200 hover:bg-red-100 transition-colors duration-200 flex items-center gap-2 w-full sm:w-auto"
    >
      <Trash class="w-4 h-4" />
      <span>Recycle</span>
    </Button>

    <!-- Create / Add -->
    <Button
      class="px-3 py-2.5 rounded-xl bg-white text-green-500 shadow-lg border border-green-400 hover:bg-blue-50 transition-colors duration-200 flex items-center gap-2 w-full sm:w-auto"
    >
      <Link :href="route('category_page.add')" class="flex items-center gap-2 w-full">
        <SquarePlus class="w-4 h-4" />
        <span>Create</span>
      </Link>
    </Button>

  </div>
</div>



    <!-- Data Table -->
    <div class="overflow-x-auto bg-white rounded-xl shadow border border-gray-100">
      <table class="min-w-full divide-y divide-gray-200">
        <!-- Table Header -->
        <thead class="bg-gradient-to-r from-blue-50 to-blue-100 sticky top-0 z-10">
          <tr>
            <th class="px-4 py-3 text-left text-sm w-12">
              <input type="checkbox" :checked="isAnySelected" @change="toggleSelectAll(props.alldata)" class="h-4 w-4 text-blue-600 rounded border-gray-300"/>
            </th>
            <th class="px-4 py-3 text-left text-gray-700 font-semibold text-sm">ID</th>
            <th class="px-4 py-3 text-left text-gray-700 font-semibold text-sm">Category Name</th>
            <th class="px-4 py-3 text-left text-gray-700 font-semibold text-sm">Title</th>
            <th class="px-4 py-3 text-left text-gray-700 font-semibold text-sm">Description</th>
            <th class="px-4 py-3 text-left text-gray-700 font-semibold text-sm">URL</th>
            <th class="px-4 py-3 text-left text-gray-700 font-semibold text-sm">Status</th>
            <th class="px-4 py-3 text-left text-gray-700 font-semibold text-sm">Manage</th>
          </tr>
        </thead>

        <!-- Table Body -->
        <tbody class="divide-y divide-gray-100">
          <tr v-for="data in alldata" :key="data.id" class="hover:bg-blue-50 transition-colors duration-200">
            <td class="px-4 py-3"><input type="checkbox" :value="data.id" v-model="selectedIds"  class="h-4 w-4 text-blue-600 rounded border-gray-300"/></td>
            <td class="px-4 py-3 font-medium text-gray-800 text-sm">{{ data.id ?? '' }}</td>
            <td class="px-4 py-3 font-medium text-gray-800 text-sm">{{ data.name ?? '' }}</td>
            <td class="px-4 py-3 font-medium text-gray-800 text-sm">{{ data.title ?? '' }}</td>
            <td class="px-4 py-3 font-medium text-gray-800 text-sm"> {{ data.description ?? '' }}</td>
            <td class="px-4 py-3 font-medium text-gray-800 text-sm"> {{ data.url ?? '' }}</td>
            <td class="px-4 py-3 font-medium text-green-600 text-sm" v-if="data.public_status == 1">Active </td>
            <td class="px-4 py-3 font-medium text-red-600 text-sm" v-else="data.public_status == 0">Inactive </td>
            <td class="px-4 py-3 font-medium text-gray-800">
              <DropdownMenu>
                  <DropdownMenuTrigger asChild>
                    <Button variant="outline">Manage</Button>
                  </DropdownMenuTrigger>
                  <DropdownMenuContent>
                    <DropdownMenuGroup>
                      <DropdownMenuItem>
                        <Link :href="route('category_page.edit',{id:data.id , slug:data.slug})" class="w-full inline-flex items-center gap-2  text-sm font-medium text-blue-600 rounded-lg">
                          <span class="flex items-center"><SquarePen /></span>
                          <span>  Edit</span>
                      </Link>
                      </DropdownMenuItem>
                      <!-- end -->
                      <DropdownMenuItem>
                        <Link :href="route('category_page.view',{id:data.id , slug:data.slug})" class="w-full inline-flex items-center gap-2  text-sm font-medium text-gray-600 rounded-lg">
                          <span class="flex items-center"><Eye /></span>
                          <span> View</span>
                      </Link>
                      </DropdownMenuItem>
                      <!-- end -->
                      <DropdownMenuItem>
                        <button @click="confirmDelete('category_page.softdelete',{id:data.id})" class="w-full inline-flex items-center gap-2  text-sm font-medium text-red-300 rounded-lg">
                          <span class="flex items-center"><Trash /></span>
                          <span> Delete </span>
                        </button>
                      </DropdownMenuItem>
                      <!-- end -->
                      
                    </DropdownMenuGroup>
                    <DropdownMenuGroup>
                      <DropdownMenuSeparator />
                      <DropdownMenuItem>
                        <Link :href="route('category_page.active',{id:data.id , slug:data.slug})" class="w-full inline-flex items-center gap-2  text-sm font-medium text-green-600 rounded-lg">
                          <span class="flex items-center"><ShieldCheck /></span>
                          <span> Active </span>
                      </Link>
                      </DropdownMenuItem>
                      <!-- end -->
                      <DropdownMenuItem>
                        <Link :href="route('category_page.deactive',{id:data.id , slug:data.slug})" class="w-full inline-flex items-center gap-2  text-sm font-medium text-yellow-600 rounded-lg">
                          <span class="flex items-center"><ShieldMinus /></span>
                          <span> InActive </span>
                      </Link>
                      </DropdownMenuItem>
                      <!-- end -->
                       <DropdownMenuSeparator />
                        <!-- end -->
                      <DropdownMenuItem>
                        <Link :href="route('category_page.edit',{id:data.id , slug:data.slug})" class="w-full inline-flex items-center gap-2  text-sm font-medium text-cyan-600 rounded-lg">
                          <span class="flex items-center"><DownloadCloud /></span>
                          <span> Export .PDF </span>
                      </Link>
                      </DropdownMenuItem>
                        <!-- end -->
                      <DropdownMenuItem>
                        <Link :href="route('category_page.edit',{id:data.id , slug:data.slug})" class="w-full inline-flex items-center gap-2  text-sm font-medium text-cyan-600 rounded-lg">
                          <span class="flex items-center"><DownloadCloud /></span>
                          <span> Export .xlsx </span>
                      </Link>
                      </DropdownMenuItem>
                      <!-- end -->
                    </DropdownMenuGroup>
                  </DropdownMenuContent>
                </DropdownMenu>
            </td>
          </tr>
        </tbody>
      </table>

      <!-- Footer / Pagination -->
      <div class="flex flex-col sm:flex-row justify-between items-center p-4 border-t border-gray-200">
        <div class="text-sm text-gray-500">Showing 1 to 10 of 50 entries</div>
        <div class="flex gap-2 mt-2 sm:mt-0">
          <button class="px-3 py-1 rounded border border-gray-300 hover:bg-gray-100 transition">Prev</button>
          <button class="px-3 py-1 rounded border border-gray-300 hover:bg-gray-100 transition">1</button>
          <button class="px-3 py-1 rounded border border-gray-300 hover:bg-gray-100 transition">2</button>
          <button class="px-3 py-1 rounded border border-gray-300 hover:bg-gray-100 transition">3</button>
          <button class="px-3 py-1 rounded border border-gray-300 hover:bg-gray-100 transition">Next</button>
        </div>
      </div>
    </div>
  </div>
        


















    </AdminLayout>
</template>
