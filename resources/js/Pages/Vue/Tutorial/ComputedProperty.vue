<script setup>
import {computed, ref} from 'vue'

let id = 0

const newTodo = ref('')
const hideCompleted = ref(false)
const todos = ref([
    {id: id++, text: 'Learn HTML', done: true},
    {id: id++, text: 'Learn JavaScript', done: true},
    {id: id++, text: 'Learn Vue', done: false}
])

const filteredTodos = computed(() => {
    // return filtered todos based on
    // `todos.value` & `hideCompleted.value`
    return hideCompleted.value
        ? todos.value.filter((t) => !t.done)
        : todos.value
})

function addTodo() {
    todos.value.push({id: id++, text: newTodo.value, done: false})
    newTodo.value = ''
}

function removeTodo(todo) {
    todos.value = todos.value.filter((t) => t !== todo)
}
</script>

<template>
    Now, try to add the filteredTodos computed property and implement its computation logic! If implemented correctly,
    checking off a todo when hiding completed items should instantly hide it as well.
    <form @submit.prevent="addTodo">
        <input v-model="newTodo" class="border border-slate-800 rounded p-1 mx-2">
        <button class="bg-teal-600 text-white rounded px-2 p-1">Add Todo</button>
    </form>
    <ul>
        <li v-for="todo in filteredTodos" :key="todo.id">
            <input type="checkbox" v-model="todo.done">
            <span :class="{ done: todo.done }" class="px-2">{{ todo.text }}</span>
            <button @click="removeTodo(todo)" class="bg-rose-500 text-white px-2 rounded">X</button>
        </li>
    </ul>
    <button @click="hideCompleted = !hideCompleted" class="bg-orange-500 text-white px-2 py-1 mt-3 rounded">
        {{ hideCompleted ? 'Show all' : 'Hide completed' }}
    </button>
</template>

<style>
.done {
    text-decoration: line-through;
}
</style>
