<template>
  <div>
    <label v-if="label" class="mb-1 block font-semibold">
      {{ label }}
    </label>

    <Ckeditor
      :editor="ClassicEditor"
      :model-value="content"
      @update:model-value="val => content = val"
      :config="editorConfig"
    />
  </div>
</template>

<script setup>
import { ref, watch } from 'vue'

// ✅ CKEditor Vue wrapper
import { Ckeditor } from '@ckeditor/ckeditor5-vue'

// ✅ Classic build
import ClassicEditor from '@ckeditor/ckeditor5-build-classic'

// Props & Emits
const props = defineProps({
  modelValue: String,
  label: String
})
const emit = defineEmits(['update:modelValue'])

// Reactive content synced with parent
const content = ref(props.modelValue || '')

watch(() => props.modelValue, val => {
  content.value = val
})
watch(content, val => emit('update:modelValue', val))

// Editor configuration
const editorConfig = {
  licenseKey: 'GPL',

  toolbar: {
    items: [
      'undo','redo','|',
      'heading','|',
      'fontFamily','fontSize','fontColor','fontBackgroundColor','|',
      'bold','italic','underline','strikethrough','|',
      'alignment','|',
      'numberedList','bulletedList','outdent','indent','|',
      'link','blockQuote','insertTable','mediaEmbed','|',
      'imageUpload','imageInsert','|',
      'codeBlock'
    ]
  },

  heading: {
    options: [
      { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
      { model: 'heading1', view: 'h1', title: 'Heading 1' },
      { model: 'heading2', view: 'h2', title: 'Heading 2' },
      { model: 'heading3', view: 'h3', title: 'Heading 3' },
      { model: 'heading4', view: 'h4', title: 'Heading 4' }
    ]
  },

  fontSize: {
    options: [10,12,14,'default',18,20,24,28,32,36],
    supportAllValues: true
  },

  fontFamily: {
    options: [
      'default',
      'Arial, Helvetica, sans-serif',
      'Courier New, Courier, monospace',
      'Georgia, serif',
      'Lucida Sans Unicode, Lucida Grande, sans-serif',
      'Tahoma, Geneva, sans-serif',
      'Times New Roman, Times, serif',
      'Trebuchet MS, Helvetica, sans-serif',
      'Verdana, Geneva, sans-serif'
    ],
    supportAllValues: true
  },

  image: {
    toolbar: [
      'imageTextAlternative',
      'imageStyle:inline',
      'imageStyle:block',
      'imageStyle:side'
    ]
  },

  table: {
    contentToolbar: [
      'tableColumn',
      'tableRow',
      'mergeTableCells'
    ]
  },

  link: {
    addTargetToExternalLinks: true,
    defaultProtocol: 'https://'
  },

  mediaEmbed: {
    previewsInData: true
  }
}
</script>

<style>
.ck-editor__editable {
  min-height: 250px;
}
</style>