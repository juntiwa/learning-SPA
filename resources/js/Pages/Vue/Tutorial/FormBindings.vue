<script setup>
import {ref} from 'vue'

const text = ref('')

function onInput(e) {
    text.value = e.target.value
}
</script>

<template>
    <p class="text-rose-600">Now, try to refactor the code to use v-model instead.</p>
    <!--    <input :value="text" @input="onInput" placeholder="Type here">-->
    <input v-model="text" placeholder="Type here">
    <p>{{ text }}</p>
</template>
