<script setup lang="ts">
import Button from '@/components/ui/button/Button.vue';
import { Checkbox } from '@/components/ui/checkbox';
import { Filter, Download } from 'lucide-vue-next';
import {
  DropdownMenu,
  DropdownMenuContent,
  DropdownMenuItem,
  DropdownMenuLabel,
  DropdownMenuSeparator,
  DropdownMenuTrigger,
} from '@/components/ui/dropdown-menu'
import {
  Table,
  TableBody,
  TableCaption,
  TableCell,
  TableHead,
  TableHeader,
  TableRow,
} from "@/components/ui/table"

import AppLayout from '@/layouts/AppLayout.vue';
import { Input } from '@/components/ui/input';
import { category_page_add, category_page_all, category_page_view } from '@/routes';
import { type BreadcrumbItem } from '@/types';
import { Head, Link, usePage } from '@inertiajs/vue3';
import { route } from 'ziggy-js';
import AdminLayout from '@/layouts/AdminLayout.vue';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Create Category Page',
        href: category_page_all().url,
    },
];

defineProps({
    alldata:Array
})

</script>

<template>
    <Head title="Dashboard"></Head>

   <AdminLayout>

        <div class="container mx-auto mt-5 space-y-4">

    <!-- Top Actions / Filters -->
    <div class="flex flex-col sm:flex-row justify-between items-center gap-4 p-4 bg-white rounded-xl shadow border border-gray-100">
      <!-- Left: Search + Filter -->
      <div class="flex flex-wrap items-center gap-3">
        <!-- Search -->
        <div class="relative">
          <input
            type="text"
            placeholder="Search data..."
            class="pl-10 w-64 py-2 rounded-lg border border-gray-200 focus:ring-2 focus:ring-blue-500 focus:outline-none transition"
          />
          <svg
            class="absolute left-3 top-1/2 -translate-y-1/2 w-4 h-4 text-gray-400"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
          >
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M21 21l-4.35-4.35m1.85-5.15a7 7 0 11-14 0 7 7 0 0114 0z" />
          </svg>
        </div>

        <!-- Filter Dropdown -->
        <div class="relative">
          <button class="flex items-center gap-1 px-4 py-2 rounded-lg border border-gray-200 hover:bg-blue-50 hover:text-blue-600 transition">
            Filter
            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <!-- Dummy Dropdown Items -->
          <div class="absolute left-0 mt-2 w-40 bg-white border border-gray-200 rounded-lg shadow-md z-10 hidden group-hover:block">
            <div class="px-3 py-2 text-gray-700 hover:bg-gray-100 cursor-pointer">Option 1</div>
            <div class="px-3 py-2 text-gray-700 hover:bg-gray-100 cursor-pointer">Option 2</div>
            <div class="px-3 py-2 text-gray-700 hover:bg-gray-100 cursor-pointer">Option 3</div>
          </div>
        </div>
      </div>

      <!-- Right: Action Buttons -->
      <div class="flex flex-wrap gap-2">
        <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition"><Link :href="route('category_page_add')">Create</Link></button>
        <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition">Export</button>
        <button class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition">Active</button>
        <button class="px-4 py-2 bg-yellow-500 text-white rounded-lg hover:bg-yellow-600 transition">Inactive</button>
        <button class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition">Delete</button>
      </div>
    </div>

    <!-- Data Table -->
    <div class="overflow-x-auto bg-white rounded-xl shadow border border-gray-100">
      <table class="min-w-full divide-y divide-gray-200">
        <!-- Table Header -->
        <thead class="bg-gradient-to-r from-blue-50 to-blue-100 sticky top-0 z-10">
          <tr>
            <th class="px-4 py-3 text-left w-12">
              <input type="checkbox" class="h-4 w-4 text-blue-600 rounded border-gray-300"/>
            </th>
            <th class="px-4 py-3 text-left text-gray-700 font-semibold">ID</th>
            <th class="px-4 py-3 text-left text-gray-700 font-semibold">Category Name</th>
            <th class="px-4 py-3 text-left text-gray-700 font-semibold">Title</th>
            <th class="px-4 py-3 text-left text-gray-700 font-semibold">Description</th>
            <th class="px-4 py-3 text-left text-gray-700 font-semibold">URL</th>
            <th class="px-4 py-3 text-left text-gray-700 font-semibold">Status</th>
            <th class="px-4 py-3 text-left text-gray-700 font-semibold">Manage</th>
          </tr>
        </thead>

        <!-- Table Body -->
        <tbody class="divide-y divide-gray-100">
          <tr v-for="data in alldata" :key="data.id" class="hover:bg-blue-50 transition-colors duration-200">
            <td class="px-4 py-3"><input type="checkbox" class="h-4 w-4 text-blue-600 rounded border-gray-300"/></td>
            <td class="px-4 py-3 font-medium text-gray-800">{{ data.id ?? '' }}</td>
            <td class="px-4 py-3 font-medium text-gray-800">{{ data.name ?? '' }}</td>
            <td class="px-4 py-3 font-medium text-gray-800">{{ data.title ?? '' }}</td>
            <td class="px-4 py-3 font-medium text-gray-800"> {{ data.description ?? '' }}</td>
            <td class="px-4 py-3 font-medium text-gray-800"> {{ data.url ?? '' }}</td>
            <td class="px-4 py-3 font-medium text-green-600">Active</td>
            <td class="px-4 py-3 font-medium text-gray-800">
              <button class="px-2 py-1 bg-blue-100 text-blue-600 rounded hover:bg-blue-200 transition text-sm">
                <Link :href="route('category_page_edit',{id: data.id , slug: data.slug})">edit</Link>
                <Link :href="route('category_page_view',{id: data.id , slug: data.slug})">view</Link>
              </button>
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
