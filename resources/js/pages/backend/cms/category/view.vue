<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { category_page_view, dashboard } from '@/routes';
import { type BreadcrumbItem } from '@/types';
import { Head, Link, usePage } from '@inertiajs/vue3';
import Button from '@/components/ui/button/Button.vue';
import { Card ,CardHeader,CardTitle ,CardDescription,CardContent,CardFooter} from '@/components/ui/card';
import {
  Table,
  TableBody,
  TableCaption,
  TableCell,
  TableFooter,
  TableHead,
  TableHeader,
  TableRow,
} from '@/components/ui/table'
import Separator from '@/components/ui/separator/Separator.vue';


const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Details page',
        href: category_page_view().url,
    },
];



</script>



<template>
   <Head title="Details Page"></Head>

<AppLayout :breadcrumbs="breadcrumbs">
       
<div class="container mx-auto mt-10 max-w-6xl space-y-8">

  <!-- PAGE HEADER -->
  <div>
    <h1 class="text-3xl font-semibold tracking-tight">
      Category Details
    </h1>
    <p class="text-muted-foreground mt-1">
      Complete overview of selected category
    </p>
  </div>

  <!-- MAIN CARD -->
  <Card class="rounded-2xl border shadow-sm">

    <!-- TOP BAR -->
    <CardHeader class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">
      <div>
        <CardTitle class="text-xl">
          Web Development
        </CardTitle>
        <CardDescription>
          Slug: <span class="font-mono">web-development</span>
        </CardDescription>
      </div>

      <span class="inline-flex items-center gap-2 rounded-full bg-emerald-100 px-4 py-2 text-sm font-medium text-emerald-700">
        <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
        Active
      </span>
    </CardHeader>

    <Separator />

    <!-- DETAILS GRID -->
    <CardContent class="p-8">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <!-- INFO ITEM -->
        <div class="rounded-xl border p-6 hover:shadow-md transition">
          <p class="text-sm text-muted-foreground mb-1">Category ID</p>
          <p class="text-lg font-semibold">#12</p>
        </div>

        <div class="rounded-xl border p-6 hover:shadow-md transition">
          <p class="text-sm text-muted-foreground mb-1">Name</p>
          <p class="text-lg font-semibold">Web Development</p>
        </div>

        <div class="rounded-xl border p-6 hover:shadow-md transition">
          <p class="text-sm text-muted-foreground mb-1">Created At</p>
          <p class="text-base">12 January 2026</p>
        </div>

        <div class="rounded-xl border p-6 hover:shadow-md transition">
          <p class="text-sm text-muted-foreground mb-1">Updated At</p>
          <p class="text-base">20 January 2026</p>
        </div>

      </div>

      <!-- DESCRIPTION -->
      <div class="mt-8">
        <p class="text-sm text-muted-foreground mb-2">
          Description
        </p>
        <div class="rounded-xl border bg-muted/30 p-6 leading-relaxed">
          This category helps organize all web development related content
          including frontend, backend, frameworks, APIs, and full-stack
          resources in a structured and scalable way.
        </div>
      </div>
    </CardContent>

    <Separator />

    <!-- FOOTER -->
    <CardFooter class="flex justify-between px-8 py-6">
      <Button variant="outline">
        ← Back
      </Button>
      <Button>
        Edit Category
      </Button>
    </CardFooter>

  </Card>

</div>


</AppLayout>
</template>




