<script setup>
import {computed, ref} from 'vue'
import CodeElement from "../../../Components/Element/CodeElement";
import VueTutorial from "../../../Components/Layouts/VueTutorial";
import InputElement from "../../../Components/Element/InputElement";
import ButtonElement from "../../../Components/Element/ButtonElement";

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
        ? todos.value.filter(t => !t.done)
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
    <VueTutorial>
        Computed Property
        <section>
            <b>Question</b>
            Now, try to add the
            <CodeElement>filteredTodos</CodeElement>
            computed property and implement its computation logic!
            If implemented correctly, checking off a todo when hiding completed items should instantly hide it as
            well.
        </section>
        <b>Answer</b> <br>
        <form @submit.prevent="addTodo">
            <InputElement v-model="newTodo" class="border p-2 mr-2 rounded"/>
            <ButtonElement class="bg-orange-300 p-2 rounded">Add Todo</ButtonElement>
        </form>
        <ul>
            <li v-for="todo in filteredTodos" :key="todo.id">
                <InputElement type="checkbox" v-model="todo.done" class="mr-2"/>
                <span :class="{ done: todo.done }">{{ todo.text }}</span>
                <ButtonElement @click="removeTodo(todo)" class="text-rose-600 mx-2">X</ButtonElement>
            </li>
        </ul>
        <ButtonElement @click="hideCompleted = !hideCompleted" class="bg-teal-400 p-2 my-2 rounded">
            {{ hideCompleted ? 'Show all' : 'Hide completed' }}
        </ButtonElement>
    </VueTutorial>
</template>

<style>
.done {
    text-decoration: line-through;
}
section {
    border: 2px;
    border-style: dashed;
    padding: 0.5em;
    margin: 0.5em 0 0.5em;
}
</style>
