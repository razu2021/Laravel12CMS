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

    <AppLayout :breadcrumbs="breadcrumbs">


    <div class="container mx-auto mt-5 ">

    <div class="flex flex-wrap sm:flex-row justify-between items-center gap-4 p-4 bg-white rounded-xl shadow-sm border border-gray-100">

  <!-- Left: Search + Filter -->
  <div class="searchData flex flex-wrap items-center gap-3">
    
    <!-- Search -->
    <div class="relative">
    
      <Input
        type="text"
        placeholder="Search data..."
        class="pl-10 w-64 rounded-lg border-gray-200 focus:ring-2 focus:ring-blue-500"
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

    <!-- Dropdown -->
    <DropdownMenu>
      <DropdownMenuTrigger asChild>
        <Button variant="outline" class="rounded-lg border-gray-200 hover:bg-blue-50 hover:text-blue-600 transition"> Filter <Filter></Filter> </Button>
      </DropdownMenuTrigger>

      <DropdownMenuContent class="w-48 rounded-xl shadow-lg border border-gray-100">
        <DropdownMenuGroup>
          <DropdownMenuLabel class="text-gray-500">My Account</DropdownMenuLabel>
          <DropdownMenuItem class="cursor-pointer">Profile</DropdownMenuItem>
          <DropdownMenuItem class="cursor-pointer">Billing</DropdownMenuItem>
        </DropdownMenuGroup>

        <DropdownMenuSeparator />

        <DropdownMenuGroup>
          <DropdownMenuItem class="cursor-pointer">Team</DropdownMenuItem>
          <DropdownMenuItem class="cursor-pointer">Subscription</DropdownMenuItem>
        </DropdownMenuGroup>
      </DropdownMenuContent>
    </DropdownMenu>
  </div>

  <!-- Right: Actions -->
  <div class="action_button flex flex-wrap items-center gap-2">

    <Button class="bg-gray-100 text-gray-700 hover:bg-gray-200 rounded-lg">
      <Download></Download>
      Export
    </Button>
    <Button class="bg-blue-600 text-white hover:bg-blue-700 rounded-lg">
      Active
    </Button>
    <Button class="bg-blue-600 text-white hover:bg-blue-700 rounded-lg">
      InActive
    </Button>
    <Button class="bg-red-500 text-white hover:bg-red-600 rounded-lg">
      Delete
    </Button>
  </div>

</div>

      <Table class=" overflow-hidden border border-gray-200 shadow-lg bg-white table-auto p-5">
        <!-- Header -->
        
        <TableHeader class="bg-gradient-to-r from-blue-50 to-blue-100">
          <TableRow>

            <TableHead class="w-[120px] font-semibold text-gray-700"><Checkbox v-model:checked="masterChecked"></Checkbox></TableHead>
            <TableHead class="font-semibold text-gray-700">ID</TableHead>
            <TableHead class="font-semibold text-gray-700">Category Name</TableHead>
            <TableHead class="font-semibold text-gray-700">Category Title</TableHead>
            <TableHead class="font-semibold text-gray-700">Category Description</TableHead>
            <TableHead class="font-semibold text-gray-700">Category URL</TableHead>
            <TableHead class="font-semibold text-gray-700">Status</TableHead>
            <TableHead class="font-semibold text-gray-700">Manage</TableHead>
            

          </TableRow>
        </TableHeader>

        <!-- Body -->
        <TableBody class="divide-y divide-gray-100">

          <TableRow class="hover:bg-blue-50 transition-colors duration-200">
            <TableCell class="font-medium text-gray-800"><Checkbox></Checkbox></TableCell>
            <TableCell class="font-medium text-gray-800">INV001</TableCell>
            <TableCell class="font-medium text-gray-800">INV001</TableCell>
            <TableCell class="font-medium text-gray-800">INV001</TableCell>
            <TableCell class="font-medium text-gray-800">INV001</TableCell>
            <TableCell class="font-medium text-gray-800">INV001</TableCell>
            <TableCell class="font-medium text-gray-800">INV001</TableCell>
            <TableCell class="font-medium text-gray-800">INV001</TableCell>

          </TableRow>
          <TableRow class="hover:bg-blue-50 transition-colors duration-200">
            <TableCell class="font-medium text-gray-800"><Checkbox></Checkbox></TableCell>
            <TableCell class="font-medium text-gray-800">INV001</TableCell>
            <TableCell class="font-medium text-gray-800">INV001</TableCell>
            <TableCell class="font-medium text-gray-800">INV001</TableCell>
            <TableCell class="font-medium text-gray-800">INV001</TableCell>
            <TableCell class="font-medium text-gray-800">INV001</TableCell>
            <TableCell class="font-medium text-gray-800">INV001</TableCell>
            <TableCell class="font-medium text-gray-800">INV001</TableCell>

          </TableRow>
          <TableRow class="hover:bg-blue-50 transition-colors duration-200">
            <TableCell class="font-medium text-gray-800"><Checkbox></Checkbox></TableCell>
            <TableCell class="font-medium text-gray-800">INV001</TableCell>
            <TableCell class="font-medium text-gray-800">INV001</TableCell>
            <TableCell class="font-medium text-gray-800">INV001</TableCell>
            <TableCell class="font-medium text-gray-800">INV001</TableCell>
            <TableCell class="font-medium text-gray-800">INV001</TableCell>
            <TableCell class="font-medium text-gray-800">INV001</TableCell>
            <TableCell class="font-medium text-gray-800">INV001</TableCell>

          </TableRow>



        </TableBody>
      </Table>
      </div>
      <!-- ------- data table code starat here - -->
        
        
    </AppLayout>
</template>
