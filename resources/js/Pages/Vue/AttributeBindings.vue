<script setup>
import {ref} from 'vue'

const titleClass = ref('title')
</script>

<template>
    <!-- Now, try to add a dynamic class binding to the <h1>, using the titleClass ref as its value.
    If it's bound correctly, the text should turn red.  -->
    <h1 :class="titleClass">Make me red</h1> <!-- add dynamic class binding here -->
</template>

<style>
.title {
    color: red;
}
</style>
