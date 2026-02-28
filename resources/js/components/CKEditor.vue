<script setup>
// ১. @tiptap/vue-3 থেকে সব প্রয়োজনীয় জিনিস একবারে নিন
import { useEditor, EditorContent, BubbleMenu, FloatingMenu } from '@tiptap/vue-3'
import StarterKit from '@tiptap/starter-kit'
import Underline from '@tiptap/extension-underline'
import Link from '@tiptap/extension-link'
import Placeholder from '@tiptap/extension-placeholder'

const props = defineProps({ modelValue: String })
const emit = defineEmits(['update:modelValue'])

const editor = useEditor({
    content: props.modelValue,
    extensions: [
        StarterKit,
        Underline,
        Link.configure({ openOnClick: false }),
        Placeholder.configure({
            placeholder: "Notion-এর মতো এখানে লিখুন...",
        }),
        // নোট: এখানে BubbleMenu বা FloatingMenu এক্সটেনশন হিসেবে দেওয়ার দরকার নেই 
        // কারণ আমরা সরাসরি Vue কম্পোনেন্ট ব্যবহার করছি।
    ],
    onUpdate: ({ editor }) => {
        emit('update:modelValue', editor.getHTML())
    },
    editorProps: {
        attributes: {
            // Notion লুকের জন্য প্যাডিং এবং বর্ডার
            class: 'prose max-w-none p-10 min-h-[400px] focus:outline-none bg-white mx-auto shadow-sm border rounded-lg',
        },
    },
})
</script>

<template>
    <div v-if="editor" class="relative max-w-4xl mx-auto mt-10">
        
        <bubble-menu 
            :editor="editor" 
            :tippy-options="{ duration: 100 }"
            v-if="editor"
            class="bubble-menu-wrapper"
        >
            <button type="button" @click="editor.chain().focus().toggleBold().run()" :class="{ 'is-active': editor.isActive('bold') }" class="bubble-btn">B</button>
            <button type="button" @click="editor.chain().focus().toggleItalic().run()" :class="{ 'is-active': editor.isActive('italic') }" class="bubble-btn">I</button>
            <button type="button" @click="editor.chain().focus().toggleHeading({ level: 1 }).run()" class="bubble-btn">H1</button>
        </bubble-menu>

        <floating-menu 
            :editor="editor" 
            :tippy-options="{ duration: 100 }"
            v-if="editor"
            class="floating-menu-wrapper"
        >
            <button type="button" @click="editor.chain().focus().toggleHeading({ level: 1 }).run()" class="float-btn">H1</button>
            <button type="button" @click="editor.chain().focus().toggleHeading({ level: 2 }).run()" class="float-btn">H2</button>
            <button type="button" @click="editor.chain().focus().toggleBulletList().run()" class="float-btn">List</button>
        </floating-menu>

        <editor-content :editor="editor" />
    </div>
</template>

<style scoped>
/* মেনুগুলোর ডিজাইন */
.bubble-menu-wrapper {
    display: flex;
    background-color: #1f2937; /* Dark Gray */
    padding: 4px;
    border-radius: 8px;
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.3);
    z-index: 50;
}

.floating-menu-wrapper {
    display: flex;
    gap: 5px;
    background-color: white;
    border: 1px solid #e5e7eb;
    padding: 5px;
    border-radius: 8px;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    z-index: 50;
}

.bubble-btn {
    background: transparent;
    border: none;
    color: white;
    padding: 5px 12px;
    cursor: pointer;
    font-weight: bold;
    border-radius: 4px;
}
.bubble-btn:hover { background: #374151; }
.bubble-btn.is-active { color: #60a5fa; }

.float-btn {
    background: #f9fafb;
    border: 1px solid #d1d5db;
    padding: 3px 10px;
    font-size: 11px;
    cursor: pointer;
    border-radius: 4px;
    font-weight: bold;
}
.float-btn:hover { background: #e5e7eb; }

/* Notion Vibe */
:deep(.tiptap) {
    font-family: 'Inter', sans-serif;
    outline: none !important;
}

:deep(.tiptap p.is-editor-empty:first-child::before) {
    content: attr(data-placeholder);
    float: left;
    color: #adb5bd;
    pointer-events: none;
    height: 0;
}
</style>