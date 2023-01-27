<script setup>
import {ref} from 'vue'
import CodeElement from "../../../Components/Element/CodeElement";
import InputElement from "../../../Components/Element/InputElement";
import VueTutorial from "../../../Components/Layouts/VueTutorial";
import ButtonElement from "../../../Components/Element/ButtonElement";

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
    todos.value = todos.value.filter(t => t !== todo)
    console.log(todo)
}
</script>

<template>
    <VueTutorial>
        List Rendering
        <section>
            <b>Question</b>
            Try to implement the logic for
            <CodeElement>addTodo()</CodeElement>
            and
            <CodeElement>removeTodo()</CodeElement>
            methods to make it work!
        </section>
        <b>Answer</b> <br>
        <form @submit.prevent="addTodo">
            <InputElement v-model="newTodo" class="border p-2 mr-2 rounded"/>
            <ButtonElement class="bg-orange-300 p-2 rounded">Add Todo</ButtonElement>

        </form>
        <ul>
            <li v-for="todo in todos" :key="todo.id">
                {{ todo.text }}
                <ButtonElement @click="removeTodo(todo)" class="text-rose-600">X</ButtonElement>
            </li>
        </ul>
    </VueTutorial>
</template>

<style>
code {
    color: #f43f5e;
}

section {
    border: 2px;
    border-style: dashed;
    padding: 0.5em;
    margin: 0.5em 0 0.5em;
}
</style>
