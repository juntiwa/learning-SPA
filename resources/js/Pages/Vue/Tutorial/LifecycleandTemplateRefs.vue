<script setup>
import {ref, onMounted} from 'vue'

const p = ref(null)
onMounted(() => {
    // component is now mounted.
    p.value.textContent = "mounted!"
})
</script>

<template>
    Now, try to add an onMounted hook, access the
    &lt;p&gt; via p.value, and perform some direct DOM operations on it (e.g. changing its textContent).
    <p ref="p">hello</p>
</template>
