<script setup>
import {ref} from 'vue'

const awesome = ref(true)

function toggle() {
    // ...
    awesome.value = !awesome.value
}
</script>

<template>
    Currently, the demo is showing both &lt;h1&gt; s at the same time, and the button does nothing.
    <p class="text-rose-600">
        Try to add v-if and v-else directives to them, and implement the toggle() method so that
        we can use the button to toggle between them.
    </p>

    <button @click="toggle" class="bg-teal-400 px-2 py-1.5 rounded">toggle</button>
    <h1 v-if="awesome">Vue is awesome!</h1>
    <h1 v-else>Oh no 😢</h1>
</template>
