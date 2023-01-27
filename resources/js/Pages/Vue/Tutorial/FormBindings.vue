<script setup>
import {ref} from 'vue'
import CodeElement from "../../../Components/Element/CodeElement";
import InputElement from "../../../Components/Element/InputElement";
import VueTutorial from "../../../Components/Layouts/VueTutorial";

const text = ref('')

function onInput(e) {
    text.value = e.target.value
}
</script>

<template>
    <VueTutorial>
        Form Bindings
        <section>
            <b>Question</b>
            Now, try to refactor the code to use <CodeElement>v-model</CodeElement> instead.
        </section>
        <b>Answer</b> <br>
        <InputElement :value="text" @input="onInput" class="border" placeholder="Type here"/>
        <InputElement v-model="text" class="border" placeholder="Type here"/>
        <p>{{ text }}</p>

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
