<script setup lang="ts">
import Button from '@/components/ui/button/Button.vue'
import AdminLayout from '@/layouts/AdminLayout.vue'
import { Head, Link, useForm } from '@inertiajs/vue3'
import { Section } from 'lucide-vue-next';
import { route } from 'ziggy-js'

const props= defineProps<{
    data: {
        order: number,
        section_heading: string,
        section_title: string,
        description: string,

        page_type:string,
        section_key:string,

        //-------------
        public_status: boolean,
        id: number,
        category_id: number,
        slug: string,
    },
    allcategory : any[]
}>()

// ✅ remember data
const form  = useForm(
  {
    id: props.data.id,
    section_heading: props.data.section_heading,
    category_id : props.data.category_id,
    section_title: props.data.section_title,
    description: props.data.description,
    order: props.data.order,
    public_status : Boolean(props.data.public_status),
    slug :props.data.slug,

    page_type:'',
    section_key:props.data.section_key,

  })

// ✅ wrap remembered data with useForm


// ✅ submit MUST use form
const handleUpdate = () => {
  form.patch(route('page_section.update'))
  
}
</script>


<template>
    <Head title="Update Informations" />

    <AdminLayout>

       <form @submit.prevent="handleUpdate" class="space-y-5">



  <!-- PAGE WRAPPER -->
<div class="container  mx-auto my-10 px-4">

  <!-- PAGE WRAPPER -->
  <div class="grid grid-cols-12 gap-8">

            <!-- ================= TOP HEADER ================= -->
            <div class="col-span-12">
            <div class="flex items-center justify-between rounded-2xl bg-gradient-to-r from-slate-900 to-slate-800 px-6 py-4 text-white shadow-lg">
                <div>
                <h1 class="text-lg font-semibold">Would you like update The Record ? </h1>
                <p class="text-xs text-slate-300">Fill in the details below</p>
                </div>

            
                <button
                class="rounded-lg bg-white/10 px-4 py-2 text-sm font-medium backdrop-blur hover:bg-white/20 transition">
                <Link :href="route('page_section.all')">All Information</Link>
                </button>
            </div>
            </div>

            <!-- ================= MAIN FORM (8 COL) ================= -->
            <div class="col-span-12 lg:col-span-8">
            <div class="rounded-2xl bg-white p-6 shadow-[0_10px_30px_rgba(0,0,0,0.06)] space-y-6">

                <div class="border-b pb-4">
                <h2 class="text-base font-semibold text-slate-800">Update Information</h2>
                <p class="text-sm text-slate-500">Update Infromation below</p>
                </div>

                
                <div>
                    <input type="hidden"  v-model="form.id">
                    <input type="hidden"  v-model="form.slug">
                </div>
                <!-- end -->

             <!-- Page Type -->
            <select required v-model="form.page_type" class="block w-full rounded-xl border border-slate-300 bg-white px-4 py-2.5 text-sm text-slate-700 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:outline-none transition-colors duration-200">
              <option value="">-- Select Page Type --</option>
              <option value="category_page">Category</option>
              <option value="subcategory_page">Sub Category</option>
              <option value="childcategory_page">Child Category</option>
            </select>



            <!--  -->
            <select required v-model="form.section_key" key="form.id" class="block w-full rounded-xl border border-slate-300 bg-white px-4 py-2.5 text-sm text-slate-700 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:outline-none transition-colors duration-200">
          
               <option value="">-- Select Section --</option>

                <option value="hero">Hero</option>
                <option value="breadcrumb">Breadcrumb</option>
                <option value="about">About</option>
                <option value="testimonial">Testimonial</option>
                <option value="faq">FAQ</option>
                <option value="banner">Banner</option>
            </select>







                <div class="mb-4">
                <label for="category" class="block text-sm font-medium text-slate-700 mb-1" >Select Category Name</label>

                <select id="category" v-model="form.category_id" required class="block w-full rounded-xl border border-slate-300 bg-white px-4 py-2.5 text-sm text-slate-700 focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:outline-none transition-colors duration-200">
                  <option value="">-- Select Category --</option>
                  <option v-for="item in props.allcategory" :key="item.id" :value="item.id">
                    {{ item.name }}
                  </option>
                </select>
                <p v-if="form.errors.category_id"class="mt-1 text-sm text-red-500"> {{ form.errors.category_id }}</p>
              </div>
              <!-- end -->
                <div>
                    <label class="text-sm font-medium text-slate-600">Name</label>
                    <input type="text" placeholder="Enter title" v-model="form.section_heading"
                    class="mt-1 w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-2.5 text-sm focus:border-indigo-500 focus:bg-white focus:ring-indigo-500">
                    <div class="text-small text-red-500" v-if="form.errors.section_heading">{{ form.errors.section_heading }}</div>
                </div>
                    <!-- end -->
                <div>
                    <label class="text-sm font-medium text-slate-600">Meta Title</label>
                    <input type="text" placeholder="Enter title" v-model="form.section_title"
                    class="mt-1 w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-2.5 text-sm focus:border-indigo-500 focus:bg-white focus:ring-indigo-500">
                    <div class="text-small text-red-500" v-if="form.errors.section_title">{{ form.errors.section_title }}</div>
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
               
                <!-- end -->
                <div>
                    <label class="text-sm font-medium text-slate-600">Order  </label>
                    <input type="number" placeholder="Enter title" v-model="form.order"
                    class="mt-1 w-full rounded-xl border border-slate-200 bg-slate-50 px-4 py-2.5 text-sm focus:border-indigo-500 focus:bg-white focus:ring-indigo-500">
                    <div class="text-small text-red-500" v-if="form.errors.order">{{ form.errors.order }}</div>
                </div>
                <!-- end -->
                </div>
                <div class="rounded-2xl bg-slet p-5 shadow-[0_10px_30px_rgba(0,0,0,0.06)]">
                <div class="mt-4">
                    <Button class="w-full" type="submit" :disabled="form.processing">{{ form.processing ? 'Saving...' : 'Save Changes' }}</Button>
                </div>
                </div>


            </div>
            </div>

        </div>
        </div>

</form>
   </AdminLayout>
</template>
