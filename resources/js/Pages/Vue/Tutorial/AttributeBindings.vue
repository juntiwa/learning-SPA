<script setup>
import { ref } from 'vue'
import CodeElement from "../../../Components/Element/CodeElement";
import VueTutorial from "../../../Components/Layouts/VueTutorial";

const titleClass = ref('title')
</script>

<template>
    <VueTutorial>
        Attribute Bindings
        <section>
            <b>Question</b>
            Now, try to add a dynamic class binding to the
            <CodeElement>&lt;h1&gt;</CodeElement>,
            using the titleClass ref as its value. If it's bound correctly, the text should turn red.
        </section>
        <b>Answer</b> <br>
        <h1 :class="titleClass">Make me red</h1> <!-- add dynamic class binding here -->
    </VueTutorial>
</template>

<style>
.title {
    color: red;
}

section{
    border: 2px;
    border-style: dashed;
    padding: 0.5em;
    margin: 0.5em 0 0.5em;
}
</style>
