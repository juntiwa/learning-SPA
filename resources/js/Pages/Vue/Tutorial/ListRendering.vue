<script setup>
import {ref} from 'vue'

// give each todo a unique id
let id = 0

const newTodo = ref('')
const todos = ref([
    {id: id++, text: 'Learn HTML'},
    {id: id++, text: 'Learn JavaScript'},
    {id: id++, text: 'Learn Vue'}
])

function addTodo() {
    // ...
    todos.value.push({id: id++, text: newTodo.value})
    newTodo.value = ''
}

function removeTodo(todo) {
    // ...
    todos.value = todos.value.filter((t) => t !== todo)
}
</script>

<template>
    Here we have a simple todo list - try to implement the logic for addTodo() and removeTodo() methods to make it work!

    <form @submit.prevent="addTodo">
        <input v-model="newTodo" class="border border-slate-800 rounded p-1 mx-2">
        <button class="bg-teal-600 text-white rounded px-2 p-1">Add Todo</button>
    </form>
    <ul>
        <li v-for="todo in todos" :key="todo.id" class="p-1">
            {{ todo.text }}
            <button @click="removeTodo(todo)" class="bg-rose-500 text-white px-2 rounded">X</button>
        </li>
    </ul>
</template>
