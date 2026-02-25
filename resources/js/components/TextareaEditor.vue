<script setup lang="ts">
import { watch } from 'vue'
import { EditorContent, useEditor } from '@tiptap/vue-3'
import StarterKit from '@tiptap/starter-kit'

const props = defineProps({
  modelValue: String,
  height: {
    type: String,
    default: '250px'
  }
})

const emit = defineEmits(['update:modelValue'])

const editor = useEditor({
  extensions: [StarterKit],
  content: props.modelValue,
  editorProps: {
    attributes: {
      class: 'prose max-w-none focus:outline-none'
    }
  },
  onUpdate: ({ editor }) => {
    emit('update:modelValue', editor.getHTML())
  }
})

watch(() => props.modelValue, value => {
  if (editor.value && value !== editor.value.getHTML()) {
    editor.value.commands.setContent(value || '')
  }
})
</script>

<template>
  <div class="editor" :style="{ minHeight: height }">
    <EditorContent :editor="editor"/>
  </div>
</template>