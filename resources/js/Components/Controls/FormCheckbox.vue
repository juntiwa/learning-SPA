<template>
    <div>
        <input
            type="checkbox"
            :name="name"
            :id="name"
            :checked="modelValue"
            @change="$emit('update:modelValue',!modelValue)"
        />
        <label
            class="ml-2"
            :for="name"
            v-if="label"
        >
            {{ label }}
        </label>
    </div>
</template>

<script setup>
defineProps({
    name: {type: String, required: true},
    modelValue: {type: Boolean, default: false},
    label: {type: [String, null], default: null},
})

defineEmits(['update:modelValue'])

</script>
