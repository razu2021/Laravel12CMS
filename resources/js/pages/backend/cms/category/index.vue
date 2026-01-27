<script setup lang="ts">
import Button from '@/components/ui/button/Button.vue';
import {
  DropdownMenu,
  DropdownMenuContent,
  DropdownMenuItem,
  DropdownMenuLabel,
  DropdownMenuSeparator,
  DropdownMenuTrigger,
} from '@/components/ui/dropdown-menu'
import AppLayout from '@/layouts/AppLayout.vue';
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

//---  share data 

// const page = usePage()

// const category  = page.props.alldata 


defineProps({
    alldata:Array
})

</script>

<template>
    <Head title="Dashboard" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="flex h-full  flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4">

            <!-- data table  -->
            <div class="container mx-auto">
  
                    <div class="bg-white rounded-2xl shadow border border-gray-200 overflow-hidden">

                  <!-- TABLE HEADER -->
                  <div class="px-6 py-4 border-b bg-gray-50">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                      
                      <!-- Title -->
                      <div>
                        <h2 class="text-lg font-semibold text-gray-800">User List</h2>
                        <p class="text-sm text-gray-500">Manage all users information</p>
                      </div>

                      <!-- Search & Filter -->
                      <div class="flex gap-2">
                        <input
                          type="text"
                          placeholder="Search..."
                          class="w-full md:w-64 px-4 py-2 text-sm border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        />

                        <select
                          class="px-3 py-2 text-sm border rounded-lg bg-white focus:outline-none focus:ring-2 focus:ring-blue-500"
                        >
                          <option>All</option>
                          <option>Active</option>
                          <option>Inactive</option>
                        </select>
                      </div>

                    </div>
                  </div>

                  <!-- TABLE BODY -->
                  <div class="overflow-x-auto">
                    <table class="min-w-full text-sm">
                      <thead class="bg-gray-100 text-gray-600 uppercase text-xs">
                        <tr>
                          <th class="px-6 py-3 text-left">ID</th>
                          <th class="px-6 py-3 text-left">Category</th>
                          <th class="px-6 py-3 text-left">Slug</th>
                          <th class="px-6 py-3 text-left">Meta Title</th>
                          <th class="px-6 py-3 text-left">Meta Description</th>
                          <th class="px-6 py-3 text-center">Status</th>
                          <th class="px-6 py-3 text-right">Action</th>
                        </tr>
                      </thead>

                      <tbody class="divide-y">
                        <tr class="hover:bg-gray-50 transition" v-for="data in alldata">
                          <td class="px-6 py-4">1</td>
                          <td class="px-6 py-4 font-medium text-gray-800">{{ data.name }}</td>
                          <td class="px-6 py-4 text-gray-500">{{ data.url }}</td>
                          <td class="px-6 py-4 text-gray-500">{{ data.title }}</td>
                          <td class="px-6 py-4 text-gray-500">{{ data.desciption  }}</td>
                          <td class="px-6 py-4 text-center">
                            <span class="px-3 py-1 text-xs rounded-full bg-green-100 text-green-700">
                              Active
                            </span>
                          </td>
                          <td class="px-6 py-4 text-right space-x-2">
                            <Button>
                                <DropdownMenu> 
                                    <DropdownMenuTrigger> Manage</DropdownMenuTrigger>
                                    <DropdownMenuContent>
                                        <Link href="#"><DropdownMenuLabel> Edit</DropdownMenuLabel></Link>
                                        <Link :href="route('category_page_view', {id: data.id , slug: data.slug ?? ''} )"><DropdownMenuLabel> View</DropdownMenuLabel></Link>
                                        <Link href="#"><DropdownMenuLabel> Delete</DropdownMenuLabel></Link>
                                        <DropdownMenuSeparator></DropdownMenuSeparator>
                                        <Link href="#"><DropdownMenuLabel> Edit</DropdownMenuLabel></Link>
                                    </DropdownMenuContent>
                                </DropdownMenu>
                            </Button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <!-- TABLE FOOTER / PAGINATION -->
                  <div class="px-6 py-4 border-t bg-gray-50">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">

                      <!-- Info -->
                      <p class="text-sm text-gray-500">
                        Showing <span class="font-medium">1</span> to
                        <span class="font-medium">10</span> of
                        <span class="font-medium">50</span> results
                      </p>

                      <!-- Pagination -->
                      <div class="flex items-center gap-1">
                        <button class="px-3 py-2 text-sm border rounded-lg hover:bg-gray-100">
                          Prev
                        </button>

                        <button class="px-3 py-2 text-sm rounded-lg bg-blue-600 text-white">
                          1
                        </button>
                        <button class="px-3 py-2 text-sm border rounded-lg hover:bg-gray-100">
                          2
                        </button>
                        <button class="px-3 py-2 text-sm border rounded-lg hover:bg-gray-100">
                          3
                        </button>

                        <button class="px-3 py-2 text-sm border rounded-lg hover:bg-gray-100">
                          Next
                        </button>
                      </div>

                    </div>
                  </div>

                </div>

            </div>


        </div>


        <!-- ------- data table code starat here - -->
        
        




    </AppLayout>
</template>
