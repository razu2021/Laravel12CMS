<script setup>
import { ref, onBeforeUnmount } from 'vue'
import { Editor, EditorContent, useEditor } from '@tiptap/vue-3'
import StarterKit from '@tiptap/starter-kit'



// editor instance
const editor = useEditor({
  extensions: [
    StarterKit,
   
  ],
  content: `
    <h2>Welcome to Simple Tiptap Editor!</h2>
    <p>You can format your text <strong>bold</strong>, <em>italic</em>, or <u>underline</u>.</p>
    <ul>
      <li>Bullet list item</li>
      <li>Another item</li>
    </ul>
    <h1>Heading 1</h1>
    <h2>Heading 2</h2>
    <pre><code>const x = 10;</code></pre>
    <blockquote>This is a blockquote example.</blockquote>
  `,
})

// destroy editor on unmount
onBeforeUnmount(() => {
  if (editor.value) editor.value.destroy()
})
</script>

<template>
  <div class="editor-wrapper">
    <!-- Toolbar -->
    <div class="toolbar">
      <button @click="editor.chain().focus().toggleBold().run()">B</button>
 
    </div>

    <!-- Editor Content -->
    <EditorContent :editor="editor" class="editor-content" />
  </div>
</template>

<style scoped>
.editor-wrapper {
  max-width: 900px;
  margin: 30px auto;
  font-family: 'Segoe UI', sans-serif;
}

.toolbar {
  display: flex;
  flex-wrap: wrap;
  gap: 6px;
  margin-bottom: 10px;
}

.toolbar button {
  padding: 6px 10px;
  border: 1px solid #ddd;
  background: #f9f9f9;
  border-radius: 5px;
  cursor: pointer;
  transition: 0.2s;
}
.toolbar button:hover {
  background: #eee;
}
.toolbar button.active {
  background: #3b82f6;
  color: white;
  border-color: #3b82f6;
}

.editor-content .ProseMirror {
  min-height: 400px;
  outline: none;
  font-size: 16px;
  line-height: 1.6;
  padding: 20px;
  border: 1px solid #ddd;
  border-radius: 8px;
  background: #fff;
}

/* Headings */
.editor-content h1 {
  font-size: 1.5rem;
  margin-top: 1.5rem;
}
.editor-content h2 {
  font-size: 1.3rem;
  margin-top: 1.2rem;
}

/* Lists */
.editor-content ul, .editor-content ol {
  padding-left: 20px;
  margin: 10px 0;
}
.editor-content li {
  margin: 5px 0;
}

/* Code Block */
.editor-content pre {
  background: #111;
  color: #fff;
  padding: 10px;
  border-radius: 5px;
  overflow-x: auto;
}

/* Blockquote */
.editor-content blockquote {
  border-left: 3px solid #ccc;
  padding-left: 12px;
  color: #555;
  margin: 10px 0;
  font-style: italic;
}
</style>