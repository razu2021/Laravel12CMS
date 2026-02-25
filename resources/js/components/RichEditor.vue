<script setup lang="ts">
import Editor from '@tinymce/tinymce-vue'

const props = defineProps({
  modelValue: {
    type: String,
    default: ''
  },
  height: {
    type: Number,
    default: 400
  }
})

const emit = defineEmits(['update:modelValue'])
</script>

<template>
<Editor
  :model-value="modelValue"
  @update:modelValue="emit('update:modelValue', $event)"
  :init="{
    base_url: '/tinymce',
    suffix: '.min',

    height: height,
    menubar: true,
    branding: false,

    plugins: [
      'lists','link','image','table','code','wordcount'
    ],

    toolbar:
      'undo redo | formatselect | bold italic underline | ' +
      'alignleft aligncenter alignright | ' +
      'bullist numlist | link image | code'
  }"
/>
</template>