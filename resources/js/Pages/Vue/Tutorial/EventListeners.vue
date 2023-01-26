<script setup>
import {ref} from 'vue'

const count = ref(0)
const i = ref(0)
const buttonFuntion = ref('button')
const buttonI = ref('button')

const incrementI = () => {
    i.value++
}

function increment() {
    count.value++
}

</script>

<template>
     Now, try to implement the increment function yourself and bind it to the button using v-on.
    <!-- make this button work -->
    <button :class="buttonFuntion" @click="increment">count is: {{ count }}</button>
    <button :class="buttonI" @click="incrementI">i is: {{ i }}</button>
</template>

<style>
.button {
    background-color: aquamarine;
    padding: 0.5em;
    margin: 0.5em;
    border-radius: 0.5em;
}
</style>
