<template>
    <div>
        <select
            @change="$emit('update:modelValue',$event.target.value)"
        >
            <option
                v-for="option in options"
                :value="option.id"
            >
                {{ option.name }}
            </option>
        </select>
    </div>
</template>

<script setup>
defineProps({
    modelValue: {type: String, required: true},
    options: {type: Object, required: true}
})
</script>
