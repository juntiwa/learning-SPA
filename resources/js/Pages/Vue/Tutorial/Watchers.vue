<script setup>
import {ref, watch} from 'vue'
import VueTutorial from "../../../Components/Layouts/VueTutorial";
import ButtonElement from "../../../Components/Element/ButtonElement";

const todoId = ref(1)
const todoData = ref(null)

async function fetchData() {
    todoData.value = null
    const res = await fetch(
        `https://jsonplaceholder.typicode.com/todos/${todoId.value}`
    )
    todoData.value = await res.json()
}

fetchData()

watch(todoId,fetchData)
</script>

<template>
    <VueTutorial>
        Watchers
        <section>
            <b>Question</b>
            Try to implement a watcher that fetches a new todo when the button is clicked.
        </section>
        <b>Answer</b> <br>
        <p>Todo id: {{ todoId }}</p>
        <ButtonElement @click="todoId++" class="bg-orange-300 rounded p-2 my-2">Fetch next todo</ButtonElement>
        <p v-if="!todoData">Loading...</p>
        <pre v-else>{{ todoData }}</pre>
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
