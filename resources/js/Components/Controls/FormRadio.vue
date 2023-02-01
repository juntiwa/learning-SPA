<template>
    <div v-for="option in options"
    >
        <input
            type="radio"
            :name="name"
            :id="option.id"
            :value="option.id"
            @change="$emit('update:modelValue',$event.target.value)"
        />
        <label
            class="ml-2"
            :for="option.id"
        >
            {{ option.name ? option.name : option }}
        </label>
    </div>
</template>

<script setup>
defineProps({
    name: {type: String, required: true},
    modelValue: {type: Boolean, required: true},
    label: {type: [String, null], default: null},
    options: {type: Object, required: true}

})

defineEmits(['update:modelValue'])

</script>
