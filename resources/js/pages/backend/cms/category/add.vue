<script setup lang="ts">
import Button from '@/components/ui/button/Button.vue'
import AppLayout from '@/layouts/AppLayout.vue'
import { category_page_add } from '@/routes'
import { type BreadcrumbItem } from '@/types'
import { Head, Link, useForm, useRemember } from '@inertiajs/vue3'
import { route } from 'ziggy-js'
import AdminLayout from '@/layouts/AdminLayout.vue'

const breadcrumbs: BreadcrumbItem[] = [
  {
    title: 'create page',
    href: category_page_add().url,
  },
]

// ✅ remember data
const rememberedData = useRemember(
  {
    name: '',
    title: '',
    description: '',
    slug: '',
    order: '',
    public_status: false,
  },
  'category-page-form'
)

// ✅ wrap remembered data with useForm
const form = useForm(rememberedData.value)


// ✅ submit MUST use form
const handleSubmit = () => {
  form.post(route('category_page_submit'), {
    onSuccess: () => {
      form.reset()
      form.forget()
    },
  })
}
</script>


<template>
    <Head title="Dashboard" />

    
       
<AdminLayout>


  <!-- PAGE WRAPPER -->
<div class="container  mx-auto my-10 px-4">

  <!-- PAGE WRAPPER -->
  <div class="grid grid-cols-12 gap-8">

    <!-- ================= TOP HEADER ================= -->
    <div class="col-span-12">
      <div class="flex items-center justify-between rounded-2xl bg-gradient-to-r from-slate-900 to-slate-800 px-6 py-4 text-white shadow-lg">
        <div>
          <h1 class="text-lg font-semibold">Create New Entry</h1>
          <p class="text-xs text-slate-300">Fill in the details below</p>
        </div>

       
        <button
          class="rounded-lg bg-white/10 px-4 py-2 text-sm font-medium backdrop-blur hover:bg-white/20 transition">
          <Link :href="route('category_page_all')">All Information</Link>
        </button>
      </div>
    </div>

    <!-- ================= MAIN FORM (8 COL) ================= -->
    <div class="col-span-12 lg:col-span-8">
      <div class="rounded-2xl bg-white p-6 shadow-[0_10px_30px_rgba(0,0,0,0.06)] space-y-6">

        <div class="border-b pb-4">
          <h2 class="text-base font-semibold text-slate-800">Basic Information</h2>
          <p class="text-sm text-slate-500">Main content related data</p>
        </div>

        <form @submit.prevent="handleSubmit" class="space-y-5">
          <div>
            <label class="text-sm font-medium text-slate-600">Name</label>
            <input type="text" placeholder="Enter title" v-model="form.name"
              class="mt-1 w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-2.5 text-sm focus:border-indigo-500 focus:bg-white focus:ring-indigo-500">
              <div class="text-small text-red-500" v-if="form.errors.name">{{ form.errors.name }}</div>
          </div>
            <!-- end -->
          <div>
            <label class="text-sm font-medium text-slate-600">Meta Title</label>
            <input type="text" placeholder="Enter title" v-model="form.title"
              class="mt-1 w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-2.5 text-sm focus:border-indigo-500 focus:bg-white focus:ring-indigo-500">
              <div class="text-small text-red-500" v-if="form.errors.title">{{ form.errors.title }}</div>
          </div>
            <!-- end -->

          <div>
            <label class="text-sm font-medium text-slate-600">Meta Description</label>
            <textarea
              rows="5"
              placeholder="Write something meaningful..." v-model="form.description"
              class="mt-1 w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm focus:border-indigo-500 focus:bg-white focus:ring-indigo-500"></textarea>
            <div class="text-small text-red-500" v-if="form.errors.description">{{ form.errors.description }}</div>
            </div>
          <div>
            <Button type="submit" :disabled="form.processing">{{ form.processing ? 'Saving...' : 'Submit' }}</Button>
          </div>
        </form>

      </div>
    </div>

    <!-- ================= RIGHT SETTINGS (4 COL) ================= -->
    <div class="col-span-12 lg:col-span-4">
      <div class="space-y-6">

        <!-- STATUS CARD -->
        <div class="rounded-2xl bg-white p-5 shadow-[0_10px_30px_rgba(0,0,0,0.06)]">
          <h3 class="text-sm font-semibold text-slate-800 mb-4">
            Publish Settings
          </h3>

          <label class="flex items-center justify-between rounded-xl border border-slate-200 bg-slate-50 px-4 py-3">
            <span class="text-sm text-slate-600">Active Status</span>
            <input type="checkbox" v-model="form.public_status"
              class="h-5 w-5 rounded border-slate-300 text-indigo-600 focus:ring-indigo-500">
          </label>
        </div>
        <!-- STATUS CARD -->
        <div class="rounded-2xl bg-slet p-5 shadow-[0_10px_30px_rgba(0,0,0,0.06)]">
          <h3 class="text-sm font-semibold mb-3">
            Actions
          </h3>
          <div>
            <label class="text-sm font-medium text-slate-600">Slug </label>
            <input type="text" placeholder="Enter title" v-model="form.slug"
              class="mt-1 w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-2.5 text-sm focus:border-indigo-500 focus:bg-white focus:ring-indigo-500">
              <div class="text-small text-red-500" v-if="form.errors.slug">{{ form.errors.slug }}</div>
          </div>
          <!-- end -->
          <div>
            <label class="text-sm font-medium text-slate-600">Order  </label>
            <input type="number" placeholder="Enter title" v-model="form.order"
              class="mt-1 w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-2.5 text-sm focus:border-indigo-500 focus:bg-white focus:ring-indigo-500">
              <div class="text-small text-red-500" v-if="form.errors.order">{{ form.errors.order }}</div>
          </div>
          <!-- end -->
        </div>
      </div>
    </div>

  </div>
</div>







</AdminLayout>
</template>
