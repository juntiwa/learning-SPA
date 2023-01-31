<template>
    <div>
        <label
            class="block font-semibold"
            :for="name"
            v-show="label"
        >{{ label }}</label>
        <input
            class="w-full px-2 py-2 rounded border"
           :id="name"
            :readonly="readonly"
            :disabled="disabled"
            :type="type"
            :name="name"
            :value="modelValue"
            @input="$emit('update:modelValue', $event.target.value)"
        />
        <small
            class="text-red-400 text-sm"
            v-show="error"
        >{{ error }}</small>
    </div>
</template>

<script setup>
    defineProps({
        name: {type: String, required: true},
        disabled: {type: Boolean, default: false},
        readonly: {type: Boolean, default: false},
        type: {type: String, default: 'text'},
        label: {type: [String,null], default: null},
        error: {type: [String,null], default: null},
        modelValue: {type: [String,null], required: true},
    });

    defineEmits(['update:modelValue'])

   /* function onInput(event) {
        console.log(event.target.value);
        emits('update:modelValue', event.target.value);
        /!*props.modelValue = event.target.value;
        props.error = event.target.value;*!/
    }*/
</script>
