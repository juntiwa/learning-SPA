<script setup>
import {ref} from 'vue'
import CodeElement from "../../../Components/Element/CodeElement";
import ButtonElement from "../../../Components/Element/ButtonElement";
import VueTutorial from "../../../Components/Layouts/VueTutorial";

const count = ref(0)
function increment() {
    count.value++
}
function increaseCount(n) {
    count.value += n
}
</script>

<template>
    <VueTutorial>
        Event Listeners
        <section>
            <b>Question</b>
            Now, try to implement the
            <CodeElement>increment</CodeElement>
            function yourself and bind it to the button using v-on.
        </section>
        <b>Answer</b> <br>
        <!-- make this button work -->
        <ButtonElement @click="increment" class="bg-orange-300 p-2 rounded">count is: {{ count }}</ButtonElement>
        <ButtonElement @increase-by="increaseCount">f {{ count }}</ButtonElement>
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
