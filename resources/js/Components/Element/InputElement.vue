<template>
    <input :type="type"
           :name="name"
           :id="name"
           :value="modelValue"
           @input="handleChange"
           class="border p-2 rounded border-slate-500"/>
<!--    <input :type="type"
           :name="name"
           :id="name"
           :value="modelValue"
           @input="$emit('update:modelValue', $event.target.value)"
           class="border p-2 rounded border-slate-500"/>-->
</template>

<script setup>
defineProps(['type', 'name', 'modelValue'])
const emit = defineEmits(['customChange'])
const handleChange = (event) => {
    emit('customChange', event.target.value)
}
</script>

<style scoped>

</style>
