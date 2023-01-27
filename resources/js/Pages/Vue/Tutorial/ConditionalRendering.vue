<script setup>
import {ref} from 'vue'
import CodeElement from "../../../Components/Element/CodeElement";
import VueTutorial from "../../../Components/Layouts/VueTutorial";

const awesome = ref(true)

function toggle() {
    awesome.value = !awesome.value
}
</script>

<template>
    <VueTutorial>
        Conditional Rendering
        <section>
            <b>Question</b>
            Currently, the demo is showing both
            <CodeElement>&lt;h1&gt;</CodeElement>
            s at the same time, and the button does nothing.
            Try to add
            <CodeElement>v-if</CodeElement>
            and
            <CodeElement>v-else</CodeElement>
            directives to them, and implement the
            <CodeElement>toggle()</CodeElement>
            method so that
            we can use the button to toggle between them.
        </section>
        <b>Answer</b> <br>
        <button @click="toggle" class="bg-orange-300 p-2 rounded">toggle</button>
        <h1 v-if="awesome">Vue is awesome!</h1>
        <h1 v-else>Oh no 😢</h1>
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
