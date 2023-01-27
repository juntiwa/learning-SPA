<template>
    <input :type="type"
           :name="name"
           :id="name"
           :value="modelValue"
           @input="$emit('update:modelValue', $event.target.value)"
           class="border p-2 rounded"/>
</template>

<script setup>
defineProps(['type', 'name', 'modelValue'])
</script>

<style scoped>

</style>
