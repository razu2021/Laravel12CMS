<script setup>
import { ref, onBeforeUnmount } from 'vue'
import { EditorContent, useEditor } from '@tiptap/vue-3'
import StarterKit from '@tiptap/starter-kit'
import Link from '@tiptap/extension-link'
import  ImageResizer  from 'tiptap-extension-resize-image'
import TextAlign from '@tiptap/extension-text-align'
import Underline from '@tiptap/extension-underline'

import { Table } from '@tiptap/extension-table'
import { TableRow } from '@tiptap/extension-table-row'
import { TableCell } from '@tiptap/extension-table-cell'
import { TableHeader } from '@tiptap/extension-table-header'
import { Color } from '@tiptap/extension-color'
import { TextStyle } from '@tiptap/extension-text-style'
import { Highlight } from '@tiptap/extension-highlight'
// Editor Setup
const editor = useEditor({
  extensions: [
    StarterKit,
    Underline,
    Color,
    TextStyle,
    Highlight.configure({ 
      multicolor: true // Background color support korar jonno
    }),
    TextAlign.configure({
      types: ['heading', 'paragraph'],
    }),
    Link.configure({
      openOnClick: false,
      HTMLAttributes: {
        class: 'text-blue-600 underline cursor-pointer',
      },
    }),


  ImageResizer.configure({
      inline: true,
  allowBase64: true,
  // Boundary constraints add korun
  minWidth: 50,      // Ekdom choto koto hobe
  maxWidth: '100%',  // Editor-er baire jabe na
  maxHeight: 800,    // Boro height limit
    }),


  // ------ table extention 
  Table.configure({
      resizable: true, 
      allowTableNodeSelection: true,
    }),
  TableRow,
  TableHeader,
  TableCell,


  ],
  editorProps: {
    attributes: {
      class: 'prose prose-slate max-w-none focus:outline-none min-h-[400px] p-5',
    },
  },
  content: `
    <h2>Welcome to Simple Tiptap Editor!</h2>
    <p>You can format your text <strong>bold</strong>, <em>italic</em>, or <u>underline</u>.</p>
  `,
})

onBeforeUnmount(() => {
  if (editor.value) editor.value.destroy()
})

// --- Link Logic ---
const isLinkModalOpen = ref(false)
const linkUrl = ref('')

const openLinkModal = () => {
  const previousUrl = editor.value.getAttributes('link').href
  linkUrl.value = previousUrl || ''
  isLinkModalOpen.value = true
}

const setLink = () => {
  if (linkUrl.value === '') {
    editor.value.chain().focus().extendMarkRange('link').unsetLink().run()
  } else {
    editor.value.chain().focus().extendMarkRange('link').setLink({ href: linkUrl.value }).run()
  }
  isLinkModalOpen.value = false
}

// --- Image Logic ---
const isImageModalOpen = ref(false)
const imageUrl = ref('')

const openImageModal = () => {
  imageUrl.value = ''
  isImageModalOpen.value = true
}

const addImage = () => {
  if (imageUrl.value) {
    editor.value.chain().focus().setImage({ src: imageUrl.value }).run()
  }
  isImageModalOpen.value = false
}
</script>

<template>
  <div class="editor-wrapper mt-1 w-full rounded-xl border border-slate-300 bg-white text-sm">
    <div v-if="editor" class="toolbar p-2 border-b border-slate-200 flex flex-wrap gap-1 bg-slate-50 rounded-t-xl">
      <button type="button" @click="editor.chain().focus().undo().run()">Undo</button>
      <button type="button" @click="editor.chain().focus().redo().run()">Redo</button>
      <div class="w-px h-6 bg-slate-300 mx-1"></div>
      
      <button type="button" @click="editor.chain().focus().setParagraph().run()" :class="{ 'active': editor.isActive('paragraph') }">P</button>
      <button type="button" v-for="i in 3" :key="i" @click="editor.chain().focus().toggleHeading({ level: i }).run()" :class="{ 'active': editor.isActive('heading', { level: i }) }">
        H{{ i }}
      </button>

      <div class="w-px h-6 bg-slate-300 mx-1"></div>

      <button type="button" @click="editor.chain().focus().toggleBold().run()" :class="{ 'active': editor.isActive('bold') }">Bold</button>
      <button type="button" @click="editor.chain().focus().toggleItalic().run()" :class="{ 'active': editor.isActive('italic') }">Italic</button>
      <button type="button" @click="editor.chain().focus().toggleUnderline().run()" :class="{ 'active': editor.isActive('underline') }">U</button>
      <button type="button" @click="editor.chain().focus().toggleStrike().run()" :class="{ 'active': editor.isActive('strike') }">Strike</button>

      <div class="w-px h-6 bg-slate-300 mx-1"></div>

      <button type="button" @click="editor.chain().focus().setTextAlign('left').run()" :class="{ 'active': editor.isActive({ textAlign: 'left' }) }">Left</button>
      <button type="button" @click="editor.chain().focus().setTextAlign('center').run()" :class="{ 'active': editor.isActive({ textAlign: 'center' }) }">Center</button>
      <button type="button" @click="editor.chain().focus().setTextAlign('right').run()" :class="{ 'active': editor.isActive({ textAlign: 'right' }) }">Right</button>

      <div class="w-px h-6 bg-slate-300 mx-1"></div>

      <button type="button" @click="editor.chain().focus().toggleBulletList().run()" :class="{ 'active': editor.isActive('bulletList') }">Bullet</button>
      <button type="button" @click="editor.chain().focus().toggleOrderedList().run()" :class="{ 'active': editor.isActive('orderedList') }">Ordered</button>
      <button type="button" @click="editor.chain().focus().toggleBlockquote().run()" :class="{ 'active': editor.isActive('blockquote') }">Quote</button>
      
      <div class="w-px h-6 bg-slate-300 mx-1"></div>

      <button type="button" @click="openLinkModal" :class="{ 'active': editor.isActive('link') }">Link 🔗</button>
      <button type="button" @click="openImageModal">Image 🖼️</button>


      <button 
        type="button" 
        @click="editor.chain().focus().insertTable({ rows: 3, cols: 3, withHeaderRow: true }).run()"
        class="p-2 border rounded hover:bg-slate-200">
        Insert Table ➕
      </button>

      <div v-if="editor && editor.isActive('table')" class="table-controls flex gap-2 mt-2 p-2 bg-blue-50 rounded-lg">
        <button type="button" @click="editor.chain().focus().addColumnAfter().run()" class="px-2 py-1 border bg-white">Add Col Right</button>
        <button type="button" @click="editor.chain().focus().addRowAfter().run()" class="px-2 py-1 border bg-white">Add Row Down</button>
        <button type="button" @click="editor.chain().focus().deleteColumn().run()" class="px-2 py-1 border bg-white text-red-500">Del Col</button>
        <button type="button" @click="editor.chain().focus().deleteRow().run()" class="px-2 py-1 border bg-white text-red-500">Del Row</button>
        <button type="button" @click="editor.chain().focus().deleteTable().run()" class="px-2 py-1 border bg-red-500 text-white">Delete Table</button>
      </div>

      <!-- color -->
   <div v-if="editor" class="flex items-center gap-2">
  <input 
    type="color" 
    @input="editor.chain().focus().setColor($event.target.value).run()"
    :value="editor.getAttributes('textStyle').color || '#000000'"
    title="Change Text Color"
  />

  <input 
    type="color" 
    @input="editor.chain().focus().toggleHighlight({ color: $event.target.value }).run()"
    :value="editor.getAttributes('highlight').color || '#ffff00'"
    title="Change Background Color"
  />

  <button 
    type="button" 
    @click="editor.chain().focus().unsetColor().unsetHighlight().run()" 
    class="p-1 border rounded text-xs bg-gray-100 hover:bg-gray-200">
    Reset Colors
  </button>
</div>
    </div>



    <EditorContent :editor="editor" class="editor-content prose lg:prose-xl overflow-hidden" />










    <div v-if="isLinkModalOpen" class="fixed inset-0 z-[100] flex items-center justify-center bg-black/50">
      <div class="bg-white p-6 rounded-xl shadow-xl w-96">
        <h3 class="text-lg font-bold mb-4">Insert Link</h3>
        <input v-model="linkUrl" type="url" class="w-full px-4 py-2 border rounded-lg mb-4 outline-none focus:ring-2 focus:ring-blue-500" placeholder="https://..." @keyup.enter="setLink" />
        <div class="flex justify-end gap-2">
          <button @click="isLinkModalOpen = false" class="px-4 py-2 text-gray-600">Cancel</button>
          <button @click="setLink" class="px-4 py-2 bg-blue-600 text-white rounded-lg">Apply</button>
        </div>
      </div>
    </div>

    <div v-if="isImageModalOpen" class="fixed inset-0 z-[100] flex items-center justify-center bg-black/50">
      <div class="bg-white p-6 rounded-xl shadow-xl w-96">
        <h3 class="text-lg font-bold mb-4">Insert Image URL</h3>
        <input v-model="imageUrl" type="text" class="w-full px-4 py-2 border rounded-lg mb-4 outline-none focus:ring-2 focus:ring-blue-500" placeholder="https://image-url.jpg" @keyup.enter="addImage" />
        <div class="flex justify-end gap-2">
          <button @click="isImageModalOpen = false" class="px-4 py-2 text-gray-600">Cancel</button>
          <button @click="addImage" class="px-4 py-2 bg-green-600 text-white rounded-lg">Add Image</button>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
.toolbar button {
  padding: 4px 8px;
  border-radius: 4px;
  border: 1px solid transparent;
  background: transparent;
  cursor: pointer;
  font-weight: 500;
  transition: all 0.2s;
}

.toolbar button:hover {
  background: #e2e8f0;
}

.toolbar button.active {
  background: #3b82f6;
  color: white;
}

:deep(.ProseMirror) {
  outline: none !important;
  min-height: 400px;
}

/* --- Image Resize Handles Styling --- */
/* Image Resizer Container */
:deep(.ProseMirror .image-resizer) {
  display: inline-block;
  position: relative;
  line-height: 0;
}

/* Resize Handles (The Dots) */
:deep(.ProseMirror .image-resizer__handler) {
  position: absolute;
  width: 12px;
  height: 12px;
  background-color: #3b82f6 !important; /* Blue Color */
  border: 1.5px solid white !important;
  border-radius: 2px;
  z-index: 100;
  cursor: nwse-resize;
}

/* Dot Position - Bottom Right */
:deep(.ProseMirror .image-resizer__handler--bottom-right) {
  bottom: -6px;
  right: -6px;
}
/* Image-ke editor-er bhetore rakhar main trick */
:deep(.ProseMirror img) {
  max-width: 100% !important; /* Screen-er baire jabe na */
  height: auto !important;    /* Aspect ratio thik rakhbe */
  display: block;
  margin: 1rem auto;          /* Majhkhan-e thakbe */
}

/* Resize container-keo 100% width-e rakha */
:deep(.ProseMirror .image-resizer) {
  max-width: 100% !important;
  display: inline-block;
  position: relative;
}
/* Image outline when selected or resizing */
:deep(.ProseMirror .image-resizer img) {
  outline: 1px solid transparent;
  transition: outline 0.2s;
}

:deep(.ProseMirror .image-resizer--resizing img) {
  outline: 2px solid #3b82f6 !important;
}
/* Alignment classes jodi TextAlign use koren */
:deep(.ProseMirror img[data-text-align="left"]) {
  margin-right: auto;
  margin-left: 0;
}
:deep(.ProseMirror img[data-text-align="center"]) {
  margin-left: auto;
  margin-right: auto;
}
:deep(.ProseMirror img[data-text-align="right"]) {
  margin-left: auto;
  margin-right: 0;
}


/* ====== table css ====== */
/* Table Layout and Borders */
:deep(.ProseMirror table) {
  border-collapse: collapse;
  table-layout: fixed;
  width: 100%;
  margin: 1rem 0;
  overflow: hidden;
}

:deep(.ProseMirror td),
:deep(.ProseMirror th) {
  min-width: 1em;
  border: 1px solid #ced4da; /* Border thickness barate paren */
  padding: 8px 10px;
  vertical-align: top;
  box-sizing: border-box;
  position: relative;
}

:deep(.ProseMirror th) {
  font-weight: bold;
  text-align: left;
  background-color: #f1f5f9;
}
/* ----- color ------ */
input[type="color"]::-webkit-color-swatch-wrapper {
  padding: 0;
}
input[type="color"]::-webkit-color-swatch {
  border: 1px solid #ddd;
  border-radius: 4px;
}

/* Highlight style editor-er bhitore */
:deep(.ProseMirror mark) {
  padding: 0 2px;
  border-radius: 2px;
}
</style>